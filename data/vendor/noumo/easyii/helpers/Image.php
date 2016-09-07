<?php

namespace yii\easyii\helpers;

use Yii;
use yii\web\UploadedFile;
use yii\web\HttpException;
use yii\helpers\FileHelper;
use yii\helpers\Url;
use yii\easyii\helpers\GD;

class Image {

    public static function upload(UploadedFile $fileInstance, $dir = '', $resizeWidth = null, $resizeHeight = null, $resizeCrop = false) {
        $fileName = Upload::getUploadPath($dir) . DIRECTORY_SEPARATOR . $fileInstance->name; // ruta dentro de la aplicacion
        $save_copia = Upload::getUploadPathh($dir) . DIRECTORY_SEPARATOR . $fileInstance->name; // ruta fuera de la aplicacion

        $uploaded = $resizeWidth ? self::copyResizedImage($fileInstance->tempName, $fileName, $resizeWidth, $resizeHeight, $resizeCrop) :
                $fileInstance->saveAs($fileName); //guarda imagen en ruta de la aplicación

        $uploade = $resizeWidth ? self::copyResizedImage($fileInstance->tempName, $save_copia, $resizeWidth, $resizeHeight, $resizeCrop) :
                $fileInstance->saveAs($save_copia); //guarda imagen fuera de la aplicación


        if (!$uploaded) {
            throw new HttpException(500, 'Cannot upload file "' . $fileName . '". Please check write permissions.');
        }
        if (!$uploade) {
            throw new HttpException(500, 'Cannot upload file "' . $save_copia . '". Please check write permissions.');
        }

        return Upload::getLink($fileName, $save_copia);
    }

    static function thumb($filename, $width = null, $height = null, $crop = true) { // guarda archivos en carpeta thumbs

        if ($filename && is_file(($filename = Yii::getAlias('@webroot') . $filename))) {
            $info = pathinfo($filename);
            $thumbName = $info['filename'] . '-' . md5(filemtime($filename) . (int) $width . (int) $height . (int) $crop) . '.' . $info['extension'];
            $thumbFile = dirname(Yii::getAlias('@webroot')) . DIRECTORY_SEPARATOR . Upload::$UPLOADS_DIR . DIRECTORY_SEPARATOR . 'thumbs' . DIRECTORY_SEPARATOR . $thumbName;
            $thumbWebFile = '/' . Upload::$UPLOADS_DIR . '/thumbs/' . $thumbName;
            if (file_exists($thumbFile)) {
                return $thumbWebFile;
            } elseif (FileHelper::createDirectory(dirname($thumbFile), 0777) && self::copyResizedImage($filename, $thumbFile, $width, $height, $crop)) {
                return $thumbWebFile;
            }
        }

        return '';
    }

    static function copyResizedImage($inputFile, $outputFile, $width, $height = null, $crop = true) {
        if (extension_loaded('gd')) {
            $image = new GD($inputFile);

            if ($height) {
                if ($width && $crop) {
                    $image->cropThumbnail($width, $height);
                } else {
                    $image->resize($width, $height);
                }
            } else {
                $image->resize($width);
            }
            return $image->save($outputFile);
        } elseif (extension_loaded('imagick')) {
            $image = new \Imagick($inputFile);

            if ($height && !$crop) {
                $image->resizeImage($width, $height, \Imagick::FILTER_LANCZOS, 1, true);
            } else {
                $image->resizeImage($width, null, \Imagick::FILTER_LANCZOS, 1);
            }

            if ($height && $crop) {
                $image->cropThumbnailImage($width, $height);
            }

            return $image->writeImage($outputFile);
        } else {
            throw new HttpException(500, 'Please install GD or Imagick extension');
        }
    }

}

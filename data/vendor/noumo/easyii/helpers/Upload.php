<?php

namespace yii\easyii\helpers;

use Yii;
use yii\web\UploadedFile;
use \yii\web\HttpException;
use yii\helpers\Inflector;
use yii\helpers\StringHelper;
use yii\helpers\FileHelper;
use yii\helpers\Url;

class Upload {

    public static $UPLOADS_DIR = 'uploads';

    public static function file(UploadedFile $fileInstance, $dir = '', $namePostfix = true) {
        $fileName = Upload::getUploadPath($dir) . DIRECTORY_SEPARATOR . Upload::getFileName($fileInstance, $namePostfix); // ruta dentro de la aplicacion
        $save_copia = Upload::getUploadPathh($dir) . DIRECTORY_SEPARATOR . Upload::getFileName($fileInstance, $namePostfix); // ruta fuera de la aplicacion


        if (!$fileInstance->saveAs($fileName)) {
            throw new HttpException(500, 'Cannot upload file "' . $fileName . '". Please check write permissions.');
        }
        if (!$fileInstance->saveAs($save_copia)) {
            throw new HttpException(500, 'Cannot upload file "' . $save_copia . '". Please check write permissions.');
        }
        return Upload::getLink($fileName, $save_copia);
    }

    static function getUploadPath($dir) { // de aqui parte la ruta dentro de la aplicación
        $uploadPath = Yii::getAlias('@webroot') . DIRECTORY_SEPARATOR . self::$UPLOADS_DIR . ($dir ? DIRECTORY_SEPARATOR . $dir : '');
//        var_dump($uploadPath);die;
        if (!FileHelper::createDirectory($uploadPath)) {
            throw new HttpException(500, 'Cannot create "' . $uploadPath . '". Please check write permissions.');
        }
        return $uploadPath;
    }

    static function getUploadPathh($dir) { // de aqui parte la ruta fuera de la aplicación
        $uploadPath = dirname(Yii::getAlias('@webroot')) . DIRECTORY_SEPARATOR . self::$UPLOADS_DIR . ($dir ? DIRECTORY_SEPARATOR . $dir : '');

        if (!FileHelper::createDirectory($uploadPath)) {
            throw new HttpException(500, 'Cannot create "' . $uploadPath . '". Please check write permissions.');
        }
        return $uploadPath;
    }

    static function getLink($fileName, $save_copia) {
        return str_replace('\\', '/', str_replace(Yii::getAlias('@webroot'), '', $fileName));

        return str_replace('\\', '/', str_replace(Yii::getAlias('@webroot'), '', $save_copia));
    }

    static function getFileName($fileInstanse, $namePostfix = true) {
        $baseName = str_ireplace('.' . $fileInstanse->extension, '', $fileInstanse->name);
        $fileName = StringHelper::truncate(Inflector::slug($baseName), 32, '');
        if ($namePostfix || !$fileName) {
            $fileName .= ($fileName ? '-' : '') . substr(uniqid(md5(rand()), true), 0, 10);
        }
        $fileName .= '.' . $fileInstanse->extension;

        return $fileName;
    }

}

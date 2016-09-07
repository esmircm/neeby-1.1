<?php
namespace yii\easyii\modules\gallery\api;

use Yii;

use yii\easyii\models\Photo;
use yii\easyii\modules\gallery\models\Category;
use yii\easyii\widgets\Fancybox;

/**
 * Gallery module API
 * @package yii\easyii\modules\gallery\api
 *
 * @method static CategoryObject cat(mixed $id_slug) Get gallery category by id or slug
 * @method static array tree() Get gallery categories as tree
 * @method static array cats() Get gallery categories as flat array
 * @method static PhotoObject get(int $id) Get photo object by id
 * @method static mixed last(int $limit = 1, mixed $where = null) Get last photos, use $where option for fetching photos from special category
 * @method static void plugin() Applies FancyBox widget on photos called by box() function
 * @method static string pages() returns pagination html generated by yii\widgets\LinkPager widget.
 * @method static \stdClass pagination() returns yii\data\Pagination object.
 */

class Gallery extends \yii\easyii\components\API
{
    private $_cats;
    private $_photos;
    private $_last;

    public function api_cat($id_slug)
    {
        if(!isset($this->_cats[$id_slug])) {
            $this->_cats[$id_slug] = $this->findCategory($id_slug);
        }
        return $this->_cats[$id_slug];
    }

    public function api_tree()
    {
        return Category::tree();
    }

    public function api_cats()
    {
        return Category::cats();
    }


    public function api_last($limit = 1, $where = null)
    {
        if($limit === 1 && $this->_last){
            return $this->_last;
        }

        $result = [];

        $query = Photo::find()->where(['class' => Category::className()])->sort()->limit($limit);
        if($where){
            $query->andWhere($where);
        }

        foreach($query->all() as $item){
            $photoObject = new PhotoObject($item);
            $photoObject->rel = 'last';
            $result[] = $photoObject;
        }

        if($limit > 1){
            return $result;
        }else{
            $this->_last = count($result) ? $result[0] : null;
            return $this->_last;
        }
    }

  public function api_imagen($photo_id) {

//        echo $photo_id;die;

//        $connectionn = Yii::app()->db;
        $sq = ("SELECT image, item_id, photo_id FROM easyii_photos WHERE photo_id ={$photo_id}");
        $ene = Yii::$app->db->createCommand($sq)->queryAll();
//        var_dump($ene);die;
        return $ene;
        

    }

    public function api_get($id)
    {
        if(!isset($this->_photos[$id])) {
            $this->_photos[$id] = $this->findPhoto($id);
        }
        return $this->_photos[$id];
    }

    public function api_plugin($options = [])
    {
        Fancybox::widget([
            'selector' => '.easyii-box',
            'options' => $options
        ]);
    }

    private function findCategory($id_slug)
    {
        $category = Category::find()->where(['or', 'category_id=:id_slug', 'slug=:id_slug'], [':id_slug' => $id_slug])->status(Category::STATUS_ON)->one();

        return $category ? new CategoryObject($category) : null;
    }

    private function findPhoto($id)
    {
        return Photo::findOne($id);
    }
}

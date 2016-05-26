<?php

namespace frontend\controllers;

use frontend\models\Image;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $url_img = Image::getImageUrl();
        return $this->render('index',["url_img"=>$url_img]);
    }

}

<?php

namespace app\modules\main\controllers;

use frontend\models\Image;

class MainController extends \yii\web\Controller
{
    public $layout = 'bootstrap';
    public function actionIndex()
    {

        
        return $this->render('index');
    }

    public function actionRegister(){

        return $this->render('register');
    }

}

<?php

namespace app\modules\main\controllers;

use frontend\models\ContactForm;
use frontend\models\Image;
use frontend\models\SignupForm;
use yii\bootstrap\ActiveForm;
use yii\web\Response;

class MainController extends \yii\web\Controller {
    public $layout = 'inner';

    public function actions(){

        return [

            'captcha' => ['class' => 'yii\captcha\CaptchaAction', 'fixedVerifyCode' => YII_ENV_TEST ? '111' : null,], 'test' => ['class' => 'frontend\actions\TestAction',]

        ];

    }

    public function actionIndex(){


        return $this->render('index');
    }

    public function actionRegister(){
        $model = new SignupForm();
        if (\Yii::$app->request->isAjax && \Yii::$app->request->isPost) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }
        if ($model->load(\Yii::$app->request->post()) && $model->signup()) {
//            d($model->getAttributes());
        }
        return $this->render('register', ['model' => $model]);
    }

    public function actionContact(){

        $model = new ContactForm();

        if ($model->load(\Yii::$app->request->post() )) {
            \Yii::$app->common->sendMail($model->subject,$model->body);
        print ('Success send'); die;
        }

        return $this->render('contact', ['model' => $model]);
    }

}

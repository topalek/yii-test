<?php

namespace app\modules\main\controllers;

use frontend\components\Common;
use yii\web\Controller;

/**
 * Default controller for the `main` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = "bootstrap";
        return $this->render('index');
    }

    public function actionService(){
        $locator = \Yii::$app->locator;
        $cache = $locator->cache;

    }

    public function actionEvent(){
        $component = \Yii::$app->common; // $component = new Common();
        $component->on(Common::EVENT_NOTIFY,[$component,'notifyAdmin']);
        $component->sendMail('1@11.11','test','lorem10 ');
        $component->off(Common::EVENT_NOTIFY,[$component,'notifyAdmin']);
    }
}

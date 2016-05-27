<?php
namespace frontend\component;

use yii\base\Component;

class Common extends Component{


    public static function sendMail($email, $subj, $body, $name = '')
    {
        \Yii::$app->mailer->compose()
            ->setFrom([\Yii::$app->params['supportEmail']=> \Yii::$app->name])
            ->setTo([$email =>$name])
            ->setSubject($subj)
            ->setTextBody($body)
            ->send();
        
    }
    
    
}
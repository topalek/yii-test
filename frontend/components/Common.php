<?php
namespace frontend\components;

use yii\base\Component;

class Common extends Component{

    const EVENT_NOTIFY = 'notify_admin';

    public  function sendMail($email, $subj, $body, $name = '')
    {
//        \Yii::$app->mailer->compose()
//            ->setFrom([\Yii::$app->params['supportEmail']=> \Yii::$app->name])
//            ->setTo([$email =>$name])
//            ->setSubject($subj)
//            ->setTextBody($body)
//            ->send();

        $this->trigger(self::EVENT_NOTIFY);

    }


    public function notifyAdmin($ev)
    {

        print "Notify Admin";

    }
    
    
}
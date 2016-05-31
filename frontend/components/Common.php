<?php
namespace frontend\components;

use yii\base\Component;

class Common extends Component {

    const EVENT_NOTIFY = 'notify_admin';

    public function sendMail($subj, $body, $nameFrom = 'yii site', $emailTo = 'topalek@mail.ru'){
        if (\Yii::$app->mail->compose()
            ->setFrom(['yii2.school@yandex.ru' => 'Advert'])
            ->setTo([$nameFrom => $emailTo])
            ->setSubject($subj)
            ->setHtmlBody($body)
            ->send()
        ) {

            $this->trigger(self::EVENT_NOTIFY);
        }


    }


    public function notifyAdmin($ev){

        print "Notify Admin";

    }


}
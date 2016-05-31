<?php


namespace frontend\actions;


use yii\base\Action;

class TestAction extends Action {
    public $tpl = 'index';

    public function run() {
        return $this->controller->render("@frontend/actions/views/".$this->tpl);
    }
}
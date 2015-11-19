<?php

namespace app\modules\main\controllers;

use frontend\components\Common;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {

        $this->layout = "bootstrap";

        return $this->render('index');
    }

    public function actionService(){
        $cache = \Yii::$app->cache;


        $cache->set("test", 1);

        print $cache->get("test");

    }

    public function actionEvent(){

        $component = \Yii::$app->common;

        $component->on(Common::EVENT_NOTIFY, [$component, 'notifyAdmin']);

        $component->sendMail("test@domain", "test", "test text");
        $component->off(Common::EVENT_NOTIFY, [$component, 'notifyAdmin']);
    }


}

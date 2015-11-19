<?php

namespace frontend\controllers;

use frontend\models\Image;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $url_image = Image::getImageUrl();
        return $this->render('index', ['dasha'=> $url_image]);
    }

}

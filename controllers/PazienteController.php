<?php

namespace app\controllers;

class PazienteController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}

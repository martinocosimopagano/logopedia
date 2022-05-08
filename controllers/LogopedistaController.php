<?php

namespace app\controllers;

class LogopedistaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPage2()
    {

        $posts = Logopedista::find()
            ->select('*')
            ->from(Logopedista::tableName())
            ->all();
        

        $data['posts'] = $posts;




        $data['messaggio1'] = 'questo è il testo dinamico';
        return $this->render('page2', $data);
    }
}

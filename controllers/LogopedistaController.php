<?php

namespace app\controllers;

use yii\data\Pagination;
use app\models\Logopedista;

class LogopedistaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Logopedista::find();

        $pagination = new pagination([
            'defaultPageSize' => 4, // dopo 4 in elenco si deve passare alla pagina successiva
            'totalCount' => $query->count(),
        ]);

        $logopedisti = $query->orderby('username')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'logopedisti' => $logopedisti,
            'pagination' => $pagination,
        ]);
    }






    public function actionPage2()
    {
        $data['messaggio1'] = 'questo è il testo dinamico';
        return $this->render('page2', $data);
    }
}

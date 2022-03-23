<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $connection = Yii::$app->getDb();
        $command = $connection->createCommand("SELECT name,code FROM country WHERE name='Australia' AND code='A'");

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => 10,
        ]);

        $countries = $command->queryScalar();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}
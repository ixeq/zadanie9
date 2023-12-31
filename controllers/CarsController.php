<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Cars;

class CarsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $cars = Cars::find()->all();

        return $this->render('index', [
            'cars' => $cars,
        ]);
    }
}
<?php
namespace app\controllers;
 
use Yii;
use app\models\Student;
use yii\web\Controller;
 
class StudentController extends Controller
{  
    public function actionCreate()
    {
        $model = new Student();
 
        return $this->render('create', ['model' => $model]);
    }
}
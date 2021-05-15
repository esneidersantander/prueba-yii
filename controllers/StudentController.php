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
 
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
                 
        return $this->render('create', ['model' => $model]);
    }

    public function actionIndex()
    {
        $student = Student::find()->all();
         
        return $this->render('index', ['model' => $student]);
    }
}
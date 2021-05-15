<?php
namespace app\controllers;
 
use Yii;
use app\models\Student;
use yii\filters\AccessControl;
use yii\web\Controller;
 
class StudentController extends Controller
{  
    public function behaviors()
    {
        return[
            'access'=>[
                'class'=>AccessControl::className(),
                'rules'=>[
                    [
                        'allow'=>true,
                        'roles'=>['@']
                    ]
                ]
            ]
        ];
    }

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

    public function actionEdit($id)
    {
        $model = Student::find()->where(['id' => $id])->one();
 
        // update record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
         
        return $this->render('edit', ['model' => $model]);
    }  

    public function actionDelete($id)
    {
        $model = Student::findOne($id);
        
       // delete record
       $model->delete();
        
       return $this->redirect(['index']);
    } 

    public function actionView($id)
    {
        $model = Student::findOne($id);
        
        return $this->render('view', ['model' => $model]);    
    } 
}
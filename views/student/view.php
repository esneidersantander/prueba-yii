<?php
use yii\helpers\Html; 
use yii\widgets\ActiveForm;   
?>

<div class="site-index">
    <h1>Student View</h1>
    <div class="body-content">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $model->full_name?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $model->address?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $model->phone?>
            </li>
    
        </ul>

        <div class="row">
            <a href=<?php echo yii::$app->homeUrl?> class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>
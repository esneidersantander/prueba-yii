<?php
use yii\helpers\Html; 
use yii\widgets\ActiveForm;   
?>

Hola usuario
<?php
    $formulario = ActiveForm::begin();
?>
<?= $formulario->field($model,'valora') ?>
<?= $formulario->field($model,'valorb') ?>

<div class="form-group">
    <?=
        Html::submitButton('Enviar', ['class'=>'btn btn-primary'])
    ?>
</div>

<?php
    ActiveForm::end();
?>
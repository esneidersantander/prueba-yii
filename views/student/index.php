<?php
use yii\helpers\Html;
?>
 
<style>
table th,td{
    padding: 10px;
}
</style>
 


<div class="site-index">
    <div class="jumbotron">
        <h1 style="color: #337ab7">CRUD APPLICATION</h1>
    </div>
    <?= Html::a('Create', ['student/create'], ['class' => 'btn btn-success']); ?>
    <div class="body-content">
        <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Full_name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($model as $field){ ?>
                <tr class="table-active">
                    <td><?= $field->full_name; ?></td>
                    <td><?= $field->address; ?></td>
                    <td><?= $field->phone; ?></td>
                    <td><?= Html::a("Edit", ['student/edit', 'id' => $field->id], ['class'=>'label label-primary']); ?> | <?= Html::a("Delete", ['student/delete', 'id' => $field->id], ['class'=>'label label-danger']); ?> | <?= Html::a("View", ['student/view', 'id' => $field->id], ['class'=>'label label-default']); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </div>

</div>

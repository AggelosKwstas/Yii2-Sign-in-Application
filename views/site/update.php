<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'CRUD';
?>


    <div class="body-content">
        <?php
        $form = ActiveForm::begin()?>    
    <div class="row">
        <div class="form-group">
            <div class="col-lg-5" style="margin: -2px;">
                <?= $form->field($country,'code');?>
            </div>
        </div>
    </div>
    
        <div class="row">
        <div class="form-group">
            <div class="col-lg-10">
                <?= $form->field($country,'name');?>
            </div>
        </div>
        </div>
    
        <div class="row">
        <div class="form-group">
            <div class="col-lg-10">
                <?= $form->field($country,'population');?>
            </div>
        </div>
        </div>
    
        <div class="row">
            <div class="form-group" style="margin:15px;">
            <?= Html::submitButton('Update Record',['class'=>'btn btn-danger']);?>
            <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a>
            </div>
        </div>
    
        <?php ActiveForm::end() ?>
    </div>

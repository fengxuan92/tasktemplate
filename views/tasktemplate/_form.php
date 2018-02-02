<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Tasktemplate;
/* @var $this yii\web\View */
/* @var $model app\models\Tasktemplate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tasktemplate-form">

    <?php $form = ActiveForm::begin(
    		[
    				'id' => 'login-form',
    				'options' => ['class' => 'form-horizontal'],
    				'fieldConfig' => [
    						'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
    						'labelOptions' => ['class' => 'col-lg-1'],
    				],
    		]
    		); ?>
    
    <?= Html::activeHiddenInput($model,'id') ?>
    

    <?= $form->field($model, 'name')->textInput(['maxlength' => 20,"style"=>"width:600px; height:30px;"]) ?>
   
   <?= $form->field($model, 'template_type')->textInput(['maxlength' => 20,"style"=>"width:600px; height:30px;"]) ?>

    <?= $form->field($model, 'Validation_type')->textInput(['maxlength' => 20,"style"=>"width:600px; height:30px;"]) ?>

    <?= $form->field($model, 'init_param')->textInput(['maxlength' => true,"style"=>"width:600px; height:80px;"]) ?>

    <?= $form->field($model, 'trigger_url')->textInput(['maxlength' => 20,"style"=>"width:600px; height:30px;"]) ?>

    <?= $form->field($model, 'check_url')->textInput(['maxlength' => 20,"style"=>"width:600px; height:30px;"]) ?>
    
    <?= Html::activeHiddenInput($model, 'result_code') ?>
    
    <?php 
        $taskObjs = Tasktemplate::find()->all();
        $allTemplate = ArrayHelper::map($taskObjs, 'id', 'name');
    ?>
        
     <?=  $form->field($model, 'conseq_template_array',[
            'template' => '{label}<div class="row"><div class="col-sm-9">{input}{error}{hint}</div></div>',
      ] )->widget(Select2::classname(), [
     		'data' => $allTemplate,
      		'options' => [
      		'multiple'=>true,
      		],    		
     ]);
     ?>
    
    <?php /* $form->field($model, 'conseq_template')->dropDownList($allTemplate,
    		['prompt'=>'----select a tempalte------',
    				'options' => [
    						'multiple'=>true,
    				],
    ]
    		); */
    		?>
    <?=  $form->field($model, 'prereq_tasks_array',[
            'template' => '{label}<div class="row"><div class="col-sm-9">{input}{error}{hint}</div></div>',
      ] )->widget(Select2::classname(), [
     		'data' => $allTemplate,
      		'options' => [
      		'multiple'=>true,
      		],    		
     ]);
     ?>
     
    <?php // $form->field($model, 'prereq_tasks')->textInput(['maxlength' => 20,"style"=>"width:300px; height:30px;"]) ?>

    <?= $form->field($model, 'manual_close')->radioList(['0'=>'Y','1'=>'N'])?>

    <?= $form->field($model, 'manual_reason')->textInput(['maxlength' => 20,"style"=>"width:300px; height:30px;"]) ?>

    <?= $form->field($model, 'due_time')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => ''],
        'pluginOptions' => [
         'autoclose' => true
        ]
    ]);?>

    <?= $form->field($model, 'user_name')->textInput(['maxlength' => 20,"style"=>"width:300px; height:30px;"]) ?>

    <?= $form->field($model, 'mandatory')->radioList(['0'=>'Y','1'=>'N'])?>
    
    <?= Html::activeHiddenInput($model, 'project_id') ?>
       
    <?= Html::activeHiddenInput($model, 'frombranch_id') ?>   
    
    <?= Html::activeHiddenInput($model, 'tobranch_id') ?>
   
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

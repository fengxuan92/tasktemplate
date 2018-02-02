<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
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

    <?= $form->field($model, 'name')->textInput(['maxlength' => 20,"style"=>"width:200px; height:30px;"])?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 20,"style"=>"width:200px; height:30px;"])?>
    
    <?= $form->field($model, 'edu')->dropDownList(['1'=>'Primary school','2'=>'High school','3'=>'University'], ['prompt'=>'please choose','style'=>'width:200px'])?>
    
    <?= $form->field($model, 'user') ->textInput(['maxlength' => 20,"style"=>"width:200px; height:30px;"])?>
    
    <?= $form->field($model, 'sex') ->radioList(['1'=>'male','0'=>'female'],["style"=>"width:200px; height:30px;"])?>
    
    <?= $form->field($model, 'hobby')->checkboxList(['0'=>'basketball','1'=>'football','2'=>'running','3'=>'badminton'])?>

    <div class="form-group">
       <?= Html::submitButton('Submit', ['class' => 'btn btn-primary','name' =>'submit-button']) ?>
    </div>

<?php ActiveForm::end(); ?>
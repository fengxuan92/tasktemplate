<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TaskTemplate */

$this->title = 'Create Task Template';
$this->params['breadcrumbs'][] = ['label' => 'Task Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-template-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Edu</label>: <?= Html::encode($model->edu) ?></li>
    <li><label>User</label>: <?= Html::encode($model->user) ?></li>
    <li><label>Sex</label>: <?= Html::encode($model->sex) ?></li>
    <li><label>Hobby</label>: <?= Html::encode($model->hobby) ?></li>
</ul>
<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 27/09/2017
 * Time: 15:07
 */
use yii\helpers\Html;
?>

<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
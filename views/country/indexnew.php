<?php

use app\models\Country;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="country-index">

        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create Country', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <table border=1>
            <tr>
                <th>Indicador</th>
                <th>Pais</th>
                <th>Pessoas</th>
            </tr><?php  foreach($countries as $country) : ?>
            <tr>
                <td><?=$country->code?></td>
                <td><?=$country->name?></td>
                <td><?=$country->population?></td>
                <td><a href="<?=\yii\helpers\Url::toRoute("country/update?id=$country->code")?>">Editar</a></td>
                <td><a href="<?=\yii\helpers\Url::toRoute("country/delete?id=$country->code")?>">Eliminar</a></td>
            </tr> <?php endforeach; ?>
        </table>
    </div>
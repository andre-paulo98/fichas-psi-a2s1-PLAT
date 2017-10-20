<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading"><h1><?=$model->title?></h1></div>
        <div class="panel-body"><?=$model->content?></div>
        <div class="panel-footer">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="<?=Url::toRoute("comment/create")?>" method="post">
                        Escrever comentário:
                        <textarea class="form-control" name="comentario" rows="5" id="comment"></textarea>
                        <input type="hidden" value="<?=$model->id?>" name="id">
                        <button class="btn btn-success">Comentar</button>
                    </form>
                </div>
            </div>
        <?php

        $comments = $model->getComments()->all();
        if(count($comments) > 0) {
            echo count($comments)." comentários";
            foreach ($comments as $comentario) { ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?=$comentario->author?>
                    </div>
                    <div class="panel-body">
                        <?=$comentario->content?>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "Sem comentários";
        }

        ?>
        </div>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'content',
            'tags',
            'status',
            'create_time',
            'update_time',
            'author',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php foreach($posts as $post) : ?>
    <div class="panel panel-default">
        <div class="panel-heading"><a href="<?=Url::toRoute("post/view?id=".$post->id)?>"><h3 class="panel-title"><?=Html::encode($post->title)?></h3></a></div>
        <div class="panel-body"><?=Html::encode($post->content)?></div>
        <div class="panel-footer">
        <?php
            $comments = $post->getComments()->all();
            if(count($comments) > 0) {
                echo "<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"\"><div class=\"btn-group\" role=\"group\">".count($comments)." comentários</div><div class=\"btn-group\" role=\"group\"></div><div class=\"btn-group\" role=\"group\"><a href=\"#\" class=\"btn btn-success\" role=\"button\">Escrever Comentário</a></div></div><br>";
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
                echo "<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"\"><div class=\"btn-group\" role=\"group\">Sem comentários</div><div class=\"btn-group\" role=\"group\"></div><div class=\"btn-group\" role=\"group\"><a href=\"#\" class=\"btn btn-success\" role=\"button\">Escrever Comentário</a></div></div>";
            }

        ?>
        </div>

    </div> <?php endforeach;?>

</div>

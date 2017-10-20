<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 27/09/2017
 * Time: 15:52
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<h1>Paises</h1>
<ul>
    <?php foreach($countries as $country) : ?>
        <li>
            <?=Html::encode("{$country->name} ({$country->code})")?> :
            <?=$country->population?>
        </li>
    <?php endforeach;?>


</ul>
<?=LinkPager::widget(['pagination' => $pagination]) ?>
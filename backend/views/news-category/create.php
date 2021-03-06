<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SiteCategory */

$this->title = 'Create Site Category';
$this->params['breadcrumbs'][] = ['label' => 'Site Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

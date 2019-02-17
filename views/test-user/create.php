<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TestUser */

$this->title = 'Create Test User';
$this->params['breadcrumbs'][] = ['label' => 'Test Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

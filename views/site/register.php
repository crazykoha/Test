<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
$model = new \app\models\TestUser();

use yii\helpers\Html;
$this->title = 'Create an account';
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/register.css">
    <title>Registration</title>
</head>
<body>
    <div class = "registration-wrapper">
        <h1 class="create-an-account">Create an account</h1>
        <?php $form = \yii\widgets\ActiveForm::begin()?>

        <div class = 'form-wrapper'>
        <?= $form->field($model, 'first_name')->textInput(['class' => 'register-field', 'placeholder' => 'First name'])->label(false) ?>

        <?= $form->field($model, 'second_name')->textInput(['class' => 'register-field', 'placeholder' => 'Second name'])->label(false) ?>

        <?= $form->field($model, 'email')->textInput(['class' => 'register-field', 'placeholder' => 'Email'])->label(false) ?>

        </div>
        <?= Html::submitButton('CREATE', ['class' => 'register-button']) ?>

        <?php \yii\widgets\ActiveForm::end()?>
    </div>
</body>
</html>
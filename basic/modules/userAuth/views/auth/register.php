<head>
    <title>Sign Up</title>
</head>

<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-register">
    <h1>404<?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to register:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'regisster',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username', ['inputOptions' => ['id' => 'registser-username']])->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'email', ['inputOptions' => ['id' => 'registser-email']]) ?>

        <?= $form->field($model, 'displayname', ['inputOptions' => ['id' => 'registser-displayname']]) ?>

        <?= $form->field($model, 'password', ['inputOptions' => ['id' => 'registser-password']])->passwordInput() ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
                <a href="login">Almost have an account? Log In!</a>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
</div>

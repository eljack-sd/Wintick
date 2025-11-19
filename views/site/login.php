<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';

//$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    body {
        background-color: #A0BAA5;
    }

    .password-toggle {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        font-size: 18px;
        color: #6c757d;
    }

    .password-toggle:hover {
        color: #495057;
    }

    .site-login {
        width: 100%;
        max-width: 400px;
        margin: 80px auto;
        background: #ffffff;
        padding: 35px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
        text-align: center;
    }

    .site-login h1 {
        margin-bottom: 25px;
        font-size: 24px;
        color: #2d6a2d;
        font-weight: bold;
    }

    .form-group {
        margin-bottom: 20px;
        position: relative;
    }

    .form-control {
        text-align: center;
        font-size: 16px;
    }

    .btn-login {
        background-color: #4CAF50;
        color: white;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        font-size: 16px;
        border: none;
    }

    .btn-login:hover {
        background-color: #45a049;
        color: #fff;
    }

    .remember-forgot {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .remember-forgot .form-check {
        margin-bottom: 0; /* Ensure checkbox aligns properly */
    }

    .remember-forgot a {
        color: #4CAF50;
        font-size: 14px;
        text-decoration: none;
    }

    .remember-forgot a:hover {
        color: #45a049;
        text-decoration: underline;
    }

    @media (max-width: 576px) {
        .site-login {
            padding: 20px;
        }

        .form-control {
            font-size: 14px;
        }

        .remember-forgot {
            flex-direction: column;
            align-items: flex-start;
        }

        .remember-forgot a {
            margin-top: 10px;
        }
    }
</style>

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to login:</p>

    <div class="row justify-content-center">
        <div class="col-12">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'form-label'],
                    'inputOptions' => ['class' => 'form-control'],
                    'errorOptions' => ['class' => 'invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

            <div class="form-group">
                <?= $form->field($model, 'password')->passwordInput(['id' => 'password']) ?>
                <span class="password-toggle" onclick="togglePassword()">
                    <i id="password-icon" class="bi bi-eye"></i>
                </span>
            </div>

            <div class="remember-forgot">
                <div>
                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"form-check\">{input} {label}</div>",
                        'class' => 'form-check-input',
                    ]) ?>
                </div>
                <div>
                    <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
                </div>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-login', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>

<script>
    function togglePassword() {
        const pass = document.getElementById('password');
        const icon = document.getElementById('password-icon');
        if (pass.type === 'password') {
            pass.type = 'text';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        } else {
            pass.type = 'password';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        }
    }
</script>
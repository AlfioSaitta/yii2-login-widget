<?php
/**
 * Copyright (c) 2016. Alfio Saitta
 * All rights reserved.
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

    echo '<div class="panel-body">';

        $form = ActiveForm::begin([
            'id' => 'login-form',
            'enableClientValidation' => false,
            'enableAjaxValidation' => true,
        ]);
        ?>

        <?= $form->field($model, 'identity', [
              'inputOptions' => [
                  'placeholder' => $model->getAttributeLabel('identify'),
              ],
            ])->label(false);
        ?>

        <?= $form->field($model, 'password', [
              'inputOptions' => [
                  'placeholder' => $model->getAttributeLabel('password'),
              ],
            ])->passwordInput()->label(false);
        ?>

        <div style="color:#999;margin:1em 0">
            If you forgot your password you can <?= Html::a('reset it', ['user/sign-in/request-password-reset']) ?>.
        </div>
        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            <?= Html::a('Signup', ['/user/sign-in/signup']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

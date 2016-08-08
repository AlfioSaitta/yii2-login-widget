<?php
/**
 * Copyright (c) 2016. Alfio Saitta
 * All rights reserved.
 */

namespace collateral\login;

use yii;
use yii\base\Widget;
/**
 * LoginWidget is a widget that provides user login functionality.
 */
class Login extends Widget
{
    public $title='Login';
    public $visible = true;

    public function run()
    {
        if($this->visible) {
            $model = new \frontend\modules\user\models\LoginForm;

            /*
            if (Yii::$app->request->isAjax) {
                $model->load($_POST);
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }
            */

            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                Yii::$app->getResponse()->refresh();
                return '';
            } else {
                return $this->render('loginWidget', [
                    'model' => $model,
                    'title' => $this->title,
                ]);
            }
        }
    }
}

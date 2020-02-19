<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use common\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\authclient\widgets\AuthChoice;

$this->title = '录入房源';
$this->params['breadcrumbs'][] = "录入房源";
?>
<div class="site-login">

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin([
                'fieldConfig' => [
                    'template' => "<div class='col-sm-2 text-right'>{label}</div><div class='col-sm-10'>{input}{hint}{error}</div>",
                ],
                'action'=>'provide-room-add',
                'method'=>'POST'
            ]); ?>
            <div class="box-body">
                <?= $form->field($model, 'hotel_name')->textInput() ?>
                <?= $form->field($model, 'region_id')->dropDownList(
                    \common\models\common\Region::getList()
                ) ?>
                <?= $form->field($model, 'position')->textInput() ?>
                <?= $form->field($model, 'room_number')->textInput() ?>
                <?= $form->field($model, 'free_room')->textInput() ?>
                <?= $form->field($model, 'checked_room')->textInput() ?>
                <?= $form->field($model, 'guest_room_standard')->textInput() ?>
                <?= $form->field($model, 'price')->textInput() ?>
                <?= $form->field($model, 'contact_name')->textInput() ?>
                <?= $form->field($model, 'breakfast_status')->radioList(
                    \common\enums\StatusEnum::$yesOrNo
                ) ?>
                <?= $form->field($model, 'tel')->textInput() ?>
                <?= $form->field($model, 'wechat')->textInput() ?>
                <?= $form->field($model, 'health_status')->radioList(
                    \common\enums\StatusEnum::$yesOrNo
                ) ?>
                <?= $form->field($model, 'desc')->textarea() ?>
            </div>
            <div class="box-footer text-center">
                <button class="btn btn-primary" type="submit">保存</button>
                <span class="btn btn-white" onclick="history.go(-1)">返回</span>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

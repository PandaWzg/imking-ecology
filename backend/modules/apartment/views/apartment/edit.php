<?php

use yii\widgets\ActiveForm;
use common\enums\GenderEnum;
use common\enums\StatusEnum;

$this->title = '编辑';
$this->params['breadcrumbs'][] = ['label' => '区', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title];
?>

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">基本信息</h3>
            </div>
            <?php $form = ActiveForm::begin([
                'fieldConfig' => [
                    'template' => "<div class='col-sm-2 text-right'>{label}</div><div class='col-sm-10'>{input}{hint}{error}</div>",
                ],
            ]); ?>
            <div class="box-body">
                <?= $form->field($model, 'member_id')->widget(\kartik\select2\Select2::class, [
                    'options' => ['placeholder' => '请选择'],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'ajax' => [
                            'url' => \common\helpers\Url::toRoute(['/member/member/ajax-get']),
                            'dataType' => 'json',
                            'data' => new \yii\web\JsExpression('function(params) { return {q:params.term}; }')
                        ],
                    ],

                ]);?>
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
                        StatusEnum::$yesOrNo
                ) ?>
                <?= $form->field($model, 'tel')->textInput() ?>
                <?= $form->field($model, 'wechat')->textInput() ?>
                <?= $form->field($model, 'health_status')->radioList(
                    StatusEnum::$yesOrNo
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
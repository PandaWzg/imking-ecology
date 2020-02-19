<?php

use yii\grid\GridView;
use common\helpers\Html;
use common\enums\AppEnum;
use common\helpers\DebrisHelper;

$this->title = '行为日志';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['index']];
?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?= $this->title; ?></h3>
            </div>
            <div class="box-body table-responsive">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    //重新定义分页样式
                    'tableOptions' => ['class' => 'table table-hover'],
                    'columns' => [
                        [
                            'class' => 'yii\grid\SerialColumn',
                        ],
                        'app_id',
                        [
                            'label' => '用户',
                            'value' => function ($model) {
                                if (AppEnum::BACKEND == $model->app_id) {
                                    return $model->manager->username;
                                } elseif (in_array($model->app_id,
                                    [AppEnum::API, AppEnum::FRONTEND, AppEnum::WECHAT])) {
                                    return $model->member->username;
                                }
                            },
                            'filter' => false, //不显示搜索框
                        ],
                        'behavior',
                        'url',
                        [
                            'attribute' => 'ip',
                            'value' => function ($model) {
                                return DebrisHelper::long2ip($model->ip);
                            },
                            'filter' => false, //不显示搜索框
                        ],
                        [
                            'label' => '地区',
                            'value' => function ($model) {
                                if ($model->ip == '2130706433') {
                                    return '本地';
                                } else {
                                    $data = [];
                                    !empty($model->country) && $data[] = $model->country;
                                    !empty($model->provinces) && $data[] = $model->provinces;
                                    !empty($model->city) && $data[] = $model->city;
                                    return implode('·', $data);
                                }
                            },
                        ],
                        'remark',
                        [
                            'attribute' => 'created_at',
                            'filter' => false, //不显示搜索框
                            'format' => ['date', 'php:Y-m-d H:i:s'],
                        ],
                        [
                            'header' => "操作",
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{view}',
                            'buttons' => [
                                'view' => function ($url, $model, $key) {
                                    return Html::linkButton(['view', 'id' => $model->id], '查看详情', [
                                        'data-toggle' => 'modal',
                                        'data-target' => '#ajaxModalLg',
                                    ]);
                                },
                            ],
                        ],
                    ],
                ]); ?>

            </div>
        </div>
    </div>
</div>

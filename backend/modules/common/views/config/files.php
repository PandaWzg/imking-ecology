<?php

use common\helpers\Html;
use common\enums\StatusEnum;

?>

<div class="form-group">
    <?= Html::label($row['title'], $row['name'], ['class' => 'control-label demo']); ?>
    <?php if ($row['is_hide_remark'] != StatusEnum::ENABLED) { ?>
        (<?= $row['remark'] ?>)
    <?php } ?>
    <div class="col-sm-push-10" style="padding-left: 15px">
        <?= \common\widgets\webuploader\Files::widget([
            'name' => "config[" . $row['name'] . "]",
            'value' => isset($row['value']['data']) ? unserialize($row['value']['data']) : $row['default_value'],
            'type' => 'files',
            'theme' => 'default',
            'config' => [
                'pick' => [
                    'multiple' => true,
                ],
            ]
        ]) ?>
    </div>
</div>
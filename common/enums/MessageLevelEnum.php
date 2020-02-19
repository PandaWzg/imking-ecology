<?php

namespace common\enums;

/**
 * Class MessageLevelEnum
 * @package common\enums
 * @author jianyan74 <751393839@qq.com>
 */
class MessageLevelEnum
{
    const INFO = 'info';
    const WARNING = 'warning';
    const ERROR = 'error';

    /**
     * @var array
     */
    public static $listExplain = [
        self::INFO => '信息',
        self::WARNING => '警告',
        self::ERROR => '错误',
    ];
}
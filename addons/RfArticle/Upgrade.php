<?php
namespace addons\RfArticle;

use Yii;
use yii\db\Migration;
use backend\interfaces\AddonWidget;

/**
 * 升级数据库
 *
 * Class Upgrade
 * @package addons\RfArticle
 */
class Upgrade extends Migration implements AddonWidget
{
    /**
     * @var array
     */
    public $versions = [
        '1.0.0', // 默认版本
        '1.0.1',
        '1.0.2',
    ];

    /**
    * @param $addon
    * @return mixed|void
    * @throws \yii\db\Exception
    */
    public function run($addon)
    {
        $migration = new Migration();
        switch ($addon->version)
        {
            case '1.0.1' :
                // 增加测试 - 冗余的字段
                // $migration->addColumn('{{%addon_example_curd}}', 'redundancy_field', 'varchar(48)');
                break;
            case '1.0.2' :
                // 删除测试 - 冗余的字段
                // $migration->dropColumn('{{%addon_example_curd}}', 'redundancy_field');
                break;
        }
    }
}
<?php
namespace addons\RfExample;

use Yii;
use backend\interfaces\AddonWidget;

/**
 * 卸载
 *
 * Class UnInstall
 * @package addons\RfExample
 */
class UnInstall implements AddonWidget
{
    /**
     * 表前缀
     *
     * @var string
     */
    protected $table_prefixion = "rf_addon_example_";

    /**
     * 列表
     *
     * @var array
     */
    protected $table_name = ['curd', 'cate'];

    /**
     * @param $addon
     * @return mixed|void
     * @throws \yii\db\Exception
     */
    public function run($addon)
    {
        $sql = "";
        foreach ($this->table_name as $value) {
            $table = $this->table_prefixion . $value;
            $sql .= "DROP TABLE IF EXISTS `{$table}`;";
        }

        // 执行sql
        Yii::$app->getDb()->createCommand($sql)->execute();
    }
}
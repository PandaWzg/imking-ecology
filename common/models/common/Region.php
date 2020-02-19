<?php
namespace common\models\common;

use common\helpers\ArrayHelper;
use common\models\base\BaseModel;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use common\enums\StatusEnum;
use common\models\base\User;
use common\helpers\RegularHelper;


class Region extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%region}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '区',
            'status' => '状态',
            'created_at' => '创建时间',
        ];
    }

    //获取所有列表
    public static function getList(){
        $list = self::find()->select("id,name")->where([">","status",StatusEnum::DELETE])->asArray()->all();
        $data = [];
        foreach ($list as $key=>$val){
            $arr = ['key'=>$val["id"],'val'=>$val["name"]];
            $data[] = $arr;
        }
        return ArrayHelper::map($data,'key','val');
    }
}

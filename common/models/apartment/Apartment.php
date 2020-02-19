<?php
namespace common\models\apartment;

use common\models\base\BaseModel;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use common\enums\StatusEnum;
use common\models\base\User;
use common\helpers\RegularHelper;


class Apartment extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%apartment}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['member_id','breakfast_status','position','tel','region_id','contact_name','health_status','price','room_number','free_room','checked_room','hotel_name'], 'required'],
            [["guest_room_standard"],'string']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'member_id' => '商家ID',
            'position' => '位置',
            'desc' => '简介',
            'tel' => '联系电话',
            'region_id' => '区ID',
            'wechat' => '微信',
            'contact_name' => '联系人姓名',
            'health_status'=>'是否有免费医护人员',
            'price'=>'优惠房价',
            'room_number'=>'可以提供的房间数量',
            'free_room'=>'空闲房间数量',
            'checked_room'=>'已入住房间数量',
            'hotel_name'=>'公寓名称',
            'guest_room_standard'=>'客房标准',
            'breakfast_status'=>'能否提供早餐',
            'created_at'=>'发布时间',

        ];
    }
}

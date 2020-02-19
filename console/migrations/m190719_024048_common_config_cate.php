<?php

use yii\db\Migration;

class m190719_024048_common_config_cate extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%common_config_cate}}', [
            'id' => "int(10) NOT NULL AUTO_INCREMENT COMMENT '主键'",
            'title' => "varchar(50) NOT NULL DEFAULT '' COMMENT '标题'",
            'pid' => "int(10) unsigned NULL DEFAULT '0' COMMENT '上级id'",
            'level' => "tinyint(1) unsigned NULL DEFAULT '1' COMMENT '级别'",
            'sort' => "int(5) NULL DEFAULT '0' COMMENT '排序'",
            'tree' => "varchar(300) NOT NULL DEFAULT '' COMMENT '树'",
            'status' => "tinyint(4) NULL DEFAULT '1' COMMENT '状态[-1:删除;0:禁用;1启用]'",
            'created_at' => "int(10) unsigned NULL DEFAULT '0' COMMENT '添加时间'",
            'updated_at' => "int(10) unsigned NULL DEFAULT '0' COMMENT '修改时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='公用_配置分类表'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%common_config_cate}}',['id'=>'1','title'=>'网站配置','pid'=>'0','level'=>'1','sort'=>'0','tree'=>'tr_0','status'=>'1','created_at'=>'1553908350','updated_at'=>'1553908601']);
        $this->insert('{{%common_config_cate}}',['id'=>'2','title'=>'系统配置','pid'=>'0','level'=>'1','sort'=>'1','tree'=>'tr_0','status'=>'1','created_at'=>'1553908371','updated_at'=>'1553908509']);
        $this->insert('{{%common_config_cate}}',['id'=>'3','title'=>'微信配置','pid'=>'0','level'=>'1','sort'=>'2','tree'=>'tr_0','status'=>'1','created_at'=>'1553908392','updated_at'=>'1553908511']);
        $this->insert('{{%common_config_cate}}',['id'=>'4','title'=>'支付配置','pid'=>'0','level'=>'1','sort'=>'4','tree'=>'tr_0','status'=>'1','created_at'=>'1553908403','updated_at'=>'1553908513']);
        $this->insert('{{%common_config_cate}}',['id'=>'5','title'=>'第三方登录','pid'=>'0','level'=>'1','sort'=>'5','tree'=>'tr_0','status'=>'1','created_at'=>'1553908415','updated_at'=>'1553908517']);
        $this->insert('{{%common_config_cate}}',['id'=>'6','title'=>'邮件配置','pid'=>'0','level'=>'1','sort'=>'6','tree'=>'tr_0','status'=>'1','created_at'=>'1553908421','updated_at'=>'1553908517']);
        $this->insert('{{%common_config_cate}}',['id'=>'7','title'=>'云存储','pid'=>'0','level'=>'1','sort'=>'8','tree'=>'tr_0','status'=>'1','created_at'=>'1553908432','updated_at'=>'1559260458']);
        $this->insert('{{%common_config_cate}}',['id'=>'8','title'=>'支付宝','pid'=>'4','level'=>'2','sort'=>'0','tree'=>'tr_0 tr_4','status'=>'1','created_at'=>'1553908441','updated_at'=>'1553908441']);
        $this->insert('{{%common_config_cate}}',['id'=>'9','title'=>'微信','pid'=>'4','level'=>'2','sort'=>'1','tree'=>'tr_0 tr_4','status'=>'1','created_at'=>'1553908448','updated_at'=>'1553908450']);
        $this->insert('{{%common_config_cate}}',['id'=>'10','title'=>'银联','pid'=>'4','level'=>'2','sort'=>'2','tree'=>'tr_0 tr_4','status'=>'1','created_at'=>'1553908458','updated_at'=>'1553908460']);
        $this->insert('{{%common_config_cate}}',['id'=>'11','title'=>'QQ登录','pid'=>'5','level'=>'2','sort'=>'0','tree'=>'tr_0 tr_5','status'=>'1','created_at'=>'1553908474','updated_at'=>'1553908474']);
        $this->insert('{{%common_config_cate}}',['id'=>'12','title'=>'微博登录','pid'=>'5','level'=>'2','sort'=>'1','tree'=>'tr_0 tr_5','status'=>'1','created_at'=>'1553908487','updated_at'=>'1553908487']);
        $this->insert('{{%common_config_cate}}',['id'=>'13','title'=>'微信登录','pid'=>'5','level'=>'2','sort'=>'2','tree'=>'tr_0 tr_5','status'=>'1','created_at'=>'1553908497','updated_at'=>'1553908497']);
        $this->insert('{{%common_config_cate}}',['id'=>'14','title'=>'GitHub登录','pid'=>'5','level'=>'2','sort'=>'3','tree'=>'tr_0 tr_5','status'=>'1','created_at'=>'1553908526','updated_at'=>'1553908526']);
        $this->insert('{{%common_config_cate}}',['id'=>'15','title'=>'七牛云','pid'=>'7','level'=>'2','sort'=>'0','tree'=>'tr_0 tr_7','status'=>'1','created_at'=>'1553908544','updated_at'=>'1553908544']);
        $this->insert('{{%common_config_cate}}',['id'=>'16','title'=>'邮件','pid'=>'6','level'=>'2','sort'=>'0','tree'=>'tr_0 tr_6','status'=>'1','created_at'=>'1553908565','updated_at'=>'1553908565']);
        $this->insert('{{%common_config_cate}}',['id'=>'17','title'=>'网站基础','pid'=>'1','level'=>'2','sort'=>'0','tree'=>'tr_0 tr_1','status'=>'1','created_at'=>'1553908574','updated_at'=>'1553908611']);
        $this->insert('{{%common_config_cate}}',['id'=>'18','title'=>'系统基础','pid'=>'2','level'=>'2','sort'=>'0','tree'=>'tr_0 tr_2','status'=>'1','created_at'=>'1553908618','updated_at'=>'1553908618']);
        $this->insert('{{%common_config_cate}}',['id'=>'19','title'=>'公众号','pid'=>'3','level'=>'2','sort'=>'0','tree'=>'tr_0 tr_3','status'=>'1','created_at'=>'1553908626','updated_at'=>'1553908626']);
        $this->insert('{{%common_config_cate}}',['id'=>'20','title'=>'阿里云OSS','pid'=>'7','level'=>'2','sort'=>'1','tree'=>'tr_0 tr_7','status'=>'1','created_at'=>'1553908635','updated_at'=>'1553908641']);
        $this->insert('{{%common_config_cate}}',['id'=>'21','title'=>'小程序','pid'=>'0','level'=>'1','sort'=>'3','tree'=>'tr_0','status'=>'1','created_at'=>'1553908673','updated_at'=>'1553908673']);
        $this->insert('{{%common_config_cate}}',['id'=>'22','title'=>'基础配置','pid'=>'21','level'=>'2','sort'=>'0','tree'=>'tr_0 tr_21','status'=>'1','created_at'=>'1553908719','updated_at'=>'1553908719']);
        $this->insert('{{%common_config_cate}}',['id'=>'23','title'=>'图片处理','pid'=>'2','level'=>'2','sort'=>'1','tree'=>'tr_0 tr_2','status'=>'1','created_at'=>'1553908747','updated_at'=>'1553908747']);
        $this->insert('{{%common_config_cate}}',['id'=>'24','title'=>'App推送','pid'=>'0','level'=>'1','sort'=>'10','tree'=>'tr_0','status'=>'1','created_at'=>'1553908754','updated_at'=>'1559402407']);
        $this->insert('{{%common_config_cate}}',['id'=>'25','title'=>'极光推送','pid'=>'24','level'=>'2','sort'=>'0','tree'=>'tr_0 tr_24','status'=>'1','created_at'=>'1553908769','updated_at'=>'1553908769']);
        $this->insert('{{%common_config_cate}}',['id'=>'26','title'=>'分享配置','pid'=>'3','level'=>'2','sort'=>'0','tree'=>'tr_0 tr_3','status'=>'1','created_at'=>'1553909273','updated_at'=>'1553909273']);
        $this->insert('{{%common_config_cate}}',['id'=>'27','title'=>'短信配置','pid'=>'0','level'=>'1','sort'=>'7','tree'=>'tr_0','status'=>'1','created_at'=>'1559260477','updated_at'=>'1559260481']);
        $this->insert('{{%common_config_cate}}',['id'=>'28','title'=>'阿里云','pid'=>'27','level'=>'2','sort'=>'0','tree'=>'tr_0 tr_27','status'=>'1','created_at'=>'1559260496','updated_at'=>'1559260496']);
        $this->insert('{{%common_config_cate}}',['id'=>'29','title'=>'地图','pid'=>'0','level'=>'1','sort'=>'9','tree'=>'tr_0','status'=>'1','created_at'=>'1559402417','updated_at'=>'1559402417']);
        $this->insert('{{%common_config_cate}}',['id'=>'30','title'=>'百度地图','pid'=>'29','level'=>'2','sort'=>'0','tree'=>'tr_0 tr_29','status'=>'1','created_at'=>'1559402426','updated_at'=>'1559402426']);
        $this->insert('{{%common_config_cate}}',['id'=>'31','title'=>'腾讯地图','pid'=>'29','level'=>'2','sort'=>'1','tree'=>'tr_0 tr_29','status'=>'1','created_at'=>'1559402436','updated_at'=>'1559402436']);
        $this->insert('{{%common_config_cate}}',['id'=>'32','title'=>'高德地图','pid'=>'29','level'=>'2','sort'=>'3','tree'=>'tr_0 tr_29','status'=>'1','created_at'=>'1559402447','updated_at'=>'1559402447']);
        $this->insert('{{%common_config_cate}}',['id'=>'33','title'=>'腾讯COS','pid'=>'7','level'=>'2','sort'=>'2','tree'=>'tr_0 tr_7','status'=>'1','created_at'=>'1559527993','updated_at'=>'1559527993']);
        $this->insert('{{%common_config_cate}}',['id'=>'34','title'=>'OAuth2','pid'=>'0','level'=>'1','sort'=>'11','tree'=>'tr_0','status'=>'1','created_at'=>'1559704928','updated_at'=>'1559704928']);
        $this->insert('{{%common_config_cate}}',['id'=>'35','title'=>'授权配置','pid'=>'34','level'=>'2','sort'=>'0','tree'=>'tr_0 tr_34','status'=>'1','created_at'=>'1559704944','updated_at'=>'1559704944']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%common_config_cate}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}


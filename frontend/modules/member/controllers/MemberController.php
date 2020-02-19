<?php
namespace frontend\modules\member\controllers;

use common\components\Curd;
use common\models\apartment\Apartment;

/**
 * Class DefaultController
 * @package frontend\modules\member\controllers
 * @author jianyan74 <751393839@qq.com>
 */
class MemberController extends MController
{
    use Curd;
    public $modelClass = Apartment::class;
    /**
     * 申请列表
     * @return string
     */
    public function actionApplyList()
    {
        return $this->render($this->action->id,[

        ]);
    }
     //申请
    public function actionApply(){
        return $this->render($this->action->id,[

        ]);
    }

    //提供房源页面
    public function actionProvideRoom(){
        return $this->render($this->action->id,[
            "model"=>new Apartment(),
        ]);
    }

    public function actionProvideRoomAdd(){
        $id = \Yii::$app->request->get('id', null);
        $model = $this->findModel($id);

        if ($model->load(\Yii::$app->request->post())) {
            $model->member_id = \Yii::$app->user->identity->id;
            $model->save();
        }
        return $this->redirect(['/']);
    }
}

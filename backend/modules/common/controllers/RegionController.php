<?php

namespace backend\modules\common\controllers;

use common\models\common\Region;
use Yii;
use common\models\base\SearchModel;
use common\components\Curd;
use common\models\member\Member;
use common\enums\StatusEnum;
use backend\controllers\BaseController;
use backend\modules\member\forms\RechargeForm;

/**
 * 会员管理
 *
 * Class MemberController
 * @package backend\modules\member\controllers
 * @author jianyan74 <751393839@qq.com>
 */
class RegionController extends BaseController
{
    use Curd;

    /**
     * @var \yii\db\ActiveRecord
     */
    public $modelClass = Region::class;

    /**
     * 首页
     *
     * @return string
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionIndex()
    {
        $searchModel = new SearchModel([
            'model' => $this->modelClass,
            'scenario' => 'default',
            'partialMatchAttributes' => [], // 模糊查询
            'defaultOrder' => [
                'id' => SORT_DESC
            ],
            'pageSize' => $this->pageSize
        ]);

        $dataProvider = $searchModel
            ->search(Yii::$app->request->queryParams);

        $dataProvider->query
            ->andWhere([">","status",StatusEnum::DELETE]);
        return $this->render($this->action->id, [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }
}
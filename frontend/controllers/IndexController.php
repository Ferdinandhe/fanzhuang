<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/21
 * Time: 14:51
 */

namespace app\controllers;



use common\models\details;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        $data = Details::find()->where(['feature' => 1])->asArray()->all(); //从数据库中查找数据

        return $this->renderPartial('index',['data'=>$data]);

    }

    public function actionShop()
    {
        $data = Details::find()->asArray()->all();
        return $this->renderPartial('shop',['data'=>$data]);
    }


    public function actionRooms()
    {
        return $this->renderPartial('rooms');
    }


    public function actionWe()
    {
        return $this->renderPartial('we');
    }





}
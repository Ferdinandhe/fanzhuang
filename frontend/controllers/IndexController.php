<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/21
 * Time: 14:51
 */

namespace app\controllers;



use app\models\Type;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        $data = Type::find()->asArray()->all(); //从数据库中查找数据
//        var_dump($data);die;
        return $this->renderPartial('index',['data'=>$data]);

    }

    public function actionAaa()
    {
        echo 'fdsaf';
    }




}
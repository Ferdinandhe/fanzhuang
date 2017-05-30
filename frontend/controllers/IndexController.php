<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/21
 * Time: 14:51
 */

namespace app\controllers;
use common\models\Details;
use common\models\Type;
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

        $type = Type::find()->asArray()->all();
        $data = [];
        foreach ($type as $t){
            $details = Details::find()->where(['type'=>$t['id']])->asArray()->all();
            $data[] = $details;
        }


       return $this->renderPartial('shop',['data'=>$data,'type'=>$type]);



        //foreach ($type as $k=>$t){
       //     $details = Details::find()->where(['type'=>$t['id']])->asArray()->all();
        //    $type[$k]['data'] = $details;
       // }
      //  return $this->renderPartial('shop',['type' =>$type]);
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
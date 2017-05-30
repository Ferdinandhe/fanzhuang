<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/21
 * Time: 14:51
 */

namespace app\controllers;

use common\models\Details;
use Yii;
use common\models\Type;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        $data = Type::find()->asArray()->all(); //从数据库中查找数据

        return $this->renderPartial('index', ['data' => $data]);


    }

    public function actionInfo()
    {
        return $this->renderPartial('info');
    }


    public function actionOrder()
    {
        return $this->renderPartial('order');
    }




    public function actionList()
    {
        $type =  Type::find()->asArray()->all();
        $dav = Details::find()->asArray()->all();
        return $this->renderPartial('List',['dav' => $dav],['type'=>$type]);
    }


    public function actionPass()
    {
        return $this->renderPartial('pass');
    }


    public function actionEdit()
    {
        $data = Type::find()->asArray()->all();
        return $this->renderPartial('Edit', ['data' => $data]);
    }


    public function actionAdd()
    {
        //如果是post方式
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post();
            //创建一个新对象
            $model = new Details();
            //将数据赋值给model类。
            $model->setAttributes([
                'name' => $data['title'],
                'type' => $data['type'],
                'price' => $data['price'],
            ], false);

            //model类中的数据保存到数据库
            if ($model->save()) {
                echo '添加成功';
            }

        } else {
            //如果是get方式
            //从type表中取出数据

            $data = Type::find()->asArray()->all();
            return $this->renderPartial('add', ['data' => $data]);
        }

    }

}
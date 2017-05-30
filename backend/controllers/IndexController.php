<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/21
 * Time: 14:51
 */

namespace backend\controllers;

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



    public function actionOrder()
    {
        return $this->renderPartial('order');
    }



    public function actionInfo()
    {
        return $this->renderPartial('info');
    }


    public function actionManage()
    {
        //如果是post方式
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post();
            //创建一个新对象
            $model = new Type();
            //将数据赋值给model类。
            $model->setAttributes([
                'name' => $data['type'],
                'type' => $data['type'],
            ], false);

            //model类中的数据保存到数据库
            if ($model->save()) {
                echo '添加成功';
            }

        } else {
            //如果是get方式
            //从type表中取出数据

            $data = Type::find()->asArray()->all();
            return $this->renderPartial('manage', ['data' => $data]);
        }

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
                'edittime'=> date("Y-m-d H:i:s"),
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
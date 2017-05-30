<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/30
 * Time: 18:27
 */

namespace backend\controllers;
use common\models\Details;
use Yii;
use common\models\Type;
use yii\web\Controller;

class ListController extends Controller
{

    /**
     *
     * @return string
     */
    public function actionList()
    {
        $data = Yii::$app->request->post();
        $query =  Details::find();

        if(isset($data['type']) && !empty($data['type'])){
            $query->andFilterWhere(['type'=>$data['type']]);
        }
        if(isset($data['keywords']) && !empty($data['keywords'])){
            $query->andFilterWhere(['like','name',$data['keywords']]);
        }

        $dav = $query->asArray()->orderBy(['edittime'=> SORT_DESC])->all();

        $type =  Type::find()->asArray()->all();
        return $this->renderPartial('list',[
            'dav' => $dav,
            'type'=>$type,
            'data'=>$data,
        ]);
    }

    /**
     * 删除
     * @return \yii\web\Response
     */
    public function actionDelete()
    {
        $id = Yii::$app->request->get('id');
        Details::deleteAll(['id'=>$id]);
        return $this->redirect('list');
    }

    public function actionEdit()
    {
        $id = Yii::$app->request->get('id');
        if(Yii::$app->request->isPost){
            $data = Yii::$app->request->post();
            //找到id对应的数据
            $model = Details::findOne($id);
            //将数据赋值给model类。
            $model->setAttributes([
                'name' => $data['title'],
                'type' => $data['type'],
                'edittime'=> date("Y-m-d H:i:s"),
            ], false);

            //model类中的数据保存到数据库
            if ($model->save()) {
                return $this->redirect('list');
            }
        }else{
            $info = Details::find()->where(['id' => $id])->asArray()->one();
            $data = Type::find()->asArray()->all();
            return $this->renderPartial('edit',['info'=>$info,'data'=>$data]);
        }


    }
}
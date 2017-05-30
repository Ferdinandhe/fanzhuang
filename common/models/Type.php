<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/21
 * Time: 14:58
 */

namespace common\models;
use yii\db\ActiveRecord;

class Type extends ActiveRecord
{
    public static function tableName()
    {
        return 'dishes_type';
    }

    public static function getName($id)
    {
        $info = self::find()->where(['id'=>$id])->one();
        if($info){
            return $info['type'];
        }else{
            return '未知类型';
        }


    }
}
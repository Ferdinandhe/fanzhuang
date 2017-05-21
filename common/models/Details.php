<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/21
 * Time: 15:46
 */

namespace common\models;
use yii\db\ActiveRecord;

class Details extends ActiveRecord
{
    public static function tableName()
    {
        return 'dishes_details';
    }
}
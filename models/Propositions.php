<?php
namespace app\models;
use yii\db\ActiveRecord;

class Propositions extends ActiveRecord{
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    public function rules()
    {
        return [
            [['type','currency_from','currency_to','course','sum','description'],'required'],
            [['course','sum'],'double']
        ];
    }
}
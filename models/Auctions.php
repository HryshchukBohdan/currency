<?php
namespace app\models;
use yii\db\ActiveRecord;

class Auctions extends ActiveRecord{

    public function rules()
    {
        return [
            [['kurs', 'sum', 'comment'],'required']
        ];
    }
}
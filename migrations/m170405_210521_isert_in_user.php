<?php

use yii\db\Migration;

class m170405_210521_isert_in_user extends Migration
{
    public function up()
    {
        $this->insert('user',[
            'id'=>'3',
            'login'=>'pupkin',
            'email'=>'vasya@pupkin.com',
            'password'=>'8cb2237d0679ca88db6464eac60da96345513964',
            'name'=>'вася',
            'surname'=>'пупкин'

        ]);

        $this->insert('user',[
            'id'=>'4',
            'login'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>'d033e22ae348aeb5660fc2140aec35850c4da997',
            'name'=>'admin',
            'surname'=>'admin'

        ]);


    }

    public function down()
    {
        echo "m170405_210521_isert_in_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

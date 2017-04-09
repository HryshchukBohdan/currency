<?php

use yii\db\Migration;

class m170405_204453_create_table_user extends Migration
{
    public function up()
    {
        $this->createTable('user',[
            'id'=>$this->bigprimaryKey(),
            'login'=>$this->string(),
            'email'=>$this->string(),
            'password'=>$this->string(),
            'name'=>$this->string(),
            'surname'=>$this->string()
        ]);

    }

    public function down()
    {
        echo "m170405_204453_create_table_user cannot be reverted.\n";

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

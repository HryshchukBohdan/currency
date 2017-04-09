<?php

use yii\db\Migration;

class m170405_203619_create_table_statuses extends Migration
{
    public function up()
    {
        $this->createTable('statuses',[
            'id'=>$this->bigprimaryKey(),
            'id_contract'=>$this->integer(),
            'date_from_prop'=>$this->timestamp(),
            'date_from_auction'=>$this->timestamp(),
            'date_to_prop'=>$this->timestamp(),
            'date_to_auction'=>$this->timestamp()
         ]);



    }

    public function down()
    {
        echo "m170405_203619_create_table_statuses cannot be reverted.\n";

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

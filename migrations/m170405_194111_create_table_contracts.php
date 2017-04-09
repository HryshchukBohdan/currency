<?php

use yii\db\Migration;

class m170405_194111_create_table_contracts extends Migration
{
    public function up()
    {
        $this->createTable('contracts',[
            'id'=>$this->bigprimaryKey(),
            'id_prop'=>$this->integer(),
            'id_auction'=>$this->integer(),
            'status'=>$this->integer(),
            'date'=>$this->timestamp()

        ]);
    }

    public function down()
    {
        echo "m170405_194111_create_table_contracts cannot be reverted.\n";

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

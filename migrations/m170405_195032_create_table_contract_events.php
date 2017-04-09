<?php

use yii\db\Migration;

class m170405_195032_create_table_contract_events extends Migration
{
    public function up()
    {
        $this->createTable('contract_events',[
            'id'=>$this->bigprimaryKey(),
            'id_cont'=>$this->integer(),
            'sum'=>$this->decimal(19,4),
            'paysystem'=>$this->string(100),
            'account'=>$this->string(),
            'date'=>$this->timestamp()

        ]);
    }

    public function down()
    {
        echo "m170405_195032_create_table_contract_events cannot be reverted.\n";

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

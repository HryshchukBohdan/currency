<?php

use yii\db\Migration;

class m170405_200655_create_table_payment_accounts extends Migration
{
    public function up()
    {
        $this->createTable('payment_accounts',[
            'id' =>$this->bigprimaryKey(),
            'user_id'=>$this->integer(11),
            'paysystem'=>$this->string(100),
            'account'=>$this->string()
        ]);

    }

    public function down()
    {
        echo "m170405_200655_create_table_payment_accounts cannot be reverted.\n";

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

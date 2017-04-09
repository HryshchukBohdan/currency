<?php

use yii\db\Migration;

class m170407_175606_add_status_in_auction extends Migration
{
    public function up()
    {
        $this->addColumn('auctions', 'status',$this->smallInteger());
    }

    public function down()
    {
        echo "m170407_175606_add_status_in_auction cannot be reverted.\n";

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

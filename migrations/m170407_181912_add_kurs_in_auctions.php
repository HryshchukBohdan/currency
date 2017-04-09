<?php

use yii\db\Migration;

class m170407_181912_add_kurs_in_auctions extends Migration
{
    public function up()
    {
         $this->addColumn('auctions', 'kurs',$this->Integer());
    }

    public function down()
    {
        echo "m170407_181912_add_kurs_in_auctions cannot be reverted.\n";

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

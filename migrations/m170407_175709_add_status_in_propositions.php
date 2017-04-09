<?php

use yii\db\Migration;

class m170407_175709_add_status_in_propositions extends Migration
{
    public function up()
    {
         $this->addColumn('propositions', 'status',$this->Integer());
    }

    public function down()
    {
        echo "m170407_175709_add_status_in_propositions cannot be reverted.\n";

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

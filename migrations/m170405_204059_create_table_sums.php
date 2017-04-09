<?php

use yii\db\Migration;

class m170405_204059_create_table_sums extends Migration
{
    public function up()
    {
        $this->createTable('sums',[
            'id'=>$this->bigprimaryKey(),
            'id_contract'=>$this->integer(),
            'sum_from'=>$this->decimal(19,4),
            'sum_to'=>$this->decimal(19,4),
            'sum_interest'=>$this->decimal(19,4),
            'currency'=>$this->string()
        ]);

    }

    public function down()
    {
        echo "m170405_204059_create_table_sums cannot be reverted.\n";

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

<?php

use yii\db\Migration;

class m170405_201301_create_table_propositions extends Migration
{
    public function up()
    {
        $this->createTable('propositions',[
            'id' =>$this->bigprimaryKey(),
            'type'=>$this->string(32),
            'user_id'=>$this->integer(),
            'currency_from'=>$this->string(32),
            'course'=>$this->decimal(19,4),
            'sum'=>$this->decimal(19,4),
            'description'=>$this->text(),
            'date'=>$this->timestamp(),
            'currency_to'=>$this->string(32)

        ]);



    }

    public function down()
    {
        echo "m170405_201301_create_table_propositions cannot be reverted.\n";

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

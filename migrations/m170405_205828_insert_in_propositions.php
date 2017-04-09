<?php

use yii\db\Migration;

class m170405_205828_insert_in_propositions extends Migration
{
    public function up()
    {
        $this->insert('propositions',[
            'type' =>'seller',
            'user_id'=>'3',
            'currency_from'=>'USD',
            'course'=>'26.9500',
            'sum'=>'100.0000',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'

        ]);

        $this->insert('propositions',[
            'type' =>'buyer',
            'user_id'=>'4',
            'currency_from'=>'EUR',
            'course'=>'28.8500',
            'sum'=>'200.0000',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.лосуточно, без перерывов и выходных!!!'

        ]);


        $this->insert('propositions',[
            'type' =>'seller',
            'user_id'=>'4',
            'currency_from'=>'GBP',
            'course'=>'26.4500',
            'sum'=>'500.0000',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'

        ]);
    }

    public function down()
    {
        echo "m170405_205828_insert_in_propositions cannot be reverted.\n";

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

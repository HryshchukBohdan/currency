 <?php

use yii\db\Migration;

class m170405_191826_create_table_auctions extends Migration
{
    public function up()
    {
        $this->createTable('auctions',[
            'id' =>$this->bigprimaryKey(),
            'id_prop'=>$this->integer(),
            'user_id'=>$this->integer(),
            'sum'=>$this->decimal(19,4),
            'comment'=>$this->text(),
            'date'=>$this->timestamp()

        ]);
    }

    public function down()
    {
        echo "m170405_191826_create_table_auctions cannot be reverted.\n";

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

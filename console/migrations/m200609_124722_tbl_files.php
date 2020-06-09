<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m200609_124722_tbl_files
 */
class m200609_124722_tbl_files extends Migration
{
    /**
     * {@inheritdoc}
     */
//    public function safeUp()
//    {
//
//    }
//
//    /**
//     * {@inheritdoc}
//     */
//    public function safeDown()
//    {
//        echo "m200609_124722_tbl_files cannot be reverted.\n";
//
//        return false;
//    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('tbl_events', [

            'id' => Schema::TYPE_PK,
            'file_name' => Schema::TYPE_TEXT,
            'file_path' => Schema::TYPE_STRING,
            'created_at' => Schema::TYPE_DATETIME
        ]);
    }

    public function down()
    {
        echo "m200609_124722_tbl_files cannot be reverted.\n";

        return false;
    }
}

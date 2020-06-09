<?php

use yii\db\Migration;

/**
 * Class m200609_125915_rename_tbl_files
 */
class m200609_125915_rename_tbl_files extends Migration
{
//    /**
//     * {@inheritdoc}
//     */
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
//        echo "m200609_125915_rename_tbl_files cannot be reverted.\n";
//
//        return false;
//    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->renameTable('tbl_events', 'tbl_files');
    }

    public function down()
    {
        echo "m200609_125915_rename_tbl_files cannot be reverted.\n";

        return false;
    }
}

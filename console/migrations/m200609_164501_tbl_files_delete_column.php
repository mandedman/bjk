<?php

use yii\db\Migration;

/**
 * Class m200609_164501_tbl_files_delete_column
 */
class m200609_164501_tbl_files_delete_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200609_164501_tbl_files_delete_column cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->dropColumn('tbl_files', 'file_path');
    }

    public function down()
    {
        echo "m200609_164501_tbl_files_delete_column cannot be reverted.\n";

        return false;
    }
}

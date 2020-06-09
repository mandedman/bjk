<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m200609_160919_tbl_files_add_rename_column
 */
class m200609_160919_tbl_files_add_rename_column extends Migration
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
        echo "m200609_160919_tbl_files_add_rename_column cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn('tbl_files', 'server_name', $this->string()->after('file_name'));
    }

    public function down()
    {
        echo "m200609_160919_tbl_files_add_rename_column cannot be reverted.\n";

        return false;
    }
}

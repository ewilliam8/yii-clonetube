<?php

use yii\db\Migration;

/**
 * Class m220525_141636_test_post_table
 */
class m220525_141636_test_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%posts}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(512),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220525_141636_test_post_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220525_141636_test_post_table cannot be reverted.\n";

        return false;
    }
    */
}

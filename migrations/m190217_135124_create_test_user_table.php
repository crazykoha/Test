<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%test_user}}`.
 */
class m190217_135124_create_test_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%test_user}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(),
            'second_name' => $this->string(),
            'email' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%test_user}}');
    }
}

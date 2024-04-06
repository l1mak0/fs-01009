<?php

use yii\db\Migration;

/**
 * Class m240406_141957_request
 */
class m240406_141957_request extends Migration
{
    public function safeUp()
    {
        $this->createTable('requests', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'date' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'user_id' => $this->integer()->notNull()
        ]);

        $this->addForeignKey(
            'requests_to_users_kf',
            'requests',
            'user_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }


    public function safeDown()
    {
        $this->dropTable('requests');


        return false;
    }

}

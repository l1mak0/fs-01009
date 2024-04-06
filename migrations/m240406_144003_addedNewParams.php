<?php

use yii\db\Migration;

/**
 * Class m240406_144003_addedNewParams
 */
class m240406_144003_addedNewParams extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('users', 'username');
        $this->addColumn('users', 'name', $this->string()->notNull());
        $this->addColumn('users', 'surname', $this->string()->notNull());
        $this->addColumn('users', 'patronymic', $this->string());

        $this->update('users', 'name', )
    }


    public function safeDown()
    {
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240406_144003_addedNewParams cannot be reverted.\n";

        return false;
    }
    */
}

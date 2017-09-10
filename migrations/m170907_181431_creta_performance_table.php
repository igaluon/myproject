<?php

use yii\db\Migration;

class m170907_181431_creta_performance_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('performance', [
            'id' => $this->primaryKey(),
            'artist' => $this->string(),
            'place' => $this->string(),
            'date' => $this->date(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('performance');

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

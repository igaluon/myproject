<?php

use yii\db\Migration;

class m170907_181005_creta_concert_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('concert', [
            'id' => $this->primaryKey(),
            'place' => $this->string(),
        ], $tableOptions);


    }

    public function down()
    {
        $this->dropTable('concert');

        return false;
    }

}

<?php

use yii\db\Migration;

class m170907_180759_creta_artist_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('artist', [
            'id' => $this->primaryKey(),
            'artist' => $this->string()->notNull(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('artist');

        return false;
    }

}

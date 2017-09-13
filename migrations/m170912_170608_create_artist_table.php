<?php

use yii\db\Migration;

/**
 * Handles the creation of table `artist`.
 */
class m170912_170608_create_artist_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('artist', [
            'id' => $this->primaryKey(),
            'artist' => $this->text(255),
        ], $tableOptions);



    }

    /**
     * @return bool
     */
    public function down()
    {
        $this->dropTable('artist');

        return false;
    }
}

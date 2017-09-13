<?php

use yii\db\Migration;

/**
 * Class m170912_170722_concert_artist_table
 */
class m170912_170722_create_concert_table extends Migration
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

        $this->createTable('concert', [
            'id' => $this->primaryKey(),
            'place' => $this->text(255),
        ], $tableOptions);




    }

    /**
     * @return bool
     */
    public function down()
    {
        $this->dropTable('concert');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170912_170722_concert_artist_table cannot be reverted.\n";

        return false;
    }
    */
}

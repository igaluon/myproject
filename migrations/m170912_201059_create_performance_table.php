<?php

use yii\db\Migration;

/**
 * Handles the creation of table `performance`.
 */
class m170912_201059_create_performance_table extends Migration
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

        $this->createTable('performance', [
            'id' => $this->primaryKey(),
            'artist_id' => $this->integer(11)->notNull(),
            'place_id' => $this->integer(11)->notNull(),
            'date' => $this->date(),
        ], $tableOptions);

        $this->createIndex('index-artist', 'performance', 'artist_id');
        $this->createIndex('index-concert', 'performance', 'place_id');

        $this->addForeignKey('fk-performance-artist_id-artist-id', '{{%performance}}', 'artist_id', '{{%artist}}', 'id', 'CASCADE');
        $this->addForeignKey('fk-performance-place_id-concert-id', '{{%performance}}', 'place_id', '{{%concert}}', 'id', 'CASCADE');


    }

    public function down()
    {
        $this->dropTable('performance');

        return false;
    }
}

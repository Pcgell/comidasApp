<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comidas`.
 */
class m181110_021016_create_comidas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comidas', [
            'id' => $this->primaryKey(),
            'nombre'=> $this->string(),
            'descripcion'=> $this->string(),
            'pais'=>$this->string(),
            'img'=>$this->string(),
            'created'=>$this->timestamp(),
            'modified'=>$this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comidas');
    }
}

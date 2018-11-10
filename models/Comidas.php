<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comidas".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $pais
 * @property string $img
 * @property string $created
 * @property string $modified
 */
class Comidas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comidas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created', 'modified'], 'safe'],
            [['nombre', 'descripcion', 'pais', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'pais' => 'Pais',
            'img' => 'Img',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }
}

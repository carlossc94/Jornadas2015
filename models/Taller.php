<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "taller".
 *
 * @property integer $id_taller
 * @property string $nombre
 * @property string $instructor
 * @property string $estado
 * @property string $fecha
 * @property string $hora_inicial
 * @property string $hora_final
 * @property integer $cupo
 * @property string $turno
 * @property string $imagen
 *
 * @property Inscripciones[] $inscripciones
 */
class Taller extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'taller';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'instructor','semestre', 'fecha', 'hora_inicial', 'cupo', 'turno'], 'required'],
            [['fecha'], 'safe'],
            [['cupo'], 'integer'],
            [['nombre', 'imagen'], 'string', 'max' => 100],
            [['instructor'], 'string', 'max' => 60],
            [['estado', 'turno'], 'string', 'max' => 1],
            [['hora_inicial', 'hora_final'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_taller' => 'Id Taller',
            'nombre' => 'Nombre',
            'instructor' => 'Instructor',
            'estado' => 'Estado',
            'fecha' => 'Fecha',
            'hora_inicial' => 'Hora Inicial',
            'hora_final' => 'Hora Final',
            'cupo' => 'Cupo',
            'turno' => 'Turno',
            'semestre'=>'Semestre',
            'ocupados'=>'Ocupados',
            'imagen' => 'Lugar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscripciones()
    {
        return $this->hasMany(Inscripciones::className(), ['id_taller' => 'id_taller']);
    }
}

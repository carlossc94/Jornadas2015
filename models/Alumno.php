<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumno".
 *
 * @property integer $id_alumno
 * @property string $matricula
 * @property string $nombre
 * @property string $apellidos
 * @property string $apellido_materno
 * @property string $carrera
 * @property string $imss
 * @property string $semestre
 * @property string $grupo
 * @property string $telefono
 * @property integer $cuarto_id_cuarto
 * @property integer $id_usuario
 *
 * @property Usuario $idUsuario
 * @property Inscripciones[] $inscripciones
 */
class Alumno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos', 'semestre', 'id_usuario'], 'required'],
            [['cuarto_id_cuarto', 'id_usuario'], 'integer'],
            [['matricula'], 'string', 'max' => 8],
            [['nombre', 'carrera', 'semestre'], 'string', 'max' => 45],
            [['apellidos'], 'string', 'max' => 30],
            [['apellido_materno'], 'string', 'max' => 15],
            [['imss'], 'string', 'max' => 12],
            [['grupo'], 'string', 'max' => 1],
            [['inscripcion'],'safe'],
            [['telefono'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_alumno' => 'Id Alumno',
            'matricula' => 'Matricula',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'apellido_materno' => 'Apellido Materno',
            'carrera' => 'Carrera',
            'imss' => 'Imss',
            'semestre' => 'Semestre',
            'grupo' => 'Grupo',
            'telefono' => 'Telefono',
            'cuarto_id_cuarto' => 'Cuarto Id Cuarto',
            'id_usuario' => 'Id Usuario',
            'inscripcion'=>'inscripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id_usuario' => 'id_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscripciones()
    {
        return $this->hasMany(Inscripciones::className(), ['id_alumno' => 'id_alumno']);
    }
}

<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
/**
 * This is the model class for table "inscripciones".
 *
 * @property integer $id_alumno
 * @property integer $id_taller
 * @property integer $id_inscripcion
 * @property string $fecha
 * @property integer $id_usuario
 *
 * @property Alumno $idAlumno
 * @property Taller $idTaller
 */
class Inscripciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inscripciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_alumno', 'id_taller'], 'required'],
            #[['id_alumno', 'id_taller', 'id_usuario'], 'integer'],
            [['fecha'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_alumno' => 'Alumno',
            'id_taller' => 'Taller',
            #'id_inscripcion' => 'Id Inscripcion',
            'fecha' => 'Fecha',
            #'id_usuario' => 'Id Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumno()
    {
        return $this->hasOne(Alumno::className(), ['id_alumno' => 'id_alumno']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaller()
    {
        return $this->hasOne(Taller::className(), ['id_taller' => 'id_taller']);
    }

    public function behaviors()
    {
      return [
        'timestamp'=>[
          'class'=>TimestampBehavior::className(),
          'createdAtAttribute'=>'fecha',
          'updatedAtAttribute'=>false,
          'value'=>new Expression('NOW()'),
        ],
      ];

    }
}

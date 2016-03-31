<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alumno;

/**
 * AlumnoSearch represents the model behind the search form about `app\models\Alumno`.
 */
class AlumnoSearch extends Alumno
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_alumno', 'cuarto_id_cuarto', 'id_usuario'], 'integer'],
            [['matricula', 'nombre', 'apellidos', 'apellido_materno', 'carrera', 'imss', 'semestre', 'grupo', 'telefono'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Alumno::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_alumno' => $this->id_alumno,
            'cuarto_id_cuarto' => $this->cuarto_id_cuarto,
            'id_usuario' => $this->id_usuario,
        ]);

        $query->andFilterWhere(['like', 'matricula', $this->matricula])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            #->andFilterWhere(['like', 'apellido_paterno', $this->apellido_paterno])
            ->andFilterWhere(['like', 'apellido_materno', $this->apellido_materno])
            ->andFilterWhere(['like', 'carrera', $this->carrera])
            ->andFilterWhere(['like', 'imss', $this->imss])
            ->andFilterWhere(['like', 'semestre', $this->semestre])
            ->andFilterWhere(['like', 'grupo', $this->grupo])
            ->andFilterWhere(['like', 'telefono', $this->telefono]);

        return $dataProvider;
    }
}

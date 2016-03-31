<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inscripciones;

/**
 * SearchInscripciones represents the model behind the search form about `app\models\Inscripciones`.
 */
class SearchInscripciones extends Inscripciones
{
    /**
     * @inheritdoc
     */
     public $alumno;
     public $taller;

    public function rules()
    {
        return [
            [['id_alumno', 'id_taller', 'id_inscripcion', 'id_usuario'], 'integer'],
            [['fecha'], 'safe'],
            [['alumno', 'taller'], 'safe'],
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
        $query = Inscripciones::find();
        $query->joinWith(['alumno', 'taller']);

        $dataProvider->sort->attributes['alumno'] = [
        // The tables are the ones our relation are configured to
        // in my case they are prefixed with "tbl_"
        'asc' => ['alumno.nombre' => SORT_ASC],
        'desc' => ['alumno.nombre' => SORT_DESC],
    ];
    // Lets do the same with country now
    $dataProvider->sort->attributes['taller'] = [
        'asc' => ['taller.nombre' => SORT_ASC],
        'desc' => ['taller.nombre' => SORT_DESC],
    ];


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_alumno' => $this->id_alumno,
            'id_taller' => $this->id_taller,
            'id_inscripcion' => $this->id_inscripcion,
            'fecha' => $this->fecha,
            'id_usuario' => $this->id_usuario,
        ])
        ->andFilterWhere(['like', 'alumno.nombre', $this->alumno])
        ->andFilterWhere(['like', 'alumno.nombre', $this->taller]);


        return $dataProvider;
    }
}

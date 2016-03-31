<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Taller;

/**
 * SearchTaller represents the model behind the search form about `app\models\Taller`.
 */
class SearchTaller extends Taller
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_taller', 'cupo'], 'integer'],
            [['nombre', 'instructor', 'estado', 'fecha', 'hora_inicial', 'hora_final', 'turno', 'imagen'], 'safe'],
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
        $query = Taller::find();

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
            'id_taller' => $this->id_taller,
            'fecha' => $this->fecha,
            'cupo' => $this->cupo,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'instructor', $this->instructor])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'hora_inicial', $this->hora_inicial])
            ->andFilterWhere(['like', 'hora_final', $this->hora_final])
            ->andFilterWhere(['like', 'turno', $this->turno])
            ->andFilterWhere(['like', 'imagen', $this->imagen]);

        return $dataProvider;
    }
}

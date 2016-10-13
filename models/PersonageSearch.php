<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Personage;

/**
 * PersonageSearch represents the model behind the search form about `app\models\Personage`.
 */
class PersonageSearch extends Personage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_clan', 'power', 'hp', 'money', 'level', 'vunos'], 'integer'],
            [['nname', 'path_url', 'created_at', 'password'], 'safe'],
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
        $query = Personage::find();

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
            'id' => $this->id,
            'id_clan' => $this->id_clan,
            'power' => $this->power,
            'hp' => $this->hp,
            'created_at' => $this->created_at,
            'money' => $this->money,
            'level' => $this->level,
            'vunos' => $this->vunos,
        ]);

        $query->andFilterWhere(['like', 'nname', $this->nname])
            ->andFilterWhere(['like', 'path_url', $this->path_url])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}

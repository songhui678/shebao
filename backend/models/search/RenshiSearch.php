<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Renshi;

/**
 * RenshiSearch represents the model behind the search form of `backend\models\Renshi`.
 */
class RenshiSearch extends Renshi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'company_id', 'uid', 'province', 'city', 'area', 'start_time', 'end_time', 'num', 'pay_status', 'pay_time', 'pay_type', 'pay_source', 'is_new', 'create_time', 'status'], 'integer'],
            [['order_sn', 'name', 'tel', 'sfz', 'type', 'title'], 'safe'],
            [['fund_base', 'social_base'], 'number'],
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
        $query = Renshi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'order_id' => $this->order_id,
            'company_id' => $this->company_id,
            'uid' => $this->uid,
            'province' => $this->province,
            'city' => $this->city,
            'area' => $this->area,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'num' => $this->num,
            'pay_status' => $this->pay_status,
            'pay_time' => $this->pay_time,
            'pay_type' => $this->pay_type,
            'pay_source' => $this->pay_source,
            'is_new' => $this->is_new,
            'fund_base' => $this->fund_base,
            'social_base' => $this->social_base,
            'create_time' => $this->create_time,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'order_sn', $this->order_sn])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'sfz', $this->sfz])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}

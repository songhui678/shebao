<?php

namespace backend\models\search;

use backend\models\Company;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * CompanySearch represents the model behind the search form of `app\models\Company`.
 */
class CompanySearch extends Company {
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['id', 'scale'], 'integer'],
			[['name', 'short_name', 'email', 'address', 'phone', 'logo', 'create_time', 'update_time'], 'safe'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function scenarios() {
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
	public function search($params) {
		$query = Company::find();

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
			'id' => $this->id,
			'scale' => $this->scale,
			'create_time' => $this->create_time,
			'update_time' => $this->update_time,
		]);

		$query->andFilterWhere(['like', 'name', $this->name])
			->andFilterWhere(['like', 'short_name', $this->short_name])
			->andFilterWhere(['like', 'email', $this->email])
			->andFilterWhere(['like', 'address', $this->address])
			->andFilterWhere(['like', 'phone', $this->phone])
			->andFilterWhere(['like', 'logo', $this->logo]);

		return $dataProvider;
	}
}

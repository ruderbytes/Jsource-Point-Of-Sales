<?php

class PriceList extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

        public function tableName()
	{
		return 'price_list';
	}

	public function rules()
	{
		return array(
			array('price', 'required'),
                        array('created_at','default', 'value'=>date('Y-m-d H:i:s'), 'on'=>'insert'),
			array('item_id, created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('id, price, item_id, created_at, created_by, updated_at, updated_by', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
                    'varitem'=>array(self::BELONGS_TO,'Item','item_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'price' => 'Price',
			'item_id' => 'Item',
                        'From Periode' => 'from_periode',
			'Until Periode' => 'until_periode',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		);
	}

	public function search()
	{
	
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('price',$this->price);
		$criteria->compare('item_id',$this->item_id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('updated_by',$this->updated_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
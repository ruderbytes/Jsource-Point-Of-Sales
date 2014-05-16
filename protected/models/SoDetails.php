<?php

class SoDetails extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'so_details';
	}

	public function rules()
	{
		return array(
			array('item_code, qty', 'required'),
			array('item_code, so_id, c_price, total', 'numerical', 'integerOnly'=>true),
			array('item_name, qty', 'length', 'max'=>90),
			array('id, item_code, item_name, so_id, c_price, qty, total', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
                    'varsaleso' => array(self::BELONGS_TO, 'SalesOrder', 'so_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'item_code' => 'Item Code',
			'item_name' => 'Item Name',
			'so_id' => 'So',
			'c_price' => 'C Price',
			'qty' => 'Qty',
			'total' => 'Total',
		);
	}

	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('item_code',$this->item_code);
		$criteria->compare('item_name',$this->item_name,true);
		$criteria->compare('so_id',$this->so_id);
		$criteria->compare('c_price',$this->c_price);
		$criteria->compare('qty',$this->qty,true);
		$criteria->compare('total',$this->total);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
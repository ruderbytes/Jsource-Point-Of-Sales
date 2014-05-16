<?php

class Pelunasan extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'pelunasan';
	}

	public function rules()
	{
		return array(
			array('no_so, tgl_pelunasan, total_bayar', 'required'),
			array('no_so, total_bayar, dibuat_oleh', 'numerical', 'integerOnly'=>true),
			array('id, no_so, tgl_pelunasan, total_bayar, dibuat_oleh', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'no_so' => 'No Faktur',
			'tgl_pelunasan' => 'Tgl Pelunasan',
			'total_bayar' => 'Total Bayar',
			'dibuat_oleh' => 'Dibuat Oleh',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('no_so',$this->no_so);
		$criteria->compare('tgl_pelunasan',$this->tgl_pelunasan,true);
		$criteria->compare('total_bayar',$this->total_bayar);
		$criteria->compare('dibuat_oleh',$this->dibuat_oleh);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
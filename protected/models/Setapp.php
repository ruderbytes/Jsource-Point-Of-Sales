<?php

class Setapp extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'setapp';
	}

	public function rules()
	{
		return array(
			array('namaapp, judulatas, textjalan, gambar, favicon, notefortoday', 'required'),
			array('namaapp, judulatas, textjalan, gambar, favicon', 'length', 'max'=>100),
			array('id_app, namaapp, judulatas, textjalan, gambar, favicon, notefortoday', 'safe', 'on'=>'search'),
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
			'id_app' => 'Id App',
			'namaapp' => 'Application Name',
			'judulatas' => 'Motto',
			'textjalan' => 'Running Text',
			'gambar' => 'Picture',
			'favicon' => 'Favicon',
			'notefortoday' => 'Note',
		);
	}

	public function search()
	{
	
		$criteria=new CDbCriteria;

		$criteria->compare('id_app',$this->id_app);
		$criteria->compare('namaapp',$this->namaapp,true);
		$criteria->compare('judulatas',$this->judulatas,true);
		$criteria->compare('textjalan',$this->textjalan,true);
		$criteria->compare('gambar',$this->gambar,true);
		$criteria->compare('favicon',$this->favicon,true);
		$criteria->compare('notefortoday',$this->notefortoday,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
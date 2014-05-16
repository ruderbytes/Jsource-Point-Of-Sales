<?php

class Gambar extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'gambar';
	}
	public function rules()
	{
		return array(
			array('judu_gbr, file_gbr', 'required'),
			array('judu_gbr', 'length', 'max'=>60),
                        array('file_gbr', 'file', 'types'=>'jpg, gif, png, pdf'),
			array('file_gbr', 'length', 'max'=>150),
			array('id_gbr, judu_gbr, file_gbr, uploaded', 'safe', 'on'=>'search'),
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
			'id_gbr' => 'Id Gbr',
			'judu_gbr' => 'Judul Gambar',
			'file_gbr' => 'File Gbr',
			'uploaded' => 'Uploaded',
		);
	}

	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('id_gbr',$this->id_gbr);
		$criteria->compare('judu_gbr',$this->judu_gbr,true);
		$criteria->compare('file_gbr',$this->file_gbr,true);
		$criteria->compare('uploaded',$this->uploaded,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
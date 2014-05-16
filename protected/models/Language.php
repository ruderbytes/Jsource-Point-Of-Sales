<?php

class Language extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'language';
	}

	public function rules()
	{
		return array(
			array('langid, langdesc', 'required'),
			array('langid', 'length', 'max'=>5),
			array('langdesc', 'length', 'max'=>15),
			array('id, langid, langdesc', 'safe', 'on'=>'search'),
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
			'langid' => 'Langid',
			'langdesc' => 'Langdesc',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('langid',$this->langid,true);
		$criteria->compare('langdesc',$this->langdesc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
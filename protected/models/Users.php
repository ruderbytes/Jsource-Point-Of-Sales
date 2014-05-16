<?php

class Users extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

        public function tableName()
	{
		return 'users';
	}

	public function rules()
	{
		return array(
			array('username, password, fname, lname, email', 'required'),
			array('level_id', 'numerical', 'integerOnly'=>true),
                        array('fname,lname', 'length', 'max'=>15),
			array('username', 'length', 'max'=>20),
			array('password', 'length', 'max'=>50),
			array('email', 'length', 'max'=>50),
			array('id, username, password, email, joinDate, level_id', 'safe', 'on'=>'search'),
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
                        'fname' => 'Nama Depan',
                        'lname' => 'Nama Belakang',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'joinDate' => 'Tanggal Gabung',
			'level_id' => 'Level',
		);
	}

	public function search()
	{                
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('joinDate',$this->joinDate,true);
		$criteria->compare('level_id',$this->level_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
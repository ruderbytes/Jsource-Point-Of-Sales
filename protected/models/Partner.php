<?php

class Partner extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'partner';
	}

	public function rules()
	{
		return array(
			array('No_Account, fname, lname, alamat1, kode_pos, kota, provinsi', 'required'),
			array('No_Account, kode_pos', 'numerical', 'integerOnly'=>true),
			array('Perusahaan', 'length', 'max'=>25),
			array('fname, lname', 'length', 'max'=>20),
			array('email, kota, provinsi', 'length', 'max'=>30),
			array('alamat2, deskripsi', 'safe'),
			array('Id_sup, No_Account, Perusahaan, fname, lname, email, alamat1, alamat2, kode_pos, kota, provinsi, deskripsi', 'safe', 'on'=>'search'),
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
			'Id_sup' => 'ID',
			'No_Account' => 'No Account',
			'Perusahaan' => 'Perusahaan',
			'fname' => 'Fname',
			'lname' => 'Lname',
			'email' => 'Email',
			'alamat1' => 'Alamat1',
			'alamat2' => 'Alamat2',
			'kode_pos' => 'Kode Pos',
			'kota' => 'Kota',
			'provinsi' => 'Provinsi',
			'deskripsi' => 'Deskripsi',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id_sup',$this->Id_sup);
		$criteria->compare('No_Account',$this->No_Account);
		$criteria->compare('Perusahaan',$this->Perusahaan,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('alamat1',$this->alamat1,true);
		$criteria->compare('alamat2',$this->alamat2,true);
		$criteria->compare('kode_pos',$this->kode_pos);
		$criteria->compare('kota',$this->kota,true);
		$criteria->compare('provinsi',$this->provinsi,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
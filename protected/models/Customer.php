<?php

class Customer extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'customer';
	}

	public function rules()
	{
		return array(
			array('noaccount, cperusahaan, cfname, clname, email, calamat1, calamat2, ckode_pos, ckota, cprovinsi, cdeskripsi', 'required'),
			array('noaccount, ckode_pos', 'numerical', 'integerOnly'=>true),
			array('cperusahaan', 'length', 'max'=>200),
			array('cfname, clname', 'length', 'max'=>25),
			array('email', 'length', 'max'=>75),
			array('ckota, cprovinsi', 'length', 'max'=>50),
			array('id_cus, noaccount, cperusahaan, cfname, clname, email, calamat1, calamat2, ckode_pos, ckota, cprovinsi, cdeskripsi', 'safe', 'on'=>'search'),
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
			'id_cus' => 'ID',
			'noaccount' => 'No Account',
			'cperusahaan' => 'Perusahaan',
			'cfname' => 'Nama Depan',
			'clname' => 'Nama Belakang',
			'email' => 'Email',
			'calamat1' => 'Alamat1',
			'calamat2' => 'Alamat2',
			'ckode_pos' => 'Kode Pos',
			'ckota' => 'Kota',
			'cprovinsi' => 'Provinsi',
			'cdeskripsi' => 'Deskripsi',                        
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

		$criteria->compare('id_cus',$this->id_cus);
		$criteria->compare('noaccount',$this->noaccount);
		$criteria->compare('cperusahaan',$this->cperusahaan,true);
		$criteria->compare('cfname',$this->cfname,true);
		$criteria->compare('clname',$this->clname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('calamat1',$this->calamat1,true);
		$criteria->compare('calamat2',$this->calamat2,true);
		$criteria->compare('ckode_pos',$this->ckode_pos);
		$criteria->compare('ckota',$this->ckota,true);
		$criteria->compare('cprovinsi',$this->cprovinsi,true);
		$criteria->compare('cdeskripsi',$this->cdeskripsi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
<?php

class Advertising extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'advertising';
	}

	public function rules()
	{
		return array(
			array('judul, nama, alamat, no_telp, isi', 'required'),
			array('judul', 'length', 'max'=>225),
			array('nama, kota, provinsi', 'length', 'max'=>50),
			array('no_telp', 'length', 'max'=>13),
                        //array('avatar', 'file', 'types'=>'jpg, gif, png, jpeg'),
			array('id, judul, nama, alamat, no_telp, avatar, provinsi, kota,isi, created_at', 'safe', 'on'=>'search'),
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
			'judul' => 'Judul',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'no_telp' => 'No Telp',
			'avatar' => 'Avatar',
			'isi' => 'Isi',
			'created_at' => 'Created At',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('no_telp',$this->no_telp,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('created_at',$this->created_at,true);
                $criteria->compare('parent_id',$this->parent_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
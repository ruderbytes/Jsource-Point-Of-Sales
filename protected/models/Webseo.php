<?php

class Webseo extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'webseo';
	}

	public function rules()
	{
		return array(
			array('name_of_website, motto, keywords, author, favicon, website_desc, language, home, about, contact', 'required'),
			array('name_of_website, author', 'length', 'max'=>100),
			array('motto', 'length', 'max'=>190),
			array('favicon', 'length', 'max'=>160),
			array('language', 'length', 'max'=>5),
			array('id, name_of_website, motto, keywords, author, favicon, website_desc, language, home, about, contact', 'safe', 'on'=>'search'),
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
			'name_of_website' => 'Nama Website',
			'motto' => 'Title / Judul Website',
			'keywords' => 'Keywords Website',
			'author' => 'Author',
			'favicon' => 'Favicon',
			'website_desc' => 'Deskripsi Website',
			'language' => 'Lang ID',
                        'home' => 'Home',
			'about' => 'About',
			'contact' => 'Contact',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name_of_website',$this->name_of_website,true);
		$criteria->compare('motto',$this->motto,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('favicon',$this->favicon,true);
		$criteria->compare('website_desc',$this->website_desc,true);
		$criteria->compare('language',$this->language,true);
                $criteria->compare('home',$this->about,true);
		$criteria->compare('about',$this->about,true);
		$criteria->compare('contact',$this->contact,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
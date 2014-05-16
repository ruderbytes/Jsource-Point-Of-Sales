<?php
class Webnews extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function tableName()
	{
		return 'webnews';
	}

	public function rules()
	{
		return array(
			array('webnews_title, webnews_content', 'required'),
			array('webnews_title', 'length', 'max'=>160),
			array('webnews_created_by, webnews_updated_by', 'length', 'max'=>90),
			array('id, webnews_title, webnews_content, webnews_created_at, webnews_updated_at, webnews_created_by, webnews_updated_by', 'safe', 'on'=>'search'),
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
			'webnews_title' => 'Title',
			'webnews_content' => 'Content',
			'webnews_created_at' => 'Created At',
			'webnews_updated_at' => 'Updated At',
			'webnews_created_by' => 'Created By',
			'webnews_updated_by' => 'Updated By',
		);
	}

	public function search()
	{
	
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('webnews_title',$this->webnews_title,true);
		$criteria->compare('webnews_content',$this->webnews_content,true);
		$criteria->compare('webnews_created_at',$this->webnews_created_at,true);
		$criteria->compare('webnews_updated_at',$this->webnews_updated_at,true);
		$criteria->compare('webnews_created_by',$this->webnews_created_by,true);
		$criteria->compare('webnews_updated_by',$this->webnews_updated_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
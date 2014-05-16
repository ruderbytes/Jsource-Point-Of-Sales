<?php

class Item extends CActiveRecord
{

        public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'item';
	}

	public function rules()
	{
		return array(
			array('CREATED_BY, LAST_UPDATE_BY', 'numerical', 'integerOnly'=>true,),
			array('MIN_STOCK', 'numerical'),
			array('ITEM_CODE, BARCODE', 'length', 'max'=>40),
			array('ITEM_DESCRIPTION, ITEM_NAME', 'length', 'max'=>80),
                        array('CREATED_DATE','default', 'value'=>date('Y-m-d H:i:s'), 'on'=>'insert'),
			array('UOM_CODE', 'length', 'max'=>18),
			array('ACTIVE_FLAG', 'length', 'max'=>1),
			array('NOTE', 'length', 'max'=>240),
                        array('GAMBAR', 'file', 'types'=>'jpg, gif, png, pdf , xlsx, zip'),
			array('LAST_UPDATE_DATE', 'safe'),
			array('ITEM_ID, ITEM_CODE, ITEM_DESCRIPTION, BARCODE, UOM_CODE, MIN_STOCK, ACTIVE_FLAG, CREATED_BY, CREATED_DATE, LAST_UPDATE_DATE, LAST_UPDATE_BY, GAMBAR, NOTE, ITEM_NAME', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
                    'varptice' => array(self::HAS_MANY, 'PriceList', 'item_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'ITEM_ID' => 'Item',
			'ITEM_CODE' => 'Item Code',
			'ITEM_DESCRIPTION' => 'Item Description',
			'BARCODE' => 'Barcode',
			'UOM_CODE' => 'Uom Code',
			'MIN_STOCK' => 'Min Stock',
			'ACTIVE_FLAG' => 'Active Flag',
			'CREATED_BY' => 'Created By',
			'CREATED_DATE' => 'Created Date',
			'LAST_UPDATE_DATE' => 'Last Update Date',
			'LAST_UPDATE_BY' => 'Last Update By',
			'GAMBAR' => 'Gambar',
			'NOTE' => 'Note',
			'ITEM_NAME' => 'Item Name',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('ITEM_ID',$this->ITEM_ID);
		$criteria->compare('ITEM_CODE',$this->ITEM_CODE,true);
		$criteria->compare('ITEM_DESCRIPTION',$this->ITEM_DESCRIPTION,true);
		$criteria->compare('BARCODE',$this->BARCODE,true);
		$criteria->compare('UOM_CODE',$this->UOM_CODE,true);
		$criteria->compare('MIN_STOCK',$this->MIN_STOCK);
		$criteria->compare('ACTIVE_FLAG',$this->ACTIVE_FLAG,true);
		$criteria->compare('CREATED_BY',$this->CREATED_BY);
		$criteria->compare('CREATED_DATE',$this->CREATED_DATE,true);
		$criteria->compare('LAST_UPDATE_DATE',$this->LAST_UPDATE_DATE,true);
		$criteria->compare('LAST_UPDATE_BY',$this->LAST_UPDATE_BY);
		$criteria->compare('GAMBAR',$this->GAMBAR,true);
		$criteria->compare('NOTE',$this->NOTE,true);
		$criteria->compare('ITEM_NAME',$this->ITEM_NAME,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
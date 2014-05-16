<?php
class KasMasuk extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'kas_masuk';
	}

	public function rules()
	{
		return array(
			array('person_id, money_in, date_in', 'required'),
			array('person_id, created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('money_in, saldo', 'numerical'),
                        array('desc', 'length', 'max'=>225),
			array('id, person_id, money_in, saldo, date_in, created_at, created_by, updated_at, updated_by', 'safe', 'on'=>'search'),
		);
	}

        public function relations()
	{
		return array(
                    'varkmdet' => array(self::HAS_MANY, 'KmDetails', 'km_id'),
                    'user'=>array(self::BELONGS_TO,'Users','updated_by'),
                    
		);
	}
        
        public function ambilReport()
        {
            $dari=$_REQUEST['from'];
            $sampai=$_REQUEST['until']; 
		$sql="SELECT * FROM kas_masuk where created_at >= '$dari' and created_at <= '$sampai' order by id desc ";
		$dataReportKas=new CSqlDataProvider($sql,array(
			'keyField' => 'id',
			'pagination'=>array(
				'pageSize'=>10,
			),
		));	
		return $dataReportKas;
        }

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'person_id' => 'Person',
			'money_in' => 'Money In',
                        'saldo' => 'Saldo',
			'date_in' => 'Date In',
                        'desc' => 'Description',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		);
	}

	public function search()
	{
	
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('person_id',$this->person_id);
		$criteria->compare('money_in',$this->money_in);
		$criteria->compare('date_in',$this->date_in,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('updated_by',$this->updated_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
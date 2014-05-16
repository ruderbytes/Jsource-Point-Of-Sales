<?php
class SalesOrder extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'sales_order';
	}
        
        public function ambilStatusBeli()
	{
            $datas = self::model()->findAll(array('select'=>'*',
                    'condition'=>'status_beli=:idapp',
                    'params'=>array(':idapp'=>'belum lunas'),
                    ));
            $data = array();
            foreach ($datas as $row){
                $getCustomers=  Customer::model()->findByPk($row->customer_name)->cperusahaan;
                //$data[$row->id] = $row->id .' | '. $row->status_beli.' | '.$row->needed;
                $data[$row->id] = $row->id .' | '.$getCustomers.' | Rp.'.number_format($row->total).',-';
            }
                return $data;
        }

	public function rules()
	{
		return array(
			array('customer_name, needed, sales_name, tp_payment, keterangan, status', 'required'),
			array('tp_payment, created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('customer_name, sales_name', 'length', 'max'=>100),
			array('id, customer_name, location, needed, sales_name, status,tp_payment, keterangan, created_by, created_at, updated_at, updated_by', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
                  'varsodetail' => array(self::HAS_MANY, 'SoDetails', 'so_id'),
                  'varusers' => array(self::BELONGS_TO, 'Users', 'jusers_id'),
		);
	}
        public function ambilReport()
        {
            $dari=$_REQUEST['from'];
            $sampai=$_REQUEST['until']; 
		$sql="SELECT * FROM sales_order where created_at >= '$dari' and created_at <= '$sampai' order by id desc ";
		$dataReport=new CSqlDataProvider($sql,array(
			'keyField' => 'id',
			'pagination'=>array(
				'pageSize'=>10,
			),
		));	
		return $dataReport;
        }

        public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'customer_name' => 'Customer Name',
			'location' => 'Location',
			'needed' => 'Needed',
			'sales_name' => 'Sales Name',
                        'status_beli' => 'Status Beli',
			'tp_payment' => 'Tp Payment',
                        'status' => 'Status',
			'keterangan' => 'Keterangan',
			'created_by' => 'Created By',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		);
	}

	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('customer_name',$this->customer_name,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('needed',$this->needed,true);
		$criteria->compare('sales_name',$this->sales_name,true);
		$criteria->compare('tp_payment',$this->tp_payment);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('updated_by',$this->updated_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
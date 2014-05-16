<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $id
 * @property integer $NIP
 * @property string $employee_name
 * @property string $email
 * @property string $no_telp
 * @property string $addess
 */
class Employee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NIP, employee_name, email, no_telp, addess', 'required'),
			array('NIP', 'numerical', 'integerOnly'=>true),
			array('employee_name', 'length', 'max'=>65),
			array('email', 'length', 'max'=>30),
			array('no_telp', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, NIP, employee_name, email, no_telp, addess', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'NIP' => 'Nip',
			'employee_name' => 'Employee Name',
			'email' => 'Email',
			'no_telp' => 'No Telp',
			'addess' => 'Addess',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('NIP',$this->NIP);
		$criteria->compare('employee_name',$this->employee_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('no_telp',$this->no_telp,true);
		$criteria->compare('addess',$this->addess,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
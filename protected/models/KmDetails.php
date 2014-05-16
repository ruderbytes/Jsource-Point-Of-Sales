<?php

/**
 * This is the model class for table "km_details".
 *
 * The followings are the available columns in table 'km_details':
 * @property integer $id
 * @property integer $km_id
 * @property string $name_out
 * @property integer $amount_money_out
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class KmDetails extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return KmDetails the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'km_details';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name_out, amount_money_out', 'required'),
            array('km_id, amount_money_out, created_by, updated_by', 'numerical', 'integerOnly' => true),
            array('name_out', 'length', 'max' => 225),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, km_id, name_out, amount_money_out, created_at, created_by, updated_at, updated_by', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        return array(
            'varkasmasuk' => array(self::BELONGS_TO, 'KasMasuk', 'km_id'),
            'user' => array(self::BELONGS_TO, 'Users', 'updated_by'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'km_id' => 'Km',
            'name_out' => 'Name Out',
            'amount_money_out' => 'Amount Money Out',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('km_id', $this->km_id);
        $criteria->compare('name_out', $this->name_out, true);
        $criteria->compare('amount_money_out', $this->amount_money_out);
        $criteria->compare('created_at', $this->created_at, true);
        $criteria->compare('created_by', $this->created_by);
        $criteria->compare('updated_at', $this->updated_at, true);
        $criteria->compare('updated_by', $this->updated_by);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}
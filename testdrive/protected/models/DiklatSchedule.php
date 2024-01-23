<?php

/**
 * This is the model class for table "diklat_schedule".
 *
 * The followings are the available columns in table 'diklat_schedule':
 * @property integer $id
 * @property string $place
 * @property string $startDate
 * @property string $endDate
 * @property string $date
 * @property integer $kapasitas
 * @property string $created_at
 * @property string $update_at
 */
class DiklatSchedule extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'diklat_schedule';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kapasitas', 'numerical', 'integerOnly'=>true),
			array('place', 'length', 'max'=>255),
			array('startDate, endDate, date, created_at, update_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, place, startDate, endDate, date, kapasitas, created_at, update_at', 'safe', 'on'=>'search'),
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
			'place' => 'Place',
			'startDate' => 'Start Date',
			'endDate' => 'End Date',
			'date' => 'Date',
			'kapasitas' => 'Kapasitas',
			'created_at' => 'Created At',
			'update_at' => 'Update At',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('startDate',$this->startDate,true);
		$criteria->compare('endDate',$this->endDate,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('kapasitas',$this->kapasitas);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('update_at',$this->update_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DiklatSchedule the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

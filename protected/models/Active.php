<?php

/**
 * This is the model class for table "{{active}}".
 *
 * The followings are the available columns in table '{{active}}':
 * @property integer $id
 * @property integer $id_well
 * @property integer $active
 * @property string $change_date
 * @property string $note
 * @property string $production
 *
 * The followings are the available model relations:
 * @property Well $idWell
 */
class Active extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{active}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_well, active, change_date', 'required'),
			array('id_well, active', 'numerical', 'integerOnly'=>true),
			array('note', 'length', 'max'=>255),
			array('production', 'length', 'max'=>65),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_well, active, change_date, note, production', 'safe', 'on'=>'search'),
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
			'idWell' => array(self::BELONGS_TO, 'Well', 'id_well'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_well' => 'Id Well',
			'active' => 'Active',
			'change_date' => 'Change Date',
			'note' => 'Note',
			'production' => 'Production',
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
		$criteria->compare('id_well',$this->id_well);
		$criteria->compare('active',$this->active);
		$criteria->compare('change_date',$this->change_date,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('production',$this->production,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Active the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "{{well}}".
 *
 * The followings are the available columns in table '{{well}}':
 * @property integer $id
 * @property string $name
 * @property string $api
 * @property integer $active
 * @property string $production
 * @property string $note
 * @property string $id_lease
 * @property string $last_update
 *
 * The followings are the available model relations:
 * @property Active[] $actives
 * @property AtributLease[] $atributLeases
 * @property AtributWell[] $atributWells
 * @property Lease $idLease
 */
class Well extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{well}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('active, id_lease, last_update', 'required'),
			array('active', 'numerical', 'integerOnly'=>true),
			array('name, api, note, id_lease', 'length', 'max'=>255),
			array('name', 'unique', 'className' => 'Well',
				'attributeName' => 'name',
				'message'=>'This name is already in use'),
			array('production', 'length', 'max'=>65),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, api, active, production, note, id_lease, last_update', 'safe', 'on'=>'search'),
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
			'actives' => array(self::HAS_MANY, 'Active', 'id_well'),
			'atributLeases' => array(self::HAS_MANY, 'AtributLease', 'id_lease'),
			'atributWells' => array(self::HAS_MANY, 'AtributWell', 'id_well'),
			'idLease' => array(self::BELONGS_TO, 'Lease', 'id_lease'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'api' => 'Api',
			'active' => 'Active',
			'production' => 'Production',
			'note' => 'Note',
			'id_lease' => 'Id Lease',
			'last_update' => 'Last Update',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('api',$this->api,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('production',$this->production,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('id_lease',$this->id_lease,true);
		$criteria->compare('last_update',$this->last_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Well the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

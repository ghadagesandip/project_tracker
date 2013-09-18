<?php

/**
 * This is the model class for table "tbl_bug".
 *
 * The followings are the available columns in table 'tbl_bug':
 * @property integer $id
 * @property integer $project_id
 * @property string $title
 * @property string $description
 * @property integer $bug_type_id
 * @property integer $bug_status_id
 * @property integer $assigned_by
 * @property integer $assigned_to
 * @property string $due_date
 * @property string $closed_date
 * @property string $created
 * @property string $modified
 */
class Bug extends ProjectTracker
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_bug';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required'),
			array('project_id, bug_type_id, bug_status_id, assigned_by, assigned_to', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			array('description, due_date, closed_date, created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, project_id, title, description, bug_type_id, bug_status_id, assigned_by, assigned_to, due_date, closed_date, created, modified', 'safe', 'on'=>'search'),
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
			'project_id' => 'Project',
			'title' => 'Title',
			'description' => 'Description',
			'bug_type_id' => 'Bug Type',
			'bug_status_id' => 'Bug Status',
			'assigned_by' => 'Assigned By',
			'assigned_to' => 'Assigned To',
			'due_date' => 'Due Date',
			'closed_date' => 'Closed Date',
			'created' => 'Created',
			'modified' => 'Modified',
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
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('bug_type_id',$this->bug_type_id);
		$criteria->compare('bug_status_id',$this->bug_status_id);
		$criteria->compare('assigned_by',$this->assigned_by);
		$criteria->compare('assigned_to',$this->assigned_to);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('closed_date',$this->closed_date,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bug the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "idea".
 *
 * The followings are the available columns in table 'idea':
 * @property integer $id
 * @property integer $user_id
 * @property string $created
 * @property string $idea
 * @property string $title
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property User $user
 */
class Idea extends AppActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Idea the static model class
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
		return 'idea';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			array('created, idea', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, created, idea, title', 'safe', 'on'=>'search'),
			array('idea, title', 'required')
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
			'comments' => array(self::HAS_MANY, 'Comment', 'idea_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'idea' => 'Idea',
			'user_id' => 'User',
			'created' => 'Created',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('idea',$this->idea,true);
		$criteria->compare('title',$this->title,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
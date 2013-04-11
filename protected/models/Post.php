<?php

/**
 * This is the model class for table "tbl_post".
 *
 * The followings are the available columns in table 'tbl_post':
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $tags
 * @property integer $status
 * @property boolean $active
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $author_id
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property User $author
 */
class Post extends CActiveRecord
{

	//const STATUS_YES = '1';
	//const STATUS_NO = '0';
	public $user_search;
	public $update_status;

	public static $status=array('0'=>'Desactivate','1'=>'Activate',''=>'');

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Post the static model class
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
		return 'tbl_post';
	}

	/*public static function getUrl()
    {
        //$controller=get_class($this);
        //$controller[0]=strtolower($controller[0]);
        $params=array('id'=>$this->id);
        // add the title parameter to the URL
        if($this->hasAttribute('title'))
            $params['title']=$this->title;
        return Yii::app()->urlManager->createUrl($controller.'/view', $params);
    }*/


	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content, status, author_id', 'required'/*,'message'=>'Field required.'*/),
			array('status, author_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>128),
			array('tags', 'safe'),
			//This commented validations are examples(Don't delete!!!). In Ajax.
			//http://www.yiiframework.com/wiki/56/
			//array('status','myValidation'), //Combined validations
			//array('title','unique','attributeName'=>'title','className'=>'Post'[we can reffer any model],'allowEmpty'=>'false'), //Validation for FK id
			//array('title','exist','attributeName'=>'title','className'=>'Post','allowEmpty'=>'false'), //Only allow existed values(oposite to unique)
			//array('title','required','message'=>'This message is for scenary1, {attribute}','on'=>'scenary1'), //We have to change the scenary in Controller.
			//array('title','compare','compareAttribute'=>'title2(name of other value)','allowEmpty'=>'false'), //Compare two attributes.
			//array('title','compare','compareValue'=>'Title 1(for example)','allowEmpty'=>'false'), //Compare two attributes.
			//array('title','compare','match'=>'Regular expression','allowEmpty'=>'false'), //Compare two attributes.

			//array('email','email'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, content, tags, status,author_id,user_search', 'safe', 'on'=>'search'),
		);
	}

	/*public function myValidation($attribute,$params){
		if($this->status=='1' && $this->author_id=='4')
			$this->addError('status','Sorry admin, you can {$attribute}.');
	}*/

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'comments' => array(self::HAS_MANY, 'Comment', 'post_id'),
			//'author' => array(self::BELONGS_TO, 'User', 'author_id'),
			'author' => array(self::BELONGS_TO, 'User', 'author_id'),
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
			'content' => 'Content',
			'tags' => 'Tags',
			'status' => 'Status',
			'update_status' => 'Update status',
			'author_id' => 'Author',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
		);
	}


	/**
	 * This is invoked before the record is saved.
	 * @return boolean whether the record should be saved.
	 */
	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$this->create_time=$this->update_time=time();
				//$this->author_id=Yii::app()->user->id;
			}
			else
				$this->update_time=time();
			return true;
		}
		else
			return false;
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
		$criteria->with = array('author'); 

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('status',$this->status);
		//$criteria->compare('author_id',$this->author_id);
		$criteria->compare( 'author.username', $this->user_search, true );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort' => array(
					'attributes' => array(
							'user_search' => array(
									'asc' => 'author.username',
									'desc' => 'author.username DESC',
								),
							'*',
						),
				),
		));
	}

	protected function Debug($var){
        $bt = debug_backtrace();
        $dump = new CVarDumper();
        $debug = '<div style="display:block;background-color:gold;border-radius:10px;border:solid 1px brown;padding:10px;z-index:10000;"><pre>';
        $debug .= '<h4>function: '.$bt[1]['function'].'() line('.$bt[0]['line'].')'.'</h4>';
        $debug .=  $dump->dumpAsString($var);
        $debug .= "</pre></div>\n";
        Yii::app()->params['debugContent'] .=$debug;
    }

    /* Get the userList to be showed in the dropdownList*/
	public static function getUserList(){
		 $userArray = CHtml::listData(User::model()->findAll(), 'id', 'username');
		 return $userArray;
	}

	public static function getStatusOptions($key=null) {
		if ($key!==null){
			return self::$status[$key];
		}else{
			return self::$status;	
		}
		
			/*return array(
				self::STATUS_YES => 'Active',
				self::STATUS_NO => 'No active',
			);*/	
			//return $this->active==1?"Yes":"No";
		
	}
}
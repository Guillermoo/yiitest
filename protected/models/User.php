<?php

Yii::import('application.models._base.BaseUser');

class User extends BaseUser
{

	public $password1;
	public $password2;

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function validatePassword($password){
		return $this->hashPassword($password,$this->salt)===$this->password;
	}

	public function hashPassword($password,$salt){
		return md5($salt.$password);
	}


	public function beforeSave()
	{
		if(!empty($this->password) )
		{
		  $ph=new PasswordHash(Yii::app()->params['phpass']['iteration_count_log2'], Yii::app()->params['phpass']['portable_hashes']);
		  $this->password=$ph->HashPassword($this->password);
		}
		return parent::beforeSave();
	}

}
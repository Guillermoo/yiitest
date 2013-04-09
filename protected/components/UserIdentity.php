<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

	private $_id;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
    public function authenticate()
    {
        $record=User::model()->findByAttributes(array('username'=>$this->username));
        $ph=new PasswordHash(Yii::app()->params['phpass']['iteration_count_log2'], Yii::app()->params['phpass']['portable_hashes']);
        /*$this->Debug($record);*/
        
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        elseif( !$ph->CheckPassword($this->password, $record->password) ) {
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        }
        else
        {
        	//Here we can store whatever we want about the user logged:
        	//Don't store imporant data
        	//$this->setState('email', $record->email);
            $this->_id=$record->id;
            Yii::app()->theme = 'bootstrap-admin';
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }


    public function authenticate_tutorial()
    {
        $record=User::model()->findByAttributes(array('username'=>$this->username));
        $ph=new PasswordHash(Yii::app()->params['phpass']['iteration_count_log2'], Yii::app()->params['phpass']['portable_hashes']);
        /*$this->Debug($record);*/
        
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        elseif( !$ph->CheckPassword($this->password, $record->password) ) {
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        }
        else
        {
        	//Here we can store whatever we want:
        	//$this->setState('email', $record->email);
            $this->_id=$record->id;
            Yii::app()->theme = 'bootstrap-admin';
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

 
    public function getId()
    {
        return $this->_id;
    }

}
<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	private $_role;
    public function authenticate()
    {
        $record=User::model()->findByAttributes(array('login'=>$this->username));
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->passw !== md5($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$record->id;
			switch($record->role)
			{
				case 1: $this->_role = 'reader'; break;
				case 2: $this->_role = 'author'; break;
				case 3: $this->_role = 'editor'; break;
				case 4: $this->_role = 'admin'; break;
				default: $this->_role = 'reader';
			}
			$this->setState('username',$record->name);
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
 
    public function getId()
    {
        return $this->_id;
    }
	public function getRole()
    {
        return $this->_role;
    }
}
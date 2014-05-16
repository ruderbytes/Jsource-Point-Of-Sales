<?php

class UserIdentity extends CUserIdentity
{
	private $_id;
	
	public function authenticate()
	{
		$username = strtolower($this->username);
		$user = Users::model()->find('level_id = 1 and LOWER(username)=?', array($username));
		if($user===null)
		    $this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($user->password !== md5($this->password))
		   $this->errorCode = self::ERROR_PASSWORD_INVALID;
		else
		{
		    $this->_id = $user->id;
		    $this->username = $user->username;
                    $this->setState('lastLogin', date("Y-m-d H:i:s", strtotime($user->last_login_time)));
                    $user->saveAttributes(array('last_login_time'=>date("Y-m-d H:i:s", time()),
                    ));
		    $this->errorCode = self::ERROR_NONE;
	  	}
	   	return $this->errorCode == self::ERROR_NONE;
	}
	
	public function getId()
	{
		return $this->_id;
	}
}
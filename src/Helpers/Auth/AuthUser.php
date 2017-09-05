<?php

namespace App\Helpers\Auth;

use Cake\Network\Session;
use Cake\ORM\TableRegistry;

class AuthUser
{
	protected $authUser;

	public function __construct()
	{
		$this->_setUserLogged();
	}

	public function get()
	{
		return $this->authUser;
	}

	public function getField($fieldName)
	{
		return $this->authUser[$fieldName];
	}

	protected function _setUserLogged()
	{
		$authUserSession = (new Session())->read('Auth.User');
		if ($authUserSession) {
			//$userData = TableRegistry::get( 'Users' )->get($authUserSession['id']);
			//$authUserSession['message'] = $userData->message;
			$this->authUser = $authUserSession;
		} else {
			$this->authUser = null;
		}
	}
}
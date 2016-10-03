<?php

namespace App\Auth;

use Cake\Auth\FormAuthenticate;
use Cake\Network\Request;
use Cake\Network\Response;
use Cake\ORM\TableRegistry;

class TokenAuthenticate extends FormAuthenticate
{
    public function getUser(Request $request){
    	if(!$request->query('token'))
    		return false;
    	$table = TableRegistry::get($this->_config['userModel']);
    	$user = $table->findByToken($request->query('token'))->first()->toArray();
    	return $user;
    }
}
<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
 	public $components = array(
        'Session',
        /* add Auth component and set  the urls that will be loaded after the login and logout actions is performed */ 
       'Auth' => array(
            'loginRedirect' =>array('controller'=>'Main','action'=>'index'),
            'logoutRedirect' =>'/',
			'loginAction' => '/',
			'authError'=>"Seriously !!! Do you really think that you can access that page ???",
			'authorize'=>array('Controller')
        )
    );
	
	public function isAuthorized($user){
		return true;
	}
	
	public function beforeFilter() {
		
		$this->Auth->allow('login','index');
		$this->set('logged_in',$this->Auth->loggedIn());
		$this->set('current_user',$this->Auth->user());		
		
		$this->Auth->authenticate = array(
  			 AuthComponent::ALL => array(
				'userModel' => 'User',
				'fields' => array(
					'username'=>'email'
					)
			),
	    		'Basic',
	    		'Form'
		);
	} 
}

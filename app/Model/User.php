<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {
	public $name= 'User';
	var $validate = array(
	'name'=>array(
			'fill_all_boxes'=>array(
			'rule'=>'notEmpty',
			'message'=>'Username should be field'
			)	
		),
	'email'=>array(
			'fill_all_boxes'=>array(
			'rule'=>'notEmpty',
			'message'=>'Email id should be field'
			)	
		),
	'password'=>array(
			'fill_all_boxes'=>array(
			'rule'=>'notEmpty',
			'message'=>'Password should be field'
			),
			'Match Passwords'=> array(
				'rule'=>'matchPasswords',
				'message'=>'Your password do not match'
				
			)	
		),
	'password_again'=>array(
			'fill_all_boxes'=>array(
			'rule'=>'notEmpty',
			'message'=>'Plz confirm your password'
			)	
		)
	);

	public function matchPasswords($data){
		
			if($data['password']==$this->data['User']['password_again']){
					return true;
				
				}else{
					$this->invalidate('password_again','your password do not match');
					return false;
					}
		
		}
		
	public function beforeSave($options=array()){
		
			if(isset($this->data['User']['password'])){
							
					$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
				
				}
				return true;		
		}
}

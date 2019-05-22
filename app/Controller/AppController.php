<?php


App::uses('Controller', 'Controller');

class AppController extends Controller {


	public $components = array(
		'Session',
		'Auth'=>array( //Auth blocks all pages unless an user logs in
			'loginAction'=>array(
				'controller'=>'login', //defines the controller. Default is users
			),
			'authenticate'=>array(
				'Form'=>array('userModel'=>'User') //Defines the model: Default is users and default fields are username and password
			)
		)
	);

	public function beforeFilter(){ //Executes before everything (render, etc)
		$this->layout = false; //Didnt want to use layouts
		if ($this->Auth->user()){ //If authenticated, saves username
			$this->set('username',$this->Auth->user('username'));
		}
	}
}

<?php

class SignController extends AppController{

	public $uses = array('User');

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow(); //Allows sign to be accesed without login
	}
	public function index(){
		$this->set('page_title','Registro de usuario');
		if ($this->request->isPost()){

			if ($this->data)
			{
				$data = $this->data;
				if (!$this->User->save($data)) //If doesnt saves the user in the DB with the data from the post
				{
					throw new \Exception("Error Processing Request", 1);
				}
				else
				{
					$this->redirect('/login');
				}

			}
			else{
				$this->set('message','Error al registrarse!');
			}
		}
	}
}


?>

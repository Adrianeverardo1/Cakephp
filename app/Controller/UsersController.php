<?php

class UsersController extends AppController{

	public $paginate = array(
		'order' => array('User.id' => 'ASC'),
		'limit' => 3,
	);

	public function beforeFilter()
	{
		parent::beforeFilter(); //To access the username variable from AppController
	}

	public function index()
	{
		$users = $this->paginate('User');
		$this->set('page_title','Usuarios');
		//$users = $this->User->find('all'); //finds all users
		$this->set('users',$users); //sets all users to be used in view
 	}

 	public function logout(){
		$this->Auth->logout(); //Destroys session
		$this->redirect('/login/login');
 	}

 	public function get_all(){
		//$this->layout = 'ajax';
		if ($this->request->isGet()){
			$users = $this->User->find('all');
			echo json_encode($users);
		}
		else{
			$this->redirect('/users');
		}
	}

	public function search(){
		$query = $this->request->data['datos'];
		$users = $this->User->find('all',array(
			'conditions'=>array(
				'OR'=>array(
					'User.username LIKE'=>'%'.$query.'%',
					'User.email LIKE'=>'%'.$query.'%'
				)
			)
		));
		echo json_encode($users);
	}
}
?>

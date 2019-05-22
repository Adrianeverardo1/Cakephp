<?php

class User extends AppModel{

	public function __construct($id = false, $table=null, $ds = null){ //Model default constructor
		parent::__construct($id,$table,$ds);

		$this->validate = array( //To validate when inserting data
			'username'=>array(
				'rule'=>'alphaNumeric',
				'allowEmpty'=>false,
				'message'=>'Solo letras y numeros.',
			),
			'email'=>'email',
			'password'=>array(
				'rule'=>array('minLength','8'),
				'message'=>'Longitud muy corta.',
			),
		);
	}

	public function beforeSave($options = array()){ //Before saving, encrypts password with cakephp hashing
		if (isset($this->data[$this->alias]['password'])){ //alias = model, in this case User
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
}


?>

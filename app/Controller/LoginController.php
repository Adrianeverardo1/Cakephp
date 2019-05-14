<?php

class LoginController extends AppController{

  public function beforeFilter(){
    parent::beforeFilter();
    $this->loadModel('User'); //Login doesnt have a model so i load one
    $this->Auth->allow('index'); //Allows index to be accesed without login
  }

  public function index(){
    $this->set('page_title','Bienvenido'); //Sets a variable to be used in views
  }

  public function login(){
    $this->set('page_title','Inicio de sesion');
    if ($this->request->isPost()){ //If a post is submitted
      if ($this->Auth->login()){ //if Authenticate is succesful
        $this->redirect('/users'); //go to users controller
      }
      else{
        $this->set('message','Usuario o contraseña incorrecta');
      }

    }
  }


}


 ?>

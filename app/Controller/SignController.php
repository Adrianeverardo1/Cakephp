<?php

class SignController extends AppController{

  public function beforeFilter(){
    parent::beforeFilter();
    $this->loadModel('User');
    $this->Auth->allow(); //Allows sign to be accesed without login
  }
  public function index(){
    $this->set('page_title','Registro de usuario');
    if ($this->request->isPost()){
      try{
        if ($this->User->save($this->request->data)){ //If succesfully saves the user in the DB with the data from the post
          $this->redirect('/login');
        }
        else{
          $this->set('message','Error al registrarse!');
        }
      }
      catch(Exception $e){
        $this->set('message',"Usuario o email ya existentes");
      }

    }
  }


}


 ?>

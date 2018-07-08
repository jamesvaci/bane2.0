<?php

class Users extends Controller{
  public function __construct(){
    $this->userModel = $this->model('User');
  }
  
  public function register(){
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
      $data = array(
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['conf_password']),
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => '',
      );
      
      if(empty($data['email'])){
         $data['email_err'] = 'Please enter email';
      }else{
        if($this->userModel->findUsersEmail($data['email'])){
          echo "Email already used";
        }
      };
      
      if(empty($data['name'])){
        $data['name_err'] = 'Please enter name';
      };
      
      if(strlen($data['password']) < 6){
        $data['password_err'] = 'Password must be at least 6 Characters';
      };
      
      if($data['confirm_password'] != $data['password']){
        $data['confirm_password_err'] = 'Passwords do not match';
      };
      
      if (empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
        echo "success!";
      }else{
        $this->view('pages/register', $data);
      }
    }else {
      $data = array(
        'name' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => '',
      );
    };
    
    $this->view('pages/register',$data);
  }
}

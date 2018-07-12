<?php

class Users extends Controller{
  public function __construct(){
    $this->userModel = $this->model('User');
  }
  
  public function signin(){
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
      $data = array(
        'email' => $_POST['email'], 
        'password' => $_POST['password']
      );
      // Model register user
      if($this->userModel->signin($data)){
        $this->createUserSession($user);
      }else{
        echo "something went wrong";
      };
    }
  }
  
  public function createUserSession($user){
    // $_SESSION['app_id'] = $app_id;
    // $_SESSION['email'] = $app_id;
    // $_SESSION['name'] = $app_id;
  }
  
  public function register(){
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
      $data = array(
        'first_name' => trim($_POST['first_name']),
        'last_name' => trim($_POST['last_name']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['conf_password']),
        'first_name_err' => '',
        'last_name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => '',
        'success' =>'',
      );
      
      if(empty($data['email'])){
         $data['email_err'] = 'Please enter email';
      };
      
      if(empty($data['first_name'])){
        $data['first_name_err'] = 'Please enter first name';
      };
      
      if(empty($data['last_name'])){
        $data['last_name_err'] = 'Please enter last name';
      };
        
      if(strlen($data['password']) < 6){
        $data['password_err'] = 'Password must be at least 6 Characters';
      };
        
      if($data['confirm_password'] != $data['password']){
        $data['confirm_password_err'] = 'Passwords do not match';
      };
      
      if (empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
          if($this->userModel->findUsersEmail($data['email'])){
            echo "Email already used";
          }else{
            if($this->userModel->register($data)){
              $data = array(
                'first_name' => '',
                'last_name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'first_name_err' => '',
                'last_name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
                'success' => 'A conformational mail has been sent to you',
              );
              $this->view('pages/register', $data);
            }else{
              echo "something went wrong";
            };
          };
      }else{
        $this->view('pages/register', $data);
      };
    }else {
      $data = array(
        'first_name' => '',
        'last_name' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'first_name_err' => '',
        'last_name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => '',
        'success' => '',
      );
    };
    
    $this->view('pages/register',$data);
  }
}

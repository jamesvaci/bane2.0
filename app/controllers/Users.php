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
      
      if (empty($_POST['email']) || empty($_POST['password'])) {
        $data = array(
          'email' => $_POST['email'], 
          'password' => $_POST['password'],
          'wrong_pass'=> 'Please fill in both email and password',
          'privlige'=> '',
        );
        $this->view('pages/signin', $data);
      }else{
        if($this->userModel->findUsersEmail($data['email'])){
          $privlige = $this->userModel->signin($data);
          if($privlige == 2){
            $data = array(
            'email' => $_POST['email'], 
            'password' => $_POST['password'],
            'wrong_pass'=> 'A conformational mail has been sent to you when registering, please confirm your email',
            'privlige'=> '',
          );
            $this->view('pages/signin', $data);
          }elseif ($privlige==3) {
            $userSession = $this->userModel->sessionData($data['email']);
            $this->createUserSession($userSession->app_id, $data['email'], $userSession->first_name);
            header("Location: index.php");
          }else{
            $data = array(
              'email' => $_POST['email'], 
              'password' => $_POST['password'],
              'wrong_pass'=> 'Email or password are wrong',
              'privlige'=> '',
            );
            $this->view('pages/signin', $data);
          };
        }else{
          $data = array(
            'email' => $_POST['email'], 
            'password' => $_POST['password'],
            'wrong_pass'=> 'Email or password are wrong',
            'privlige'=> '',
          );
          $this->view('pages/signin', $data);
        }
      }
    }else{
      $data = array(
        'email' => '', 
        'password' => '',
        'wrong_pass'=> '',
        'privlige'=> '',
      );
      $this->view('pages/signin', $data);
    }
  }
  
  public function createUserSession($app_id, $email, $first_name){
    $_SESSION['app_id'] = $app_id;
    $_SESSION['email'] = $email;
    $_SESSION['first_name'] = $first_name;
  }
  
  public function logout(){
    session_unset();
    session_destroy();
    header("Location: index.php");
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
            $data = array(
              'first_name' => trim($_POST['first_name']),
              'last_name' => trim($_POST['last_name']),
              'email' => trim($_POST['email']),
              'password' => trim($_POST['password']),
              'confirm_password' => trim($_POST['conf_password']),
              'email_used' => 'Email has already been used',
            );
            $this->view('pages/register', $data);
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
                'email_used' => '',
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
        'confirm_password' => ''
      );
    };
    
    $this->view('pages/register',$data);
  }
}

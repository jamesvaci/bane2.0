<?php 

class Pages extends Controller{
  public function __construct(){
    $this->postModel = $this->model('Post');
  }
  
  public function index(){
    if(substr($_GET['url'], -3) == '_sr'){
      $this->view('pages/index_sr');
    }else{
      $this->view('pages/index');
    };
  }
  
  public function products(){
    $this->view('pages/products');
  }
  
  public function references(){
    $this->view('pages/references');
  }
  
  public function admin(){
    $this->view('pages/admin');
  }
  
  public function lumino(){
    $this->view('pages/lumino');
  }
  
  public function qa(){
    $this->view('pages/qa');
  }
  
  public function discout(){
    $this->view('pages/discount');
  }
  
  public function contact(){
    $this->view('pages/contact');
  }
  
  public function market(){
    $this->view('pages/market');
  }
  
  public function signin(){
    $this->view('pages/signin');
  }
  
  public function register(){
    $this->view('pages/register');
  }
}

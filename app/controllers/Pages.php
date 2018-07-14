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
  
  public function references(){
    $this->view('pages/references');
  }
  
  public function signin(){
    $this->view('pages/signin');
  }
}

<?php 

class Pages extends Controller{
  public function __construct(){
    $this->postModel = $this->model('Post');
  }
  
  public function index(){
    $posts = $this->postModel->getUsers();
    $this->view('pages/index', array('posts' => $posts));
  }
  
  public function references(){
    $this->view('pages/references');
  }
}

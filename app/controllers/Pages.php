<?php 

class Pages extends Controller{
  public function __construct(){
    $this->postModel = $this->model('Post');
  }
  
  public function index(){
    $this->view('pages/index', array('title' => 'boomchakalaga'));
  }
  
  public function about(){
    echo "This is the About";
  }
}

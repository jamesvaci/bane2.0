<?php

class Admins extends Controller{
  public function __construct(){
    $this->userModel = $this->model('Admin');
    
  }
  
  public function users()
  {
    $data =$this->userModel->getusers();
    // print_r($data);
    $this->view('pages/admin', $data);
  }
  
  public function removeuser()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $this->userModel->removeuser($_POST['app_id']);
    }
  }
  
  public function addproduct()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $time = time();
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = $_POST['img_thumb'];
      
      list($type, $data) = explode(';', $data);
      list(, $data)      = explode(',', $data);
      $data = base64_decode($data);
      
      file_put_contents('/tmp/'.$_POST['product_name'].'-thumbnail-'.$time.'.png', $data);
      
      $data = $_POST['img_full'];
      
      $imgType = "png";
      if (substr($data, 11,4)) {
        $imgType = "jpg";
      }
      
      list($type, $data) = explode(';', $data);
      list(, $data)      = explode(',', $data);
      
      $data = base64_decode($data);
      file_put_contents('/tmp/'.$_POST['product_name'].'-'.$time.'.'.$imgType, $data);
      $this->view('pages/admin');
    }
  }
}

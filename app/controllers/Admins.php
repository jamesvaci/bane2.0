<?php

class Admins extends Controller{
  public function __construct(){
    $this->userModel = $this->model('Admin');
    
  }
  
  public function a_q()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = array('created' => $_POST['created'], 'answer' => $_POST['answer']);
      if ($this->userModel->a_q($data)) {
        $data =$this->userModel->getusers();
        $this->view('pages/admin', $data);
      }else {
        echo "Fail";
      }
    }
  }
  
  public function a_qHidden()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = array('created' => $_POST['hidden_created']);
      if ($this->userModel->a_qHidden($data)) {
        $data =$this->userModel->getusers();
        $this->view('pages/admin', $data);
      }else {
        echo "Fail";
      }
    }
  }
  
  public function users()
  {
    $data =$this->userModel->getusers();
    $this->view('pages/admin', $data);
  }
  
  public function removeuser()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $this->userModel->removeuser($_POST['app_id']);
    }
  }
  
  public function addcategorypic()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $time = time();
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = $_POST['img_thumbCategory'];
      list($type, $data) = explode(';', $data);
      list(, $data)      = explode(',', $data);
      $data = base64_decode($data);
      
      file_put_contents('/tmp/'.$_POST['nameCategory'].'.png', $data);
      rename("/tmp/".$_POST['nameCategory'].".png", "./img/category/".$_POST['nameCategory'].".png");
      header("Location: index.php?url=admins/users");
    }
  }
  
  public function addsubcategorypic()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $time = time();
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = $_POST['img_thumbCategory'];
      
      list($type, $data) = explode(';', $data);
      list(, $data)      = explode(',', $data);
      $data = base64_decode($data);
      
      file_put_contents('./img/category/subcategory/'.$_POST['nameCategory'].'.png', $data);
      header("Location: index.php?url=admins/users");
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
      
      file_put_contents('./img/'.$_POST['product_name'].'-thumbnail-'.$time.'.png', $data);
      
      $data = $_POST['img_full'];
      
      $imgType = "png";
      if (substr($data, 11,4)) {
        $imgType = "jpg";
      }
      
      list($type, $data) = explode(';', $data);
      list(, $data)      = explode(',', $data);
      
      $data = base64_decode($data);
      file_put_contents('./img/'.$_POST['product_name'].'-'.$time.'.'.$imgType, $data);
      $this->view('pages/admin');
    }
  }
}

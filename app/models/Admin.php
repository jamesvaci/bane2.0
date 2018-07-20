<?php 
  class Admin{
    private $db;
    
    public function __construct(){
      $this->db = new Database;
    }
    
    public function getUsers()
    {
      $this->db->query("SELECT * FROM bane_db.bane_users ");
      
      $users = $this->db->resultSet();
      
      $this->db->query("SELECT * FROM bane_db.bane_category ");
        
      $categories = $this->db->resultSet();
      
      $this->db->query("SELECT * FROM bane_db.bane_orders ");
        
      $orders = $this->db->resultSet();
      
      $this->db->query("SELECT * FROM bane_db.bane_qa ");
        
      $qa = $this->db->resultSet();
      
      $this->db->query("SELECT * FROM bane_db.bane_products ");
        
      $products = $this->db->resultSet();
      
      $this->db->query("SELECT * FROM bane_db.bane_comments ");
        
      $comments = $this->db->resultSet();
      
      $this->db->query("SELECT * FROM bane_db.bane_news ");
        
      $news = $this->db->resultSet();
      
      $result = array('Users'=>$users, 'News'=>$news, 'Categories'=>$categories, 'Orders'=>$orders, 'QA'=>$qa, 'Products'=>$products, 'Comments'=>$comments);
      
      return $result;
    }
    
    public function a_q($data)
    {
      $this->db->query("UPDATE bane_db.bane_qa SET answer=:answer WHERE created=:created;");
      $this->db->bind(':created', $data['created']);
      $this->db->bind(':answer', $data['answer']);
      return $this->db->execute();
    }
    
    public function a_qHidden($data)
    {
      $this->db->query("UPDATE bane_db.bane_qa SET hidden = NOT hidden WHERE created=:created;");
      $this->db->bind(':created', $data['created']);
      return $this->db->execute();
    }
    
    public function removeuser($app_id)
    {
      $this->db->query("DELETE FROM bane_db.bane_users WHERE app_id=:app_id;");
      $this->db->bind(':app_id', $app_id);
      $this->db->execute();
    }
  }

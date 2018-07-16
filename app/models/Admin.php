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
    
    public function removeuser($app_id)
    {
      $this->db->query("DELETE FROM bane_db.bane_users WHERE app_id=:app_id;");
      $this->db->bind(':app_id', $app_id);
      $this->db->execute();
    }
  }

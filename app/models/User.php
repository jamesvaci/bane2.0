<?php 
  /**
   * 
   */
  class User
  {
    private $db;
    
    public function __construct()
    {
      $this->db = new Database;
    }
    
    public function findUsersEmail($email)
    {
      $this->db->query('select * from bane_db.bane_users where email =:email');
      $this->db->bind('email', $email);
      
      $row = $this->db->single();
      
      if ($this->db->rowCount()>0) {
        return true;
      }else{
        return false;
      }
    }
  }
  

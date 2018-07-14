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
    
    public function register($data){
      $timestamp = date_timestamp_get(date_create());
      $salt = md5(microtime(false));
      $hash = md5($salt.$data['password']);
      $app_id = $this->gen_uuid();
      $this->db->query('INSERT INTO bane_db.bane_users (app_id, first_name, last_name, email, pass_hash, pass_salt, created) VALUES(:app_id, :first_name, :last_name, :email, :pass_hash, :pass_salt, :created)');
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':first_name', $data['first_name']);
      $this->db->bind(':last_name', $data['last_name']);
      $this->db->bind(':pass_hash', $hash);
      $this->db->bind(':pass_salt', $salt);
      $this->db->bind(':created', $timestamp);
      $this->db->bind(':app_id', $app_id);
      
      if($this->db->execute()){
        return true;
      }else{
        return false;
      }
    }
    
    private function gen_uuid() {
      return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
        mt_rand( 0, 0xffff ),
        mt_rand( 0, 0x0fff ) | 0x4000,
        mt_rand( 0, 0x3fff ) | 0x8000,
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
      );
    }
    
    public function signin($data){
      $this->db->query('SELECT pass_salt, pass_hash, privlige FROM bane_db.bane_users WHERE email = :email');
      $this->db->bind(':email', $data['email']);  
      
      $t = $this->db->single();
      
      if($t->privlige == 0){
        return 2;
      }else{
        if (md5($t->pass_salt.$data['password']) == $t->pass_hash) {
          return 3;
        }else{
          return 4;
        }  
      }
    }
    
    public function sessionData($email){
      $this->db->query('SELECT app_id, first_name FROM bane_db.bane_users WHERE email = :email');
      $this->db->bind(':email', $email);  
      
      $res = $this->db->single();
      
      return $res;
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
  

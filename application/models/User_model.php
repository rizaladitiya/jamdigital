<?php
class User_model extends CI_Model {
 	private $table_name= 'user';
	private $primary_key= 'id';
 	function __construct(){
  		parent::__construct();
 	}
 	function login($user, $password)
 {
   $this -> db -> select('id, user,nama,nim, password');
   $this -> db -> from($this->table_name);
   $this -> db -> where('user', $user);
   $this -> db -> where('password', md5($password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
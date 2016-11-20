<?php
Class User extends CI_Model
{
 function login($username, $password, $level)
 {
   $this -> db -> select('id_user, username, password, level');
   $this -> db -> from('user');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
   $this -> db -> where('level', $level);
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
?>
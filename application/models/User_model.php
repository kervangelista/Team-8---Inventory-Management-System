<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  private $table = 'account_profile';

  public function __construct() {
    parent::__construct();
  }

 public function createUser($data) { 

  if(!$this->checkUsernameIfExist($data['username'])) {

    $data['password'] = md5($data['password']);
  
    $this->db->insert($this->table, $data);
  }
    
  return;
 }

 public function checkUsernameIfExist($username) {
   if (isset($username) && $username != null) {
     $this->db->where('username', $username);
   }
   $query = $this->db->get($this->table);
   $return = $query->result_array();

   if(count($return) > 0) {
     return true;
   }
   return false;
 }

 public function login($username, $password) {
  $this->db->where('username', $username)
           ->where('password', md5($password));

  $query = $this->db->get($this->table);

  $return = $query->result_array();

   if(count($return) > 0) {
     return $return;
   }
   return false;
 }

 public function getUsers($id=null, $status=null) {
   if(isset($id) && $id != null) {
     $this->db->where('user_ID', $id);
   }

   if(isset($status) && $status !=null) {
    $this->db->where('status', $status);
   }

   $query = $this->db->get($this->table);

   return $query->result_array();
 }

 public function updateUser($data) {
   $this->db->where('user_ID', $data['user_ID']);
   unset($data['user_ID']);

   $this->db->update($this->table, $data);
   echo $this->db->last_query();
   exit;
 }

 public function updateUserStatus ($user_ID, $status) {
    $this->db->where('user_ID', $user_ID);

    $data['status'] = $status;

    $this->db->update($this->table, $data);

    return;
  }

}

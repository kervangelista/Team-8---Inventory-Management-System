<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_model extends CI_Model{

function register_credentials($data)
{
    return $this->db->insert("user",$data);
    
}

function login_check($username,$password)
{
    $this->db->where("username",$username);
    if($this->db->get("user")->num_rows() > 0)
    {
        $this->db->select("password");
        $this->db->where("username",$username);
        $pass = $this->db->get("user")->row()->password; 
        if($password == $pass)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

}
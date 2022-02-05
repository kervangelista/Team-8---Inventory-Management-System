<?php

class UModel extends CI_Model {
    function insertuser($data)
    {
        $this->db->insert('db_users',$data); 
    }

    function checkPassword($password,$email)
    {
        $query = $this->db->query("SELECT * FROM db_users WHERE password='$password' AND email='$email' AND status='1'");
        if($query->num_rows()==1)
        {
            return $query->row();
        }
        else
        {
            return false;
        }
    }
}

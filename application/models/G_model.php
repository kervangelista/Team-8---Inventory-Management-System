<?php 

class G_model extends CI_Model {

    function insert_data($data){
        $this->db->insert("supplier", $data);
    }

    function display_data(){
        $query=$this->db->get("supplier");
        return $query;
    }

    function delete_suppliers($supplier_ID)
    {
        $this->db->where('supplier_ID', $supplier_ID);
        $this->db->delete('supplier');

    }
}
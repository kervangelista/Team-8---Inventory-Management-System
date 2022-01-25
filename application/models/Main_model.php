<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	private $table = 'warehouse';

	public function __construct() {
		parent::__construct();
	}

	public function addwarehouse($data) {

	if(!$this->getwarehouseifexists($data['warehousename'])){

		$this->db->insert('warehouse', $data);

		echo $this->db->last_query();
	}
	else{
			echo "warehousename already exists";
	}


	}

	public function getwarehouseifexists($warehousename) {
	if(isset($warehousename) && $warehousename != null) {
		$this->db->where('warehousename', $warehousename);
	}
		$query = $this->db->get($this->table);
		$return = $query->result_array();

		if(count($return) > 0)
			return true;

		return false;
	}

	public function getallwarehouse() {
		$this->db->select('*');
		$this->db->from('warehouse');
		$objquery = $this->db->get();
		return $objquery->result_array();
	}

	public function get_id_wise_register_detail($id) {
        $this->db->select('*');
        $this->db->from('warehouse');	
        $this->db->where('warehouse_ID', $id);
        $objQuery = $this->db->get();
        return $objQuery->result_array();
}

	public function update($editData, $id) {
        $this->db->where('warehouse_ID', $id);

        if ($this->db->update('warehouse', $editData)) {
            return true;
        } else {
            return false;
        }
}
	function delete($id) {

        if ($this->db->delete('warehouse', array('warehouse_ID' => $id))) {
            return true;
        } else {
            return false;
        }
    }

    public function addPO ($PO) {

    	$this->db->insert('purchase_order', $PO);

		echo $this->db->last_query();
    }

    public function getallPO () {
    	$this->db->select('*');
		$this->db->from('purchase_order');
		$objquery = $this->db->get();
		return $objquery->result_array();
    }
}
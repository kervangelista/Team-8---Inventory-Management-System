<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

  private $table = 'products';

  public function __construct() {
    parent::__construct();
  }

  public function addItem ($data) {

    $this->db->insert($this->table, $data);
    return;
  }

  public function getItem ($product_ID = null, $status = null){
    if(isset($product_ID) && $product_ID != null) {
      $this->db->where("product_ID", $product_ID);
    }

    if(isset($status) && $status != null) {
      $this->db->where('status', $status);
    }

    $query = $this->db->get($this->table);

    return $query->result_array();
  }

  public function updateItem ($data) {
    $this->db->where('product_ID', $data['product_ID']);
    unset($data['product_ID']);

    $this->db->update($this->table, $data);

    return;
  }

  public function updateItemStatus ($product_ID, $status) {
    $this->db->where('product_ID', $product_ID);

    $data['status'] = $status;

    $this->db->update($this->table, $data);

    return;
  }
}

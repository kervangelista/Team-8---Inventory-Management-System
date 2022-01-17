<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
    $this->load->model("product_model");

    $items = $this->product_model->getItem(null, "Active");

    $output['items'] = $items;

		$this->load->view('products/getProduct', $output);
	}

  public function viewInactive () {
    $this->load->model("product_model");

    $items = $this->product_model->getItem(null, "Inactive");

    $output['items'] = $items;

		$this->load->view('products/getProduct', $output);

  }

  public function addItem () 
  {
    $data = array();
    $data = $this->input->post();
    if(isset($data) && $data != null) {
      $this->load->model("product_model");

      $this->product_model->addItem($data);
      redirect('/products');
    }
    
    $this->load->view('products/addProduct');
  }

  public function viewItem($product_ID = null) {
    $this->load->model("product_model");

    $item = $this->product_model->getItem($product_ID);

    $output['item'] = $item[0]; 

    $this->load->view("products/viewProduct", $output);
  }

  public function updateItem(){
    $data = array();
    $data = $this->input->post();
    if(isset($data) && $data != null) {
      $this->load->model("product_model");

      $this->product_model->updateItem($data);
    }
    redirect('/products');
  }

  public function updateStatus($product_ID, $status) {
    $this->load->model('product_model');

    $this->product_model->updateItemStatus($product_ID, $status);

    redirect('/products');
  }
  
}

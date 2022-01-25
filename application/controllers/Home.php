<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();	
       $this->load->model('Main_model');
   }


	public function index()
	{
		$arrdata['warehouse_detail'] = $this->Main_model->getallwarehouse();
		$this->load->view('warehouse/Homepage', $arrdata);

		$data = array();
		$data = $this->input->POST();
		if(isset($data) && $data != null){
			$this->load->model('Main_model');
			$this->Main_model->addwarehouse($data);
			redirect('home');
		}
	}

	public function edit($id)
	{
		$arrdata['warehouse_detail'] = $this->Main_model->get_id_wise_register_detail($id);

        if ($this->input->post('btnEdit')) {
            $editData['warehousename'] = $this->input->post('wname');
            $editData['address'] = $this->input->post('add');
			$update = $this->Main_model->update($editData, $id);
            if ($update) {
                redirect('home');
            }
        }	
        $this->load->view('warehouse/editWarehouse', $arrdata);
    }

    public function deleteWarehouse($id) {
        $delete = $this->Main_model->delete($id);
        if ($delete) {
            redirect('home');
        }
    }

    public function createPO() {

    	$POdata['PO_Detail'] = $this->Main_model->getallPO();
		$this->load->view('purchase_order', $POdata);

    	$PO = array();
		$PO = $this->input->POST();
		if(isset($PO) && $PO != null){
			$this->load->model('Main_model');
			$this->Main_model->addPO($PO);
			redirect('home/createPO/');


    }

	}

}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function Supplier()
	{
		$this->load->view('Supplier'); 
	}

	public function list(){
		$this->load->model("g_model");
		$data["display_data"]=$this->g_model->display_data();
		$this->load->view("Supplier_list", $data);
	}

	public function form_validation()
	{
		$this->load->library('form_validation');

        $this->form_validation->set_rules("name","Name","required|alpha");

        $this->form_validation->set_rules("address","Address","required");

        $this->form_validation->set_rules("phone","Phone","required");

        $this->form_validation->set_rules("email","Email","required|alpha");



        if ($this->form_validation->run())

        {

            $this->load->model("g_model");

            $data = array(

                "name" => $this->input->post("name"),

                "address" => $this->input->post("address"),

                "phone" => $this->input->post("phone"),

                "email" => $this->input->post("email")

            );

            $this->g_model->insert_data($data);

            redirect(base_url() . "Welcome/inserted");

        }

        else {

            $this->Supplier();

        }
	}

	public function inserted(){
		$this->list();
	}
}

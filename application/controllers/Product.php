<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
	public function login()
	{
		$this->load->view('login');
	}

    public function login_auth()
    {
         $config_rules = array(
            array (
                "field" => "username",
                "label" => "Username",
                "rules" =>"trim|required", 
            ),
             array(
                "field" => "password",
                "label" => "Password",
                "rules" =>"trim|required",
            ),  
        );
        $this->form_validation->set_rules($config_rules);
        if($this->form_validation->run() == false){

            $this->login(); 
        }
        else{
            $username = $this->input->post("username");
            $password = $this->input->post("password");

            if($this->p_model->login_check($username,$password))
            {
                $this->session->set_userdata("username",$username);
                redirect("product/mainpage");
            }
            else{
                $this->login();
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect("product/login");
    }

    public function register()
	{
		$this->load->view('register');
	}

    public function register_auth()
    {
         $config_rules = array(
            array (
                "field" => "username",
                "label" => "Username",
                "rules" =>"trim|required|is_unique[user.username]",
            ),
             array(
                "field" => "password",
                "label" => "Password",
                "rules" =>"trim|required|min_length[8]|max_length[20]",
            ),   
           
            
        );
        $this->form_validation->set_rules($config_rules);

        if($this->form_validation->run() == false)
        {
            $this->register();
        }
        else
        {
            $username = $this->input->post("username");
            $password = $this->input->post("password");

            $this->p_model->register_credentials(array(
                "username" => $username,
                "password" => $password
            ));
            redirect("product/register");
        }
    }

    public function mainpage()
    {
        if($this->session->userdata("username") != "")
        {
            $this->load->view("mainpage");
        }
        else{
            redirect("product/login");
        }
    }
}

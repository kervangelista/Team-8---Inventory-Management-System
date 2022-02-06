<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index() {
		$this->load->model('user_model');

		$users = $this->user_model->getUsers(null, "Active");
		
		$output['users'] = $users;

		$this->load->view('templates/header');
		$this->load->view('users/getUser', $output);
		$this->load->view('templates/footer');
	}

	public function register()
	{
    $data = array();
    $data = $this->input->post();
    if(isset($data) && $data != null) {
      $this->load->model('user_model');

      $this->user_model->createUser($data);
			redirect('/users/login');

    }

		$this->load->view('users/addUser');
	}

	public function login() {
		$data = array();
    $data = $this->input->post();
    if(isset($data) && $data != null) {
      $this->load->model('user_model');

      $return = $this->user_model->login($data['username'], $data['password']);
			if(is_bool($return)) {
				echo "login error";
			} else {
				print_r($return);
				redirect('/pages/view');
			}

    }
		$this->load->view('users/login');
	}

	public function viewUser($user_ID = null) {
		$this->load->model('user_model');

		$user = $this->user_model->getUsers($user_ID);

		$output['user'] = $user[0];

		
		$this->load->view('templates/header');
		$this->load->view('users/viewUser', $output);
		$this->load->view('templates/footer');
	}

	public function updateStatus($user_ID, $status) {
    $this->load->model('user_model');

    $this->user_model->updateUserStatus($user_ID, $status);

    redirect('/users');
  }

	public function viewInactive () {
    $this->load->model("user_model");

    $users = $this->user_model->getUsers(null, "Inactive");

    $output['users'] = $users;

    $this->load->view('templates/header');
		$this->load->view('users/getUser', $output);
    $this->load->view('templates/footer');

  }

	public function updateUser() {
		$data = array();
    $data = $this->input->post();
    if(isset($data) && $data != null) {
      $this->load->model('user_model');

			print_r($data);
			exit;

			$this->user_model->updateUser($data);

    }
	}
}

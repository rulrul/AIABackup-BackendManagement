<?php

	class Login extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->model('aia_admin_model');
		}
		
		public function index() {
			$this->load->view('content/backend/login');
		}
		
		public function process() {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$date = date('Y-m-d H:i:s');
			
			$result = $this->aia_admin_model->validasi($username, $password);
			
			if(!$result) {
				// Message
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Username or Password is incorrect.</div>');
			
				redirect('login');
			} else {
				$data = array('last_login' => $date);
				$this->aia_admin_model->lastLoginUpdate($username, $data);
				redirect('panel');
			}
		}
		
	}
	
?>

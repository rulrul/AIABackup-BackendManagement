<?php

	class Dbprocessing extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->model('aia_admin_model');
			$this->load->model('aia_client_model');
			$this->load->model('aia_client_header_model');
		}
		
		public function index() {
			redirect('panel');
		}
		
		function addNewAdmin() {
			$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'email' => $this->input->post('email'),
					'first_name' => $this->input->post('firstName'),
					'last_name' => $this->input->post('lastName')
					);
			$this->aia_admin_model->insert($data);
			// Message
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data added successfully.</div>');
			redirect('backend/admin/manageAdmin');
		}
		
		function deleteAdmin() {
			$id = $this->input->get('id');
			$this->aia_admin_model->delete($id);
			// Message
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data deleted successfully.</div>');
			redirect('backend/admin/manageAdmin');
		}
		
		function editAdmin() {
			$id = $this->input->post('id');
			$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'email' => $this->input->post('email'),
					'first_name' => $this->input->post('firstName'),
					'last_name' => $this->input->post('lastName')
					);
			$this->aia_admin_model->update($id, $data);
			// Message
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data updated successfully.</div>');
			redirect('backend/admin/manageAdmin');
		}
		
		function addNewClient() {
			$regDate = date("Y-m-d H:i:s");
			
			$data = array(
					'company' => $this->input->post('company'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'url_host' => $this->input->post('urlHost'),
					'port' => $this->input->post('port'),
					'reg_date' => $regDate
					);
			$this->aia_client_model->insert($data);
			// Message
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data added successfully.</div>');
			redirect('backend/admin/manageClient');
		}
		
		function deleteClient() {
			$id = $this->input->get('id');
			$this->aia_client_model->delete($id);
			// Message
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data deleted successfully.</div>');
			redirect('backend/admin/manageClient');
		}
		
		function editClient() {
			$id = $this->input->post('id');
			$data = array(
					'company' => $this->input->post('company'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'url_host' => $this->input->post('urlHost'),
					'port' => $this->input->post('port')
					);
			$this->aia_client_model->update($id, $data);
			// Message
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data updated successfully.</div>');
			redirect('backend/admin/manageClient');
		}
		
		function addNewHeader() {
		
			$data = array(
					'company' => $this->input->post('company'),
					'username' => $this->input->post('username'),
					'ia' => $this->input->post('ia'),
					'ivr' => $this->input->post('ivr'),
					'im' => $this->input->post('im'),
					'itr' => $this->input->post('itr'),
					'items' => $this->input->post('items'),
					'po' => $this->input->post('po'),
					'so' => $this->input->post('so'),
					'ss' => $this->input->post('ss')
					);
			$this->aia_client_header_model->insert($data);
			// Message
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data added successfully.</div>');
			redirect('backend/admin/manageClientData');
		}
		
		function deleteHeader() {
			$id = $this->input->get('id');
			$this->aia_client_header_model->delete($id);
			// Message
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data deleted successfully.</div>');
			redirect('backend/admin/manageClientData');
		}
		
		function editHeader() {
			$id = $this->input->post('id');
			$data = array(
					'company' => $this->input->post('company'),
					'username' => $this->input->post('username'),
					'ia' => $this->input->post('ia'),
					'ivr' => $this->input->post('ivr'),
					'im' => $this->input->post('im'),
					'itr' => $this->input->post('itr'),
					'items' => $this->input->post('items'),
					'po' => $this->input->post('po'),
					'so' => $this->input->post('so'),
					'ss' => $this->input->post('ss')
					);
			$this->aia_client_header_model->update($id, $data);
			// Message
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data updated successfully.</div>');
			redirect('backend/admin/manageClientData');
		}
		
		function changePass() {
			$username = $this->input->post('username');
			$opassword = $this->input->post('opassword');
			$npassword = $this->input->post('npassword');
			
			$data = array('password' => $npassword);
			
			$checkOldPass = $this->aia_admin_model->checkOldPassword($username, $opassword);
			
			if(($opassword == "") || ($npassword = "")) {
				// Message
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Please fill in all fields.</div>');
				redirect('backend/admin/changePassword');
			} else if(!$checkOldPass) {
				// Message
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Wrong old password.</div>');
				redirect('backend/admin/changePassword');
			} else {
				$this->aia_admin_model->changePassword($username, $data);
				// Message
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password changed successfully.</div>');
				redirect('backend/admin/changePassword');
			}
		}
		
	}
?>

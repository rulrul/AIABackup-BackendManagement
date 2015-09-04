<?php
	
	class Admin extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->session_check();
		}
		
		private function session_check() {
			if(!$this->session->userdata('validated')) {
				redirect('login');
			}
		}
		
		public function logout() {
			$this->session->sess_destroy();
			redirect('login');
		}
		
		public function index() {
			$content['result'] = $this->load->view('content/backend/dashboard','',true);
			
			$data['header'] = $this->load->view('template/backend/header','',true);
			$data['sidebar'] = $this->load->view('template/backend/sidebar','',true);
			$data['content'] = $this->load->view('template/backend/content',$content,true);
			$data['footer'] = $this->load->view('template/backend/footer','',true);
			
			$this->load->view('template/backend',$data);
			
		}
		
		function manageClient() {
			$type = $this->uri->segment(2);
			
			if($type=="addnewclient") {
				$content['result'] = $this->load->view('content/backend/inputclient','',true);
			} else if($type=="editclient") {
				$id = $this->input->get('id');
				$this->load->model('aia_client_model');
				$data['query'] = $this->aia_client_model->findById($id);
				
				$content['result'] = $this->load->view('content/backend/editclient',$data,true);
			} else {
				$this->load->model('aia_client_model');
				$data['query'] = $this->aia_client_model->getAll();
				
				$content['result'] = $this->load->view('content/backend/tableclient',$data,true);
			}
			
			$data['header'] = $this->load->view('template/backend/header','',true);
			$data['sidebar'] = $this->load->view('template/backend/sidebar','',true);
			$data['content'] = $this->load->view('template/backend/content',$content,true);
			$data['footer'] = $this->load->view('template/backend/footer','',true);
			
			$this->load->view('template/backend',$data);
		}
		
		function manageClientData() {
			$type = $this->uri->segment(2);
			
			if($type=="addnewheader") {
				$content['result'] = $this->load->view('content/backend/inputdataheader','',true);
			} else if($type=="editheader") {
				$id = $this->input->get('id');
				$this->load->model('aia_client_header_model');
				$data['query'] = $this->aia_client_header_model->findById($id);
				
				$content['result'] = $this->load->view('content/backend/editdataheader',$data,true);
			} else {
				$this->load->model('aia_client_header_model');
				$data['query'] = $this->aia_client_header_model->getAll();
				
				$content['result'] = $this->load->view('content/backend/tabledata',$data,true);
			}
			
			$data['header'] = $this->load->view('template/backend/header','',true);
			$data['sidebar'] = $this->load->view('template/backend/sidebar','',true);
			$data['content'] = $this->load->view('template/backend/content',$content,true);
			$data['footer'] = $this->load->view('template/backend/footer','',true);
			
			$this->load->view('template/backend',$data);
		}
		
		function manageAdmin() {
			$type = $this->uri->segment(2);
			
			if($type=="addnewadmin") {
				$content['result'] = $this->load->view('content/backend/inputadmin','',true);
			} else if($type=="editadmin") {
				$id = $this->input->get('id');
				$this->load->model('aia_admin_model');
				$data['query'] = $this->aia_admin_model->findById($id);
				
				$content['result'] = $this->load->view('content/backend/editadmin',$data,true);
			} else {
				$this->load->model('aia_admin_model');
				$data['query'] = $this->aia_admin_model->getAll();
				
				$content['result'] = $this->load->view('content/backend/tableadmin',$data,true);
			}
			
			$data['header'] = $this->load->view('template/backend/header','',true);
			$data['sidebar'] = $this->load->view('template/backend/sidebar','',true);
			$data['content'] = $this->load->view('template/backend/content',$content,true);
			$data['footer'] = $this->load->view('template/backend/footer','',true);
			
			$this->load->view('template/backend',$data);
		}
		
		function changePassword() {
			$content['result'] = $this->load->view('content/backend/changepass','',true);
			
			$data['header'] = $this->load->view('template/backend/header','',true);
			$data['sidebar'] = $this->load->view('template/backend/sidebar','',true);
			$data['content'] = $this->load->view('template/backend/content',$content,true);
			$data['footer'] = $this->load->view('template/backend/footer','',true);
			
			$this->load->view('template/backend',$data);
		}
		
	}
	
?>

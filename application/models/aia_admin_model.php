<?php
	
	class Aia_admin_model extends CI_Model {
		
		function validasi($username, $password) {
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get('aia_admin');
			
			if($query->num_rows == 1) {
				
				$row = $query->row();
				$data = array(
						'username' => $row->username,
						'password' => $row->password,
						'email' => $row->email,
						'firstName' => $row->first_name,
						'lastName' => $row->last_name,
						'role' => $row->status,
						'validated' => true
						);
				$this->session->set_userdata($data);
				
				return true;
			}
			
			return false;
		}
		
		function lastLoginUpdate($username, $data) {
			$this->db->where('username', $username);
			$this->db->update('aia_admin', $data);
		}
		
		function getLastLogin($username) {
			$this->db->select('id, username, password, email, first_name, last_name, last_login');
			$this->db->where('username', $username);
			$query = $this->db->get('aia_admin');
			return $query->result();
		}
		
		function changePassword($username, $data) {
			$this->db->where('username', $username);
			$this->db->update('aia_admin', $data);
		}
		
		function checkOldPassword($username, $opassword) {
			$this->db->where('username', $username);
			$this->db->where('password', $opassword);
			$query = $this->db->get('aia_admin');
			
			if($query->num_rows == 1) {
				return true;
			}
			
			return false;
		}
		
		function getAll() {
			$query = $this->db->get('aia_admin');
			return $query->result();
		}
		
		function insert($data) {
			$this->db->insert('aia_admin', $data);
		}
		
		function delete($id) {
			$this->db->where('id', $id);
			$this->db->delete('aia_admin');
		}
		 
		function update($id, $data) {
			$this->db->where('id', $id);
			$this->db->update('aia_admin', $data);
		}
		
		function findById($id) {
			$this->db->select('id, username, password, email, first_name, last_name');
			$this->db->where('id', $id);
			$query = $this->db->get('aia_admin');
			return $query->result();
		}
		
	}
	
?>

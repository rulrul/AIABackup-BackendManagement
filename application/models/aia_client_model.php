<?php

	class Aia_client_model extends CI_Model {
		function getAll() {
			$query = $this->db->get('aia_client');
			return $query->result();
		}
		
		function insert($data) {
			$this->db->insert('aia_client', $data);
		}
		
		function delete($id) {
			$this->db->where('id', $id);
			$this->db->delete('aia_client');
		}
		
		function update($id, $data) {
			$this->db->where('id', $id);
			$this->db->update('aia_client', $data);
		}
		
		function findById($id) {
			$this->db->select('id, company, username, password, url_host, port, reg_date');
			$this->db->where('id', $id);
			$query = $this->db->get('aia_client');
			return $query->result();
		}
		
	}
?>

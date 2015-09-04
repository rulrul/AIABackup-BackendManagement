<?php

	class Aia_client_header_model extends CI_Model {
		function getAll() {
			$query = $this->db->get('aia_client_header');
			return $query->result();
		}
		
		function insert($data) {
			$this->db->insert('aia_client_header', $data);
		}
		
		function delete($id) {
			$this->db->where('id', $id);
			$this->db->delete('aia_client_header');
		}
		
		function update($id, $data) {
			$this->db->where('id', $id);
			$this->db->update('aia_client_header', $data);
		}
		
		function findById($id) {
			$this->db->select('id, company, username, ia, ivr, im, itr, items, po, so, ss');
			$this->db->where('id', $id);
			$query = $this->db->get('aia_client_header');
			return $query->result();
		}
		
	}
?>

<?php
class M_daerah extends CI_Model{

	function get_all_daerah(){
		$hsl=$this->db->query("SELECT * FROM daerah");
		return $hsl;
	}


	function hapus_daerah($kode){
		$hsl=$this->db->query("DELETE FROM daerah where id_daerah='$kode'");
		return $hsl;
	}

	public function add_daerah($data){
			$this->db->insert('daerah', $data);
			return true;
		}

		public function get_daerah_by_id($id){
			$query = $this->db->get_where('daerah', array('id_daerah' => $id));
			return $result = $query->row_array();
		}

		public function edit_daerah($data, $id){
			$this->db->where('id_daerah', $id);
			$this->db->update('daerah', $data);
			return true;
		}

}	
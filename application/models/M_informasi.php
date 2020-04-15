<?php
class M_informasi extends CI_Model{

	function get_all_informasi(){
		$hsl=$this->db->query("SELECT * FROM informasi,daerah where informasi.id_daerah = daerah.id_daerah AND  status = '1' ");
		return $hsl;
	}
	function get_all_informasi2(){
		$hsl=$this->db->query("SELECT * FROM informasi,daerah where informasi.id_daerah = daerah.id_daerah AND  status = '2' ");
		return $hsl;
	}


	function hapus_informasi($kode){
		$hsl=$this->db->query("DELETE FROM informasi where id_informasi='$kode'");
		return $hsl;
	}

	public function add_informasi($data){
			$this->db->insert('informasi', $data);
			return true;
		}

		public function get_informasi_by_id($id){
			$query = $this->db->get_where('informasi', array('id_informasi' => $id));
			return $result = $query->row_array();
		}

		public function edit_informasi($data, $id){
			$this->db->where('id_informasi', $id);
			$this->db->update('informasi', $data);
			return true;
		}

}	
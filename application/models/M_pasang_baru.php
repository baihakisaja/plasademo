<?php
class M_pasang_baru extends CI_Model{

	function get_all_pasang_baru(){
		$hsl=$this->db->query("SELECT * FROM pasang_baru,daerah where pasang_baru.id_daerah = daerah.id_daerah AND  status = '1' ");
		return $hsl;
	}
	function get_all_pasang_baru2(){
		$hsl=$this->db->query("SELECT * FROM pasang_baru,daerah where pasang_baru.id_daerah = daerah.id_daerah AND  status = '2' ");
		return $hsl;
	}


	function hapus_pasang_baru($kode){
		$hsl=$this->db->query("DELETE FROM pasang_baru where id_pasang_baru='$kode'");
		return $hsl;
	}

	public function add_pasang_baru($data){
			$this->db->insert('pasang_baru', $data);
			return true;
		}

		public function get_pasang_baru_by_id($id){
			$query = $this->db->get_where('pasang_baru', array('id_pasang_baru' => $id));
			return $result = $query->row_array();
		}

		public function edit_pasang_baru($data, $id){
			$this->db->where('id_pasang_baru', $id);
			$this->db->update('pasang_baru', $data);
			return true;
		}

}	
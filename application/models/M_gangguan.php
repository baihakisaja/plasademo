<?php
class M_gangguan extends CI_Model{

	function get_all_gangguan(){
		$hsl=$this->db->query("SELECT * FROM gangguan,daerah where gangguan.id_daerah = daerah.id_daerah AND  status = '1' ");
		return $hsl;
	}
	function get_all_gangguan2(){
		$hsl=$this->db->query("SELECT * FROM gangguan,daerah where gangguan.id_daerah = daerah.id_daerah AND  status = '2' ");
		return $hsl;
	}


	function hapus_gangguan($kode){
		$hsl=$this->db->query("DELETE FROM gangguan where id_gangguan='$kode'");
		return $hsl;
	}

	public function add_gangguan($data){
			$this->db->insert('gangguan', $data);
			return true;
		}

		public function get_gangguan_by_id($id){
			$query = $this->db->get_where('gangguan', array('id_gangguan' => $id));
			return $result = $query->row_array();
		}

		public function edit_gangguan($data, $id){
			$this->db->where('id_gangguan', $id);
			$this->db->update('gangguan', $data);
			return true;
		}

}	
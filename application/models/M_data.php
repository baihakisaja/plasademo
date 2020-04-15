<?php

class M_data extends CI_Model{
	

    public function hitung_regis(){
			$query = $this->db->query("SELECT * FROM pasang_baru,daerah where pasang_baru.id_daerah = daerah.id_daerah AND  status = '1'");
			$total = $query->num_rows();
			return $total;
		}
	public function hitung_gangguan(){
			$query = $this->db->query("SELECT * FROM gangguan,daerah where gangguan.id_daerah = daerah.id_daerah AND  status = '1'");
			$total = $query->num_rows();
			return $total;
		}
	public function hitung_informasi(){
			$query = $this->db->query("SELECT * FROM informasi,daerah where informasi.id_daerah = daerah.id_daerah AND  status = '1'");
			$total = $query->num_rows();
			return $total;
		}



}
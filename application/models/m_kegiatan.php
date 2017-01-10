<?php 

class M_kegiatan extends CI_Model
{
	function tampil_kegiatan(){
		return $this->db->get('kegiatan');
	}

		function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update_data(){
		return $this->db->get('kegiatan');
	}

	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

}
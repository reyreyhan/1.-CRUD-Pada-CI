<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class m_data extends CI_Model{

	function tampil_data(){
		return $this->db->get('mahasiswa');
	}

	function jumlah_data(){
		return $this->db->get('mahasiswa')->num_rows();
	}

	function input_data($data,$mahasiswa){
		$this->db->insert($mahasiswa,$data);
	}

	function update_data(){
		return $this->db->get('mahasiswa');
	}

	function hapus_data($where,$mahasiswa){
		$this->db->where($where);
		$this->db->delete($mahasiswa);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function u_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	


}

?>
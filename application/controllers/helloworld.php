<?php

defined ('BASEPATH') OR exit('No direct script access allowed');

class helloworld extends CI_Controller {

	function __construct(){
		parent::__construct();		
			$this->load->model('m_data');
          	$this->load->helper('url');
          	$this->load->helper('form');
            $this->gallery_path = realpath(APPPATH . '../foto/');
            $this->gallery_path_url = 'http://localhost:8080/CI/foto/';
	}

	public function index() {
		
		$data['tes'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);

	}

	//input data

	function tambah(){
		$this->load->view('v_input');
	}

	function mlebu(){

		$config = array(
            'allowed_types' => 'jpg|jpeg|gif|png',
            'upload_path' => $this->gallery_path,
            'max_size' => 2000,
        	'file_name' => url_title($this->input->post('file_upload'))
        );

        $this->load->library('upload', $config);
        $this->upload->do_upload();
		
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jurusan = $this->input->post('jurusan');
		$foto = $this->input->post('foto');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'jurusan' => $jurusan,
			'foto' => $foto
			);

		$this->m_data->input_data($data,'mahasiswa');
		redirect('../');
	}

	//hapus

	function hapus($del_no){
		$where = array('no_induk' => $del_no);
		$this->m_data->hapus_data($where,'mahasiswa');
		redirect('../');
	}

	//edit

	function edit($e_no){
		$where = array('no_induk' => $e_no);
		$data['ndelok'] = $this->m_data->edit_data($where,'mahasiswa')->result();
		$this->load->view('v_edit',$data);
	}

	function apdet(){
		$A = $this->input->post('no_induk');
		$B = $this->input->post('nama');
		$C = $this->input->post('alamat');
		$D = $this->input->post('jurusan');

		$data = array(
			'nama' => $B,
			'alamat' => $C,
			'jurusan' => $D
		);

		$where = array(
			'no_induk' => $A
		);

		$this->m_data->u_data($where,$data,'mahasiswa');
		redirect('../');
	}

	public function fungsi() {
		echo "Function fungsi dari Controller helloworld";
	}

	public function parameter($nama) {
		echo "Selamat Datang " .$nama;
	}

	public function coba($coba) {
		echo "Tes " .$coba;
	}

}

?>
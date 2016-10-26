<?php

defined ('BASEPATH') OR exit('No direct script access allowed');

class helloworld extends CI_Controller {

	function __construct(){
		parent::__construct();		
			$this->load->model('m_data');
          	$this->load->helper('url');
	}

	public function index() {
		/*$sembarang = array(
				'nama'	=> "Reyhan",
				'alamat' => "Sidoarjo",
				'kampus'	=> "PENS"
			);*/
		//echo "Index dari Controller helloworld";
		//
			/*$sembarang = $this->db->query("SELECT * FROM mahasiswa");
				foreach ($sembarang->result_array() as $ndelok) {
					echo "Nama : " .$ndelok['nama'] ."<br>";
					echo "Alamat : " .$ndelok['alamat'] ."<hr>";
					# code...
				} */


		/*$this->load->model('mymodel');
		$data = $this->mymodel->GetMahasiswa();*/
		
		$data['tes'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);

		/*foreach ($data as $mahasiswa) {
			echo "Nama : ".$mahasiswa['nama']."<br/>";
			echo "Alamat : ".$mahasiswa['alamat']."<hr/>";
			# code...
		}  */


		//$this->load->view('data_mahasiswa', $data);

	}

	//input data

	function tambah(){
		$this->load->view('v_input');
	}

	function mlebu(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jurusan = $this->input->post('jurusan');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'jurusan' => $jurusan
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
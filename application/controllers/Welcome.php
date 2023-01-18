<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login()
	{
		$data['jurusan'] = "RPL";
		$data['kelas'] = '12';
		$this->load->view('login', $data);
	}

	public function home(){
		echo "ini home";
	}

	public function tambah(){
		$this->load->view('siswa/TambahSiswa');
	}

	public function getSiswa(){
		// menampilkan semua data di table siswa
		$data['siswa'] = $this->db->get('siswa')->result_array();

		$this->load->view('siswa/index', $data);
	}

	public function getDetailSiswa($id){
		$this->db->where('id', $id);
		$data['siswa'] = $this->db->get('siswa')->row_array();
		// var_dump($data['siswa']);
		// die();
		$this->load->view('siswa/DetailSiswa', $data);

	}

	function insertSiswa(){
		// masukan data ke dalam tabel siswa
		$data = array(
			'username' => $this->input->post('inputUsername'),
			'nama' => $this->input->post('inputNama'),
			'password' => $this->input->post('inputPassword')
		);
	
		$this->db->insert('siswa', $data);
		redirect('welcome/getSiswa');
		
	}

	function hapusSiswa($id){
		$this->db->where('id', $id);
		$this->db->delete('siswa');

		redirect('welcome/getSiswa');
	}
}

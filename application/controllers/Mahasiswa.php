<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('M_fakultas');
		$this->load->model('M_jurusan');
		$this->load->model('M_student');
	}

	public function index(){
		$data['content'] = 'mahasiswa_show';
		$data['mahasiswa'] = $this->M_student->getstudent()->result();
		$this->load->view('admin', $data);
	}

	public function add(){
		$data['content'] = 'mahasiswa_add';
		$data['jurusan'] = $this->M_jurusan->getjurusan()->result();
		$data['fakultas'] = $this->M_fakultas->getfakultas()->result();
		$this->load->view('admin', $data);
	}

	public function edit($id){
		$data['content'] = 'mahasiswa_edit';
		$data['jurusan'] = $this->M_jurusan->getjurusan()->result();
		$data['fakultas'] = $this->M_fakultas->getfakultas()->result();
		$kondisi = array(
			'a.id' => $id
		);
		$data['mahasiswa'] = $this->M_student->getstudent($kondisi)->row();
		$this->load->view('admin', $data);
	}

	public function save(){
		$data = $this->input->post();

		$save = $this->M_student->savestudent($data);
		redirect('mahasiswa');
	}

	public function update(){
		$data = $this->input->post();

		$save = $this->M_student->updatestudent($data['id'], $data);
		redirect('mahasiswa');
	}

	public function delete($id){
		$this->M_student->deletestudent($id);
		redirect('mahasiswa');
	}

}

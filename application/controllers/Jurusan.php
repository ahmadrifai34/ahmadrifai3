<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('M_jurusan');
		$this->load->model('M_fakultas');
	}

	public function index(){
		$data['content'] = 'jurusan_show';
		$data['jurusan'] = $this->M_jurusan->getjurusan()->result();
		$this->load->view('admin', $data);
	}

	public function add(){
		$data['content'] = 'jurusan_add';
		$data['fakultas'] = $this->M_fakultas->getfakultas()->result();
		$this->load->view('admin', $data);
	}

	public function edit($id){
		$data['content'] = 'jurusan_edit';
		$kondisi = array(
			'jurusan.id' => $id
		);
		$data['jurusan'] = $this->M_jurusan->getjurusan($kondisi)->row();
		$data['fakultas'] = $this->M_fakultas->getfakultas()->result();

		$this->load->view('admin', $data);
	}

	public function save(){
		$data = $this->input->post();

		$save = $this->M_jurusan->savejurusan($data);
		redirect('jurusan');
	}

	public function update(){
		$data = $this->input->post();

		$save = $this->M_jurusan->updatejurusan($data['id'], $data);
		redirect('jurusan');
	}

	public function delete($id){
		$this->M_jurusan->deletejurusan($id);
		redirect('jurusan');
	}

}

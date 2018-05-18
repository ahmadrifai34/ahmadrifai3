<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fakultas extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('M_fakultas');
	}

	public function index(){
		$data['content'] = 'fakultas_show';
		$data['fakultas'] = $this->M_fakultas->getfakultas()->result();
		$this->load->view('admin', $data);
	}

	public function add(){
		$data['content'] = 'fakultas_add';
		$this->load->view('admin', $data);
	}

	public function edit($id){
		$data['content'] = 'fakultas_edit';
		$kondisi = array(
			'id' => $id
		);
		$data['fakultas'] = $this->M_fakultas->getfakultas($kondisi)->row();
		$this->load->view('admin', $data);
	}

	public function save(){
		$data = $this->input->post();

		$save = $this->M_fakultas->savefakultas($data);
		redirect('fakultas');
	}

	public function update(){
		$data = $this->input->post();

		$save = $this->M_fakultas->updatefakultas($data['id'], $data);
		redirect('fakultas');
	}

	public function delete($id){
		$this->M_fakultas->deletefakultas($id);
		redirect('fakultas');
	}

}

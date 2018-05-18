<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurusan extends CI_Model {

	public function getjurusan($where = NULL){
        if($where != NULL){
            $this->db->where($where);
        }

        $this->db->select('jurusan.*, fakultas.name as fakultas_name');
        $this->db->join('fakultas', 'fakultas.id = jurusan.fakultas_id');
        $q = $this->db->get('jurusan');

        return $q;
    }

    public function savejurusan($data){
        $this->db->insert('jurusan', $data);

        return true;
    }

    public function updatejurusan($id, $data){
        $this->db->where('id', $id);
        $this->db->update('jurusan', $data);

        return true;
    }

    public function deletejurusan($id){
        $this->db->where('id', $id);
        $this->db->delete('jurusan');

        return true;
    }
}

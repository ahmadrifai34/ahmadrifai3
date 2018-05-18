<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_student extends CI_Model {

	public function getstudent($where = NULL){
        if($where != NULL){
            $this->db->where($where);
        }

        $this->db->select('a.* , b.name as jurusan, c.name as fakultas');
        $this->db->join('fakultas c', 'a.fakultas_id = c.id');
        $this->db->join('jurusan b', 'a.jurusan_id = b.id');
        $q = $this->db->get('student a');

        return $q;
    }

    public function savestudent($data){
        $this->db->insert('student', $data);

        return true;
    }

    public function updatestudent($id, $data){
        $this->db->where('id', $id);
        $this->db->update('student', $data);

        return true;
    }

    public function deletestudent($id){
        $this->db->where('id', $id);
        $this->db->delete('student');

        return true;
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fakultas extends CI_Model {

	public function getfakultas($where = NULL){
        if($where != NULL){
            $this->db->where($where);
        }

        $q = $this->db->get('fakultas');

        return $q;
    }

    public function savefakultas($data){
        $this->db->insert('fakultas', $data);

        return true;
    }

    public function updatefakultas($id, $data){
        $this->db->where('id', $id);
        $this->db->update('fakultas', $data);

        return true;
    }

    public function deletefakultas($id){
        $this->db->where('id', $id);
        $this->db->delete('fakultas');

        return true;
    }
}

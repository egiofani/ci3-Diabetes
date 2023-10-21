<?php

class Diagnosa_M extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    function tampil() {
        return $this->db->get('tbl_diagnosa')->result();
    }

    function insert_pasien($data) {
        $data = array(
            'diagnosa' => $data['diagnosa'],      
    );
    $this->db->insert('tbl_diagnosa', $data);
    }

    function delete($where,$table)  {
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    function ubah($data,$id) {
        $this->db->update('tbl_diagnosa', $data,["idDiagnosa" => $id]);
    }
    
    function get_one($id)
    {
        return $this->db->get_where('tbl_diagnosa', array('idDiagnosa' => $id))->result();
    }


}
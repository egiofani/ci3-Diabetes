<?php

class Diabetes_M extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    function tampil() {
        // return $this->db->get('egio_diabetes')->result();
        $this->db->select('*');
        $this->db->from('egio_diabetes');
        $this->db->join('tbl_diagnosa', 'egio_diabetes.idDiagnosa = tbl_diagnosa.idDiagnosa');
        $query = $this->db->get();

        return $query->result();
    }

    function insert_pasien($data) {
    //     $data = array(
    //         'nama' => $data['nama'],
    //         'umur' => $data['umur'],
    //         'jenisKelamin' =>$data['jenisKelamin'] ,
    //         'tinggi' =>$data[ 'tinggi'],
    //         'berat' => $data['berat'],
    //         'tekananDarah' => $data['tekananDarah'],
    //         'gula' =>$data['gula'],
    //         'diagnosis' =>$data['diagnosis'] ,      
    // );
    $this->db->insert('egio_diabetes', $data);
    return $this->db->affected_rows();
    }

    function delete($where,$table)  {
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    function ubah($data,$id) {
        $this->db->update('egio_diabetes', $data,["IdPasien" => $id]);
    }
    
    function get_one($IdPasien)
    {
        return $this->db->get_where('egio_diabetes', array('IdPasien' => $IdPasien))->result();
    }

    function get_diagnosa() {
        return $this->db->get('tbl_diagnosa')->result();
    }

}
<?php

class Diabetes extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('Diabetes_M');
        //$this->load->model('Diagnosa_M');
    }

    function index() {
        $data['pasien'] = $this->Diabetes_M->tampil();
        $this->load->view('sidebar');
        $this->load->view('home',$data);
    }

    function home() {
        $data['pasien'] = $this->Diabetes_M->tampil();
        $this->load->view('sidebar');
        $this->load->view('home',$data);
    }

    function form() {
        $data['diagnosa'] = $this->Diabetes_M->get_diagnosa();
        $this->load->view('sidebar');
        $this->load->view('tambah',$data);
    }

    function insert()  {
        if ($this->input->post()) {
            $data_input_user = $this->input->post();
            $this->Diabetes_M->insert_pasien($data_input_user);
            redirect('diabetes');
        } else {
            $this->load->view('sidebar');
            $this->load->view('tambah');

        }
    }

    function hapus($IdPasien){
        $where = array('IdPasien' => $IdPasien);
        $this->Diabetes_M->delete($where,'egio_diabetes');
        redirect('diabetes');
    }

    public function update($IdPasien = null)
    {
        if ($this->input->post()) {
            $id = $this->input->post('IdPasien');
            $update_data = array(
                'nama' => $this->input->post('nama'),
                'umur' => $this->input->post('umur'),
                'jenisKelamin' =>$this->input->post('jenisKelamin') ,
                'tinggi' =>$this->input->post( 'tinggi'),
                'berat' => $this->input->post('berat'),
                'tekananDarah' => $this->input->post('tekananDarah'),
                'gula' =>$this->input->post('gula'),
                'idDiagnosa' =>$this->input->post('idDiagnosa') 
                
        );
            $this->Diabetes_M->ubah($update_data,$id);
            redirect('diabetes');
        } else {            
            $data['diagnosa'] = $this->Diabetes_M->get_diagnosa();
            $data['pasien'] = $this->Diabetes_M->get_one($IdPasien);
            $this->load->view('sidebar');
            $this->load->view('update', $data);
        }
    }
}

?>
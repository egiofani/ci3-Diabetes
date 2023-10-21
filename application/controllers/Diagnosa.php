<?php

class Diagnosa extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('Diagnosa_M');
    }

    function index() {
        $data['diagnosa'] = $this->Diagnosa_M->tampil();
        $this->load->view('sidebar');
        $this->load->view('diagnosa/diagnosa_v',$data);
    }

    // function home() {
    //     $data['pasien'] = $this->Diagnosa_M->tampil();
    //     $this->load->view('sidebar');
    //     $this->load->view('home',$data);
    // }

    function form() {
        $data['diagnosa'] = $this->Diagnosa_M->tampil();
        $this->load->view('sidebar');
        $this->load->view('diagnosa/tambah_v',$data);
    }

    function insert()  {
        if ($this->input->post()) {
            $data_input_user = $this->input->post();
            $result = $this->Diagnosa_M->insert_pasien($data_input_user);
            if ($result > 0) {
                //sukses
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Success! Data berhasil disimpan
            </div>
            ');
            } else {
                //err
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Error! Data gagal disimpan
            </div>
            ');
            }
            redirect('diagnosa');
        } else {
            $this->load->view('sidebar');
            $this->load->view('diagnosa/tambah_v');

        }
    }

    function hapus($id){
        $where = array('idDiagnosa' => $id);
        $this->Diagnosa_M->delete($where,'tbl_diagnosa');
        redirect('diagnosa');
    }

    public function update($idDiagnosa = null)
    {
        if ($this->input->post()) {
            $id = $this->input->post('idDiagnosa');
            $update_data = array(
                'diagnosa' => $this->input->post('diagnosa'),                
        );
            $this->Diagnosa_M->ubah($update_data,$id);
            redirect('diagnosa');
        } else {
            $data['diagnosa'] = $this->Diagnosa_M->get_one($idDiagnosa);
            $this->load->view('sidebar');
            $this->load->view('diagnosa/update_v', $data);
        }
    }
}

?>
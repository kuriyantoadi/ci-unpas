<?php

class Mahasiswa extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');

    }

    public function index(){

        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['judul'] = 'Data Mahasiswa';
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Mahasiswa';


        //validasi inputan      
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('npm','NPM','required|numeric');
        $this->form_validation->set_rules('email','Email','required|valid_email');


        if ( $this->form_validation->run() == FALSE ) {
            $data['judul'] = 'Form Tambah Data Mahasiswa';
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('template/footer');
        } else {
            echo "berhasil";
        }


    }

}

?>

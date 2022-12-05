<?php

class Siswa extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        // $this->load->library('form_validation');
        // $this->load->model('Auth_model'); Sudah Autoload jadi tidak perlu load model lagi

    }

    public function index()
    {
        $data['judul'] = 'Page Siswa';
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Siswa';
        $data['jurusan'] = ['TKJ', 'TR', 'RPL'];

        // Form Rules
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'Nis', 'required|max_length[11]|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header',$data);    
            $this->load->view('siswa/input', $data);    
            $this->load->view('templates/footer');    
        }else{
            $this->Siswa_model->tambahDataSiswa();
            $this->session->set_flashdata('flash', 'Ditambah' );
            redirect('Siswa');
        }
    }

    public function hapus($id)
    {
        $this->Siswa_model->hapusDataSiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Siswa');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Siswa';
        $data['siswa'] = $this->Siswa_model->getSiswaById($id);
        
        $this->load->view('templates/header', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['judul'] = 'Form Update Data Siswa';
        $data['siswa'] = $this->Siswa_model->getSiswaById($id);
        $data['jurusan'] = ['TKJ', 'TR', 'RPL'];

        // Form Rules
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'Nis', 'required|max_length[11]|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header',$data);    
            $this->load->view('siswa/update', $data);    
            $this->load->view('templates/footer');    
        }else{
            $this->Siswa_model->updateDataSiswa();
            $this->session->set_flashdata('flash', 'Diupdate' );
            redirect('Siswa');
        }
    }


}
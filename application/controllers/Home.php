<?php

class Home extends CI_Controller {
    public function index($nama = '')
    {
        $data['nama'] = $nama; 
        $data['judul'] = 'Home Page';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
    
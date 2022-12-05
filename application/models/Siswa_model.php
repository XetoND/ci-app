<?php 

class Siswa_model extends CI_Model{

    public function getAllSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function tambahDataSiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nis" => $this->input->post('nis', true),
            "jurusan" => $this->input->post('jurusan', true),
            "alamat" => $this->input->post('alamat', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true)
        ];

        $this->db->insert('siswa', $data);
    }

    public function hapusDataSiswa($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('siswa', ['id' => $id]);
    }

    public function getSiswaById($id)
    {
        return $this->db->get_where('siswa', ['id' => $id])->row_array();
    }

    public function updateDataSiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nis" => $this->input->post('nis', true),
            "jurusan" => $this->input->post('jurusan', true),
            "alamat" => $this->input->post('alamat', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('siswa', $data);
    }
}
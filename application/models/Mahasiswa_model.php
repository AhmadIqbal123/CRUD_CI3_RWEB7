<?php
class Mahasiswa_model extends CI_model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }
    public function tambahDataMahasiswa()
    {
        $data = [
            "nim" => $this->input->post('nim', true),
            "nama" => $this->input->post('nama', true),
            "angkatan" => $this->input->post('angkatan', true),
            "alamat" => $this->input->post('alamat', true)
        ];
        $this->db->insert('mahasiswa', $data);
    }
    public function hapusDataMahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }
    public function ubahDataMahasiswa()
    {
        $data = [
            "nim" => $this->input->post('nim', true),
            "nama" => $this->input->post('nama', true),
            "angkatan" => $this->input->post('angkatan', true),
            "alamat" => $this->input->post('alamat', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }
}

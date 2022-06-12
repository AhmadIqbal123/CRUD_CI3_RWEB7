<?php
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index');
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data';
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('template/footer');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa');
        }
    }
    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }
    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('mahasiswa');
        }
    }
}

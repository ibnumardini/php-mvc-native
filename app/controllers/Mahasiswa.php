<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templetes/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templetes/footer');
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templetes/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templetes/footer');
    }
    public function tambah()
    {
        $query = $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST);
        if ($query = 1) {
            header('Location:' . BASE_URL . '/mahasiswa');
            exit;
        } else {
            echo "Gagal di tambahkan";
        }
    }
}

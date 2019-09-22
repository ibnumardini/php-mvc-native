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
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASE_URL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASE_URL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        $query = $this->model('Mahasiswa_model')->hapusDataMahasiswa($id);
        if ($query = 1) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASE_URL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASE_URL . '/mahasiswa');
            exit;
        }
    }
    public function ubah()
    {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    public function ubahData()
    {
        $query = $this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST);
        if ($query = 1) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location:' . BASE_URL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location:' . BASE_URL . '/mahasiswa');
            exit;
        }
    }
    public function cari()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('templetes/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templetes/footer');
    }
}

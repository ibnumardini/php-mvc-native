<?php

class About extends Controller
{
    public function index($nama = 'Fatkur', $pekerjaan = 'Engginer')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About';

        $this->view('templetes/header', $data);
        $this->view('about/index', $data);
        $this->view('templetes/footer');
    }

    public function page()

    {
        $data['judul'] = 'Page';
        $this->view('templetes/header', $data);
        $this->view('about/page');
        $this->view('templetes/footer');
    }
}

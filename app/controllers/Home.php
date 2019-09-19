<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getuser();
        $this->view('templetes/header', $data);
        $this->view('home/index', $data);
        $this->view('templetes/footer');
    } 
}

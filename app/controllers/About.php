<?php

class About extends Controller
{
    public function index($nama = 'Bela', $pekerjaan = 'Mahasiswa', $umur = 20)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['title'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['title'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}

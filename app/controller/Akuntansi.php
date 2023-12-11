<?php
class Akuntansi Extends Controller
{
    public function index()
    {
        $data['judul'] = "Rekayasa Perangkat Lunak";
        $this->view('templates/header', $data);
        $this->view('akuntansi/index', $data);
        $this->view('templates/footer');
    }
}
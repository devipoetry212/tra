<?php
class TKP Extends Controller
{
    public function index()
    {
        $data['judul'] = "TKP";
        $this->view('templates/header', $data);
        $this->view('tkp/index', $data);
        $this->view('templates/footer');
    }
}
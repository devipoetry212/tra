<?php
class TPTU Extends Controller
{
    public function index()
    {
        $data['judul'] = "TPTU";
        $this->view('templates/header', $data);
        $this->view('tptu/index', $data);
        $this->view('templates/footer');
    }
}
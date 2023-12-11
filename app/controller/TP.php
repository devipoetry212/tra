<?php
class TP Extends Controller
{
    public function index()
    {
        $data['judul'] = "TP";
        $this->view('templates/header', $data);
        $this->view('tp/index', $data);
        $this->view('templates/footer');
    }
}
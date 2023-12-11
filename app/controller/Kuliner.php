<?php
class Kuliner Extends Controller
{
    public function index()
    {
        $data['judul'] = "Kuliner";
        $this->view('templates/header', $data);
        $this->view('kuliner/index', $data);
        $this->view('templates/footer');
    }
}
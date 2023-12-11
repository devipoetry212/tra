<?php
class RPL Extends Controller
{
    public function index()
    {
        $data['judul'] = "RPL";
        $this->view('templates/header', $data);
        $this->view('rpl/index', $data);
        $this->view('templates/footer');
    }
}
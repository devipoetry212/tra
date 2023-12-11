<?php
class DPIB Extends Controller
{
    public function index()
    {
        $data['judul'] = "DPIB";
        $this->view('templates/header', $data);
        $this->view('dpib/index', $data);
        $this->view('templates/footer');
    }
}
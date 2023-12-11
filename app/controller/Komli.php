<?php
class Komli Extends Controller
{
    public function index()
    {
        $data['judul'] = "Kompetensi Keahlian";
        $data['komli'] = $this->model("Komli_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('komli/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Komli";
        $data['komli'] = $this->model("Komli_model")->getBlogById($id);
        $this->view('templates/header', $data);
        $this->view('komli/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Komli_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/komli');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/komli');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Komli_model')->hapusDataKomli($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/komli');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/komli');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model(Komli_model)->getBlogById($_POST));
    }

    public function ubah()
    {
        if($this->model('Komli_model')->ubahDataKomli($data) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/komli');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/komli');
            exit;
        }
    }
}
?>
<?php
class Guru_model
{
    private $table = 'guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBlog()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }
    public function getBlogById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahData()
    {
        $query = " INSERT INTO guru (nama,mapel,kode_guru )VALUES (:nama, :mapel, :kode_guru )";
        $this->db->query($query);
        $this->db->bind('nama', $_POST['nama']);
        $this->db->bind('mapel', $_POST['mapel']);
        $this->db->bind('kode_guru', $_POST['kode_guru']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusData($id)
    {
        $query = "DELETE FROM guru WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahData($data)
    {
        $query = "UPDATE guru SET
            nama = :nama,
            mapel = :mapel,
            kode_guru = :kode_guru
            WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('mapel', $data['mapel']);
    $this->db->bind('kode_guru', $data['kode_guru']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();

    return $this->db->rowCount();
    }
}
?>
<?php
class Komli_model
{
    private $table = 'komli';
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
        $query = " INSERT INTO komli (nama, keterangan )VALUES (:nama, :keterangan )";
        $this->db->query($query);
        $this->db->bind('nama', $_POST['nama']);
        $this->db->bind('keterangan', $_POST['keterangan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataKomli($id)
    {
        $query = "DELETE FROM komli WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataKomli($data)
    {
        $query = "UPDATE komli SET
            nama = :nama,
            keterangan = :keterangan
            WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('keterangan', $data['keterangan']);
    $this->db->bind('id', $data['id']);
    $this->db->execute();

    return $this->db->rowCount();
    }
}
?>
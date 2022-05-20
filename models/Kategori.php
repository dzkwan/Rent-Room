<?php
class Kategori{
    public $koneksi;

    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function getAll(){
        $sql = "SELECT * FROM kategori_ruangan";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO kategori_ruangan (nama,keterangan) VALUES (?,?)";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getKategori($id){
        $sql = "SELECT * FROM kategori_ruangan WHERE id = ?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function ubah($data){
        $sql = "UPDATE kategori_ruangan SET nama=?, keterangan=? WHERE id=?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data){
        $sql = "DELETE FROM kategori_ruangan WHERE id=?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
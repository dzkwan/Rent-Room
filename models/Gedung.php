<?php
class Gedung{
    public $koneksi;

    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function getAll(){
        $sql = "SELECT * FROM gedung";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO gedung (kode,nama,alamat) VALUES (?,?,?)";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getGedung($id){
        $sql = "SELECT * FROM gedung WHERE id = ?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function ubah($data){
        $sql = "UPDATE gedung SET kode=?, nama=?, alamat=? WHERE id=?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data){
        $sql = "DELETE FROM gedung WHERE id=?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
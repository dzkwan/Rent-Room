<?php
class Fasilitas{
    public $koneksi;

    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function getAll(){
        $sql = "SELECT * FROM fasilitas";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO fasilitas (nama,keterangan) VALUES (?,?)";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getFasilitas($id){
        $sql = "SELECT * FROM fasilitas WHERE id = ?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    
    public function ubah($data){
        $sql = "UPDATE fasilitas SET nama=?, keterangan=? WHERE id=?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data){
        $sql = "DELETE FROM fasilitas WHERE id=?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
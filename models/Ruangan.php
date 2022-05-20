<?php
class Ruangan{
    public $koneksi;

    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function getAll(){
        $sql = "SELECT g.nama AS nama_gedung, f.nama AS nama_fasilitas,
                k.nama AS kategori, r.nama, r.lantai, r.keadaan, r.foto, r.id
                FROM ruangan r
                INNER JOIN gedung g ON g.id = r.gedung_id
                INNER JOIN fasilitas f ON f.id = r.fasilitas_id
                INNER JOIN kategori_ruangan k ON k.id = r.kategori_ruangan_id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO ruangan (nama,gedung_id,lantai,kategori_ruangan_id,fasilitas_id,keadaan,foto) VALUES (?,?,?,?,?,?,?)";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getRuangan($id){
        $sql = "SELECT g.nama AS nama_gedung, f.nama AS nama_fasilitas, k.nama AS kategori,
                r.gedung_id AS id_gedung, r.kategori_ruangan_id AS id_kategori, r.fasilitas_id AS id_fasilitas, r.nama, r.lantai, r.keadaan, r.foto, r.id
                FROM ruangan r
                INNER JOIN gedung g ON g.id = r.gedung_id
                INNER JOIN fasilitas f ON f.id = r.fasilitas_id
                INNER JOIN kategori_ruangan k ON k.id = r.kategori_ruangan_id
                WHERE r.id = ?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
}
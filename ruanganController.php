<?php
require_once 'conn_db.php';
require_once 'models/Ruangan.php';

$nama = $_POST['nama'];
$gedung = $_POST['gedung'];
$lantai = $_POST['lantai'];
$kategori = $_POST['kategori'];
$fasilitas = $_POST['fasilitas'];
$status = $_POST['status'];
$foto = $_POST['foto'];
$tombol = $_POST['proses'];

$data = [
  $nama,
  $gedung,
  $lantai,
  $kategori,
  $fasilitas,
  $status,
  $foto
];

$obj = new Ruangan();

$obj->simpan($data);
// if($tombol == 'simpan'){
//   $obj->simpan($data);
// }elseif($tombol == 'ubah'){
//   $data[] = $_POST['idx'];
//   $obj->ubah($data);
// }

header('location:index.php?hal=ruangan');
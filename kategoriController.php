<?php
require_once 'conn_db.php';
require_once 'models/Kategori.php';

$nama = $_POST['nama'];
$ket = $_POST['keterangan'];
$tombol = $_POST['proses'];

$data = [
  $nama,
  $ket
];

$obj = new Kategori();

if($tombol == 'simpan'){
  $obj->simpan($data);
}elseif($tombol == 'ubah'){
  $data[] = $_POST['idx'];
  $obj->ubah($data);
}elseif($tombol == 'hapus'){
  unset($data);
  $data[] = $_POST['idx'];
  $obj->hapus($data);
}

header('location:index.php?hal=kategori');
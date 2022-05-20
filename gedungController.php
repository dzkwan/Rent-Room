<?php
require_once 'conn_db.php';
require_once 'models/Gedung.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$alm = $_POST['alamat'];
$tombol = $_POST['proses'];

$data = [
  $kode,
  $nama,
  $alm
];

$obj = new Gedung();

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

header('location:index.php?hal=gedung');
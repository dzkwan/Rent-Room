<?php
$hal = isset($_GET['hal']) ? $_GET['hal'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
if(!empty($user)){
if($hal == 'gedung_form_edit'){
$obj = new Gedung();
$data = $obj->getGedung($id);
?>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Ubah Data <span class="text-primary text-uppercase"><?= $data['nama'] ?></span></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="gedungController.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="kode" class="form-control" id="kode" placeholder="kode"
                                        value="<?= $data['kode'] ?>" required>
                                    <label for="name">Kode</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="nama" class="form-control" id="name"
                                        placeholder="Your Name" value="<?= $data['nama'] ?>" required>
                                    <label for="name">Gedung Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea name="alamat" class="form-control" placeholder="alamat"
                                        id="floatingTextarea" style="height: 100px"
                                        required><?= $data['alamat'] ?></textarea>
                                    <label for="floatingTextarea">Alamat</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="proses"
                                    value="ubah">Simpan</button>
                                <input type="hidden" name="idx" value="<?= $id ?>">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}elseif($hal == 'fasilitas_form_edit'){
$obj = new Fasilitas();
$data = $obj->getFasilitas($id);
?>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Ubah Data <span class="text-primary text-uppercase"><?= $data['nama'] ?></span></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="fasilitasController.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="nama" class="form-control" id="name"
                                        placeholder="Your Name" value="<?= $data['nama'] ?>" required>
                                    <label for="name">Fasilitas Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea name="keterangan" class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea" style="height: 100px"
                                        required><?= $data['keterangan'] ?></textarea>
                                    <label for="floatingTextarea">Keterangan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="proses"
                                    value="ubah">Simpan</button>
                                <input type="hidden" name="idx" value="<?= $id ?>">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}elseif($hal == 'kategori_form_edit'){
$obj = new Kategori();
$data = $obj->getKategori($id);
?>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Ubah Data <span class="text-primary text-uppercase"><?= $data['nama'] ?></span></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="kategoriController.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="nama" class="form-control" id="name"
                                        placeholder="Your Name" value="<?= $data['nama'] ?>" required>
                                    <label for="name">Kategori Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea name="keterangan" class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea" style="height: 100px"
                                        required><?= $data['keterangan'] ?></textarea>
                                    <label for="floatingTextarea">Keterangan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="proses"
                                    value="ubah">Simpan</button>
                                <input type="hidden" name="idx" value="<?= $id ?>">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}else{ include_once 'views/403.php'; }
?>
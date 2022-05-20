<div class="container-xxl py-5">
    <?php
    $hal = isset($_GET['hal']) ? $_GET['hal'] : '';
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    if(!empty($user)){
    if($hal == 'fasilitas_form_add'){
    ?>
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Tambah <span class="text-primary text-uppercase">Fasilitas</span></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="fasilitasController.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="nama" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                    <label for="name">Fasilitas Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea name="keterangan" class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea" style="height: 100px" required></textarea>
                                    <label for="floatingTextarea">Keterangan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="proses"
                                    value="simpan">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'gedung_form_add'){
    ?>
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Tambah <span class="text-primary text-uppercase">gedung</span></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="gedungController.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="kode" class="form-control" id="kode" placeholder="kode"
                                        required>
                                    <label for="name">Kode</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="nama" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                    <label for="name">Gedung Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea name="alamat" class="form-control" placeholder="alamat"
                                        id="floatingTextarea" style="height: 100px" required></textarea>
                                    <label for="floatingTextarea">Alamat</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="proses"
                                    value="simpan">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'kategori_form_add'){
    ?>
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Tambah <span class="text-primary text-uppercase">Kategori</span></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="kategoriController.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="nama" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                    <label for="name">Kategori Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea name="keterangan" class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea" style="height: 100px" required></textarea>
                                    <label for="floatingTextarea">Keterangan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="proses"
                                    value="simpan">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'ruangan_form_add'){
    ?>
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Tambah <span class="text-primary text-uppercase">Ruangan</span></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="ruanganController.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="nama" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                    <label for="name">Ruangan Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <select class="form-select" name="gedung" id="gedung" required>
                                    <option value="" selected disabled>Pilih Gedung</option>
                                    <?php
                                    $obj = new Gedung();
                                    $rs = $obj->getAll();
                                    foreach($rs as $g){
                                    ?>
                                    <option value="<?= $g['id'] ?>"><?= $g['nama'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="lantai" class="form-control" id="lantai" placeholder=" "
                                        required>
                                    <label for="lantai">Lantai</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <select class="form-select" name="kategori" id="kategori" required>
                                    <option value="" selected disabled>Pilih Kategori</option>
                                    <?php
                                    $obj = new Kategori();
                                    $rs = $obj->getAll();
                                    foreach($rs as $g){
                                    ?>
                                    <option value="<?= $g['id'] ?>"><?= $g['nama'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <select class="form-select" name="fasilitas" id="fasilitas" required>
                                    <option value="" selected disabled>Pilih Fasilitas</option>
                                    <?php
                                    $obj = new Fasilitas();
                                    $rs = $obj->getAll();
                                    foreach($rs as $g){
                                    ?>
                                    <option value="<?= $g['id'] ?>"><?= $g['nama'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <select class="form-select" name="status" id="status" required>
                                    <option value="" selected disabled>Pilih Status</option>
                                    <option value="Tersedia">Tersedia</option>
                                    <option value="Dipinjam">Dipinjam</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input class="form-control" type="file" name="foto" id="formFile" required>
                                    <label for="formFile" class="form-label">Pilih Foto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="proses"
                                    value="simpan">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    }else{ include_once 'views/403.php'; }
    ?>
</div>
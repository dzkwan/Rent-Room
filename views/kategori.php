<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Kategori</h6>
            <h1>Explore Our <span class="text-primary text-uppercase">Kategori</span></h1>
            <?php
            if(!empty($user) && $role != 'peminjam'){
            ?>
            <a href="index.php?hal=kategori_form_add"
                class="btn btn-primary py-md-2 px-md-5 me-3 mb-4 animated slideInUp">Add New</a>
            <?php
            }
            ?>
        </div>
        <div class="row g-4 mt-2">
            <?php
            $obj = new Kategori();
            $rs = $obj->getAll();
            foreach($rs as $g){
            ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded" href="">
                    <div class="service-icon bg-transparent border rounded p-1">
                        <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                            <i class="fa fa-spa fa-2x text-primary logo"></i>
                        </div>
                    </div>
                    <h5 class="mb-1"><?= $g['nama'] ?></h5>
                    <p class="text-body mb-5"><?= $g['keterangan'] ?></p>
                    <?php
                    if(!empty($user) && $role != 'peminjam'){
                    ?>
                    <div class="d-flex justify-content-end">
                        <form action="kategoriController.php" method="post">
                            <a href="index.php?hal=kategori_form_edit&id=<?= $g['id'] ?>"
                                class="btn btn-sm btn-success rounded py-2 px-2 me-1"><i class="fa fa-edit"
                                    aria-hidden="true"></i></a>
                            <?php
                            if($role != 'staff'){
                            ?>
                            <button type="submit" name="proses" value="hapus"
                                class="btn btn-sm btn-danger rounded py-2 px-2"
                                onclick="return confirm('yakin <?= $g['nama'] ?> ingin dihapus?');"><i
                                    class="fa fa-trash" aria-hidden="true"></i></button>
                            <input type="hidden" name="idx" value="<?= $g['id'] ?>" />
                            <?php
                            }
                            ?>
                        </form>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
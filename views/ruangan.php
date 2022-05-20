<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Ruangan</h6>
            <h1>Explore Our <span class="text-primary text-uppercase">Ruangan</span></h1>
            <?php
            if(!empty($user) && $role != 'peminjam'){
            ?>
            <a href="index.php?hal=ruangan_form_add"
                class="btn btn-primary py-md-2 px-md-5 me-3 mb-4 animated slideInUp">Add New</a>
            <?php
            }
            ?>
        </div>
        <div class="row g-4 mt-2">
            <?php
            $obj = new Ruangan();
            $rs = $obj->getAll();
            foreach($rs as $g){
                if($g['keadaan'] == 'Dipinjam'){
                ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="room-item shadow rounded overflow-hidden position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/<?= $g['foto'] ?>" alt="">
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0"><?= $g['nama'] ?></h5>
                            <div class="ps-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                        </div>
                        <h6 class="text-primary mb-3"><?= $g['keadaan'] ?></h6>
                        <div class="d-flex mb-3">
                            <small class="border-end me-3 pe-3"><i
                                    class="fa fa-hotel text-primary me-2"></i><?= $g['nama_gedung'] ?></small>
                            <small class="border-end me-3 pe-3"><i
                                    class="fa fa-angle-double-up text-primary me-2"></i>Lantai
                                <?= $g['lantai'] ?></small>
                            <small><i class="fa fa-hashtag text-primary me-2"></i><?= $g['nama_fasilitas'] ?></small>
                        </div>
                        <a class="btn btn-sm btn-primary rounded py-2 px-3" style="z-index:1"
                            href="index.php?hal=ruangan_detil&id=<?= $g['id'] ?>">View
                            Detail</a>
                        <!-- <div class="d-flex justify-content-between">
                            <div style="z-index:1">
                                <form action="">
                                    <button href="" class="btn btn-sm btn-danger rounded py-2 px-2"><i
                                            class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div> -->
                    </div>
                    <div class="position-absolute" style="right:0;left:0;top:0;bottom:0;background:rgba(0,0,0,0.35)">
                    </div>
                </div>
            </div>
            <?php }else{ ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <style>
                .tersedia {
                    transition: all ease .5s;
                }

                .tersedia:hover {
                    margin-top: -10px;
                }
                </style>
                <div class="room-item shadow rounded overflow-hidden tersedia">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/<?= $g['foto'] ?>" alt="">
                        <!-- <small
                                class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small> -->
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0"><?= $g['nama'] ?></h5>
                            <div class="ps-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                        </div>
                        <h6 class="text-primary mb-3"><?= $g['keadaan'] ?></h6>
                        <div class="d-flex mb-3">
                            <small class="border-end me-3 pe-3"><i
                                    class="fa fa-hotel text-primary me-2"></i><?= $g['nama_gedung'] ?></small>
                            <small class="border-end me-3 pe-3"><i
                                    class="fa fa-angle-double-up text-primary me-2"></i>Lantai
                                <?= $g['lantai'] ?></small>
                            <small><i class="fa fa-hashtag text-primary me-2"></i><?= $g['nama_fasilitas'] ?></small>
                        </div>
                        <a class="btn btn-sm btn-primary rounded py-2 px-3"
                            href="index.php?hal=ruangan_detil&id=<?= $g['id'] ?>">View Detail</a>
                        <!-- <div class="d-flex justify-content-between">
                            <div>
                                <form action="">
                                    <button href="" class="btn btn-sm btn-danger rounded py-2 px-2"><i
                                            class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <?php }} ?>
        </div>
    </div>
</div>
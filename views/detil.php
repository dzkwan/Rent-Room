<?php
$hal = isset($_GET['hal']) ? $_GET['hal'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
if($hal == 'ruangan_detil'){
$obj = new Ruangan();
$data = $obj->getRuangan($id);
?>
<div class="container-xxl py-5 px-4">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h1 class="mb-4"><?= $data['nama'] ?></span></h1>
                <h4 class="text-primary text-uppercase mb-4"><?= $data['keadaan'] ?></h4>
                <div class="row g-3 pb-4">
                    <div class="col-sm-3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-3">
                                <i class="fa fa-certificate fa-2x text-primary mb-3"></i>
                                <p class="fw-bold mb-0" style="font-size:11pt">Kategori<br> <?= $data['kategori'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-3">
                                <i class="fa fa-hotel fa-2x text-primary mb-3"></i>
                                <p class="fw-bold mb-0" style="font-size:11pt"><?= $data['nama_gedung'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-3">
                                <i class="fa fa-angle-double-up fa-2x text-primary mb-3"></i>
                                <p class="fw-bold mb-0" style="font-size:11pt">Lantai <?= $data['lantai'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-3">
                                <i class="fa fa-hashtag fa-2x text-primary mb-3"></i>
                                <p class="fw-bold mb-0" style="font-size:11pt">Fasilitas <?= $data['nama_fasilitas'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam quam culpa mollitia voluptatibus fuga
                    minima recusandae, distinctio necessitatibus, dolores blanditiis, rerum assumenda repudiandae vel
                    provident quis sequi sint inventore quidem!</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded w-100" src="img/<?= $data['foto'] ?>">
            </div>
        </div>
    </div>
</div>
<div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">
    <div class="container">
        <div class="owl-carousel testimonial-carousel py-5">
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet.
                    Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg"
                        style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet.
                    Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg"
                        style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet.
                    Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg"
                        style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
        </div>
    </div>
</div>
<?php
}elseif($hal == 'fasilitas_detil'){
$obj = new Fasilitas();
$data = $obj->getFasilitas($id);
?>
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h1 class="mb-4"><?= $data['nama'] ?></span></h1>
                <h4 class="text-primary text-uppercase mb-5"><?= $data['keterangan'] ?></h4>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam quam culpa mollitia voluptatibus fuga
                    minima recusandae, distinctio necessitatibus, dolores blanditiis, rerum assumenda repudiandae vel
                    provident quis sequi sint inventore quidem!</p>
                <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a> -->
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.1s" src="img/whiteboard.jpg"
                            style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/wifi.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/ac.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.7s" src="img/proyektor.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
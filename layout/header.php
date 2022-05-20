<div class="container-fluid p-0 mb-5">
    <?php
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $hal = isset($_GET['hal']) ? $_GET['hal'] : '';
    if(empty($hal)){
    ?>
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h1 class="display-3 text-white mb-4 animated slideInDown">Discover A Room For Your Meeting</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our
                            Rooms</a>
                        <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h1 class="display-3 text-white mb-4 animated slideInDown">Discover A Luxurious Room</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our
                            Rooms</a>
                        <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <?php
    }elseif($hal == 'gedung' || $hal == 'fasilitas' || $hal == 'kategori'){
    ?>
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center text-uppercase">
                <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $hal;?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Property</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"><?= $hal;?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'fasilitas_form_add'){
    ?>
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center text-uppercase">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Form Add</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Property</a></li>
                        <li class="breadcrumb-item"><a href="index.php?hal=fasilitas">Fasilitas</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Form Add</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'gedung_form_add'){
    ?>
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center text-uppercase">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Form Add</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Property</a></li>
                        <li class="breadcrumb-item"><a href="index.php?hal=gedung">Gedung</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Form Add</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'kategori_form_add'){
    ?>
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center text-uppercase">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Form Add</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Property</a></li>
                        <li class="breadcrumb-item"><a href="index.php?hal=kategori">Kategori</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Form Add</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'ruangan_form_add'){
    ?>
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center text-uppercase">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Form Add</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php?hal=ruangan">Ruangan</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Form Add</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'gedung_form_edit'){
    ?>
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center text-uppercase">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Form Edit</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Property</a></li>
                        <li class="breadcrumb-item"><a href="index.php?hal=gedung">Gedung</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Form Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'fasilitas_form_edit'){
    ?>
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center text-uppercase">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Form Edit</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Property</a></li>
                        <li class="breadcrumb-item"><a href="index.php?hal=fasilitas">Fasilitas</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Form Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'kategori_form_edit'){
    ?>
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center text-uppercase">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Form Edit</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Property</a></li>
                        <li class="breadcrumb-item"><a href="index.php?hal=kategori">Kategori</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Form Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'ruangan_detil'){
    $obj = new Ruangan();
    $data = $obj->getRuangan($id);
    ?>
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center text-uppercase">
                <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $data['nama'] ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php?hal=ruangan">Ruangan</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"><?= $data['nama'] ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php
    }elseif($hal == 'fasilitas_detil'){
    $obj = new Fasilitas();
    $data = $obj->getFasilitas($id);
    ?>
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center text-uppercase">
                <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $data['nama'] ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Property</a></li>
                        <li class="breadcrumb-item"><a href="index.php?hal=fasilitas">Fasilitas</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"><?= $data['nama'] ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php
    }else{
    ?>
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center text-uppercase">
                <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $hal;?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"><?= $hal;?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</div>
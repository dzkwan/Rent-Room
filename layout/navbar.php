<?php
$user = isset($_SESSION['MEMBER']) ? $_SESSION['MEMBER'] : '';
?>
<div class="container-fluid bg-dark px-0">
    <div class="row gx-0">
        <div class="col-lg-3 bg-dark d-none d-lg-block">
            <a href="index.php"
                class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 text-primary text-uppercase">Rent Room</h1>
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row gx-0 bg-white d-none d-lg-flex">
                <div class="col-lg-7 px-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                        <i class="fa fa-envelope text-primary me-2"></i>
                        <p class="mb-0">info@example.com</p>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2">
                        <i class="fa fa-phone-alt text-primary me-2"></i>
                        <p class="mb-0">+012 345 6789</p>
                    </div>
                </div>
                <div class="col-lg-5 px-5 text-end">
                    <div class="d-inline-flex align-items-center py-2">
                        <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                        <a class="" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                <div class="d-flex">
                    <a href="index.php" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 text-primary text-uppercase fs-3">Rent Room</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <a href="#loginModal" data-bs-toggle="modal" class="btn btn-primary d-block d-lg-none"
                    role="button">LOGIN <i class="fa fa-sign-in-alt"></i></a>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="index.php?hal=ruangan" class="nav-item nav-link">Ruangan</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="index.php?hal=gedung" class="dropdown-item">Gedung</a>
                                <a href="index.php?hal=fasilitas" class="dropdown-item">Fasilitas</a>
                                <a href="index.php?hal=kategori" class="dropdown-item">Kategori</a>
                            </div>
                        </div>
                        <a href="index.php?hal=about" class="nav-item nav-link">About</a>
                        <a href="index.php?hal=contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <?php
                    if(empty($user)){
                    ?>
                    <a href="#loginModal" data-bs-toggle="modal"
                        class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block" role="button">LOGIN<i
                            class="fa fa-sign-in-alt ms-3"></i></a>
                    <?php
                    }else{
                    ?>
                    <p class="nav-item m-0 text-white"><?= $user['fullname'] ?> - <?= $user['role'] ?></p>
                    <a href="logout.php" class="btn btn-danger rounded-0 py-4 px-md-5 d-none d-lg-block"
                        onclick="return confirm('yakin ingin dikeluar?');">Logout<i
                            class="fa fa-sign-out-alt ms-3"></i></a>
                    <?php
                    }
                    ?>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="modal fade" id="loginModal" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="loginModalTitle"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalTitle">Form Login <i class="bi bi-question-diamond-fill"
                        data-bs-toggle="tooltip" data-bs-placement="right"
                        title="user1 : ahmad & pw : admin user2 : joko & pw : manager user3 : arya & pw : staff &nbsp; user4 : tuti & pw : peminjam"
                        style="font-size:12pt;vertical-align:middle"></i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="memberController.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control" id="username" placeholder="username"
                            required>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="password"
                            required>
                        <label for="password">Password</label>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary w-100">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
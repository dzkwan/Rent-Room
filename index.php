<?php
session_start();
$user = isset($_SESSION['MEMBER']) ? $_SESSION['MEMBER'] : '';
$role = isset($user['role']) ? $user['role'] : '';
require_once 'conn_db.php';
require_once 'models/Gedung.php';
require_once 'models/Ruangan.php';
require_once 'models/Kategori.php';
require_once 'models/Fasilitas.php';
//gunakan fungsi PDO
// $sql = "SELECT * FROM gedung";
// //eksekusi query di atas, lalu ambil hasilnya
// $data = $dbh->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aplikasi Peminjaman Ruangan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- navbar Start -->
        <?php include_once 'layout/navbar.php'; ?>
        <!-- navbar End -->

        <!-- header Start -->
        <?php include_once 'layout/header.php'; ?>
        <!-- header End -->

        <?php
        $hal = isset($_GET['hal']) ? $_GET['hal'] : '';
        if($hal == 'fasilitas_form_add' || $hal == 'gedung_form_add' || $hal == 'kategori_form_add' || $hal == 'ruangan_form_add'){
            include_once 'views/form_add.php';
        }elseif($hal == 'fasilitas_form_edit' || $hal == 'gedung_form_edit' || $hal == 'kategori_form_edit'){
            include_once 'views/form_edit.php';
        }elseif($hal == 'ruangan_detil' || $hal == 'fasilitas_detil'){
            include_once 'views/detil.php';
        }elseif(!empty($hal)){
            include_once 'views/'.$hal.'.php';
        }else{
            include_once 'index.php';
        }
        ?>

        <!-- Newsletter Start -->
        <?php include_once 'layout/news.php'; ?>
        <!-- Newsletter Start -->

        <!-- Footer Start -->
        <?php include_once 'layout/footer.php'; ?>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    </script>
</body>

</html>
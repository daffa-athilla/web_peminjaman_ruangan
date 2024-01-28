<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>{{ $title }}</title>

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/public_home/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/public_home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/public_home/css/bootstrap.min.css" rel="stylesheet">

    <!-- My CSS -->
    <link href="/public_home/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- End of Spinner -->


    <!-- Navbar -->
    @include('includes.navbar')
    <!-- End of Navbar -->


    <!-- Hero -->
    <div class="hero-header py-5 bg-primary">
        <div class="container py-5 text-center">
            <h1 class="display-5 text-white mb-4 animated slideInDown">Peminjaman Ruangan</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown gap-4">
                    @if (Auth::check() && auth()->user()->username === 'admin')
                        <a href="/admin" class="btn btn-dark fs-5">Admin</a>
                    @endif
                    
                    <a href="/form" class="btn btn-light fs-5">Form Peminjaman</a>
                    
                    <a href="/peminjaman" class="btn btn-info fs-5">Daftar Peminjaman</a>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End of Hero -->


    <!-- Product -->
    <div class="py-5 container-fluid">
        <div class="mb-4 text-center wow fadeIn" data-wow-delay="0.1s">
            <h1 class="text-primary">
                <span class="fw-light text-dark">Gallery</span> Universitas Teknokrat Indonesia
            </h1>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="product-item text-center border h-100">
                        <img class="img-fluid mb-2" src="/public_home/img/Gallery 1.jpg" alt="">
                        <div class="mb-2">
                            <span>Halaman Depan ICT</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="product-item text-center border h-100">
                        <img class="img-fluid mb-2" src="/public_home/img/Gallery 2.jpg" alt="">
                        <div class="mb-2">
                            <span>Parkiran ICT</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="product-item text-center border h-100">
                        <img class="img-fluid mb-2" src="/public_home/img/Gallery 3.jpg" alt="">
                        <div class="mb-2">
                            <span>Pintu Masuk Gedung GSG</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="product-item text-center border h-100">
                        <img class="img-fluid mb-2" src="/public_home/img/Gallery 4.jpg" alt="">
                        <div class="mb-2">
                            <span>Gedung FSIP</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Product -->


    <!-- Newsletter -->
    <div class="container-fluid newsletter bg-primary mt-5">
        <div class="container py-5">
            <div class="mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-5 fs-1 text-white text-center">Pemrograman Web II</h1>
                <h2 class="mb-3 fs-3 text-white">
                    <li>Daffa Athilla - 21312034</li>
                </h2>
                <h2 class="mb-3 fs-3 text-white">
                    <li>Syarifudin Mustofa Ghufron - 21312047</li>
                </h2>
                <h2 class="mb-0 fs-3 text-white">
                    <li>Nurdin Hayat Tulloh - 21312010</li>
                </h2>
            </div>
        </div>
    </div>
    <!-- End of Newsletter -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- End of Back to Top -->

    
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="/public_bootstrap/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <script src="/public_home/lib/wow/wow.min.js"></script>
    <script src="/public_home/lib/easing/easing.min.js"></script>
    <script src="/public_home/lib/waypoints/waypoints.min.js"></script>
    <script src="/public_home/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- My Javascript -->
    <script src="/public_home/js/main.js"></script>
</body>

</html>
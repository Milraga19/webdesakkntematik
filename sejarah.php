<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Sistem Informasi Desa Tanjung Tiram adalah web yang memudahkan pemerintah desa untuk mengakses informasi desa dan melakukan publikasi terkait kegiatan, berita dan potensi desa serta dapat mengakses aduan yang diajukan oleh setiap penduduk desa" />
    <meta name="keywords" content="Sistem Informasi Desa, Potensi Desa, Berita Desa, Pengaduan, KKN Tematik UHO 2021, sejarah desa tanjung tiram" />
    <meta name="author" content="Tim KKN Tematik UHO 2021" />
    <title>Tanjung Tiram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box; ">
        <div class="container-xxl mx-auto p-0  position-relative header-2-1" style="font-family: 'Poppins', sans-serif">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="#">
                    <img class="logo" style="margin-right: 0.75rem" src="img/logo.png" alt="" />
                </a>
                <div class="m-3">
                    <span class="primary">Tanjung Tiram</span><br>
                    <span class="secondary" style="font-size: 15px;">Konawe Selatan</span>
                </div>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg-white border-0">
                            <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                                <a class="modal-title" id="targetModalLabel">
                                    <img class="logo" style="margin-top: 0.5rem" src="img/logo.png" alt="" />
                                </a>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pemeritahan.php">Pemerintahan</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="profil.php">Profil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="berita.php">Berita</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="kkntematik.php">KKN Tematik</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="covid19.php">Covid 19</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo" style="margin-left: 180px;">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pemeritahan.php">Pemerintahan</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="profil.php">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="berita.php">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kkntematik.php">KKN Tematik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="covid19.php">Covid 19</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <section class="h-100 w-100 bg-white" style="box-sizing: border-box;">
                <div class="content-3-1 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
                    <div class="d-flex flex-lg-row flex-column align-items-center">
                        <!-- Left Column -->
                        <div class="img-hero text-center justify-content-center d-flex">
                            <img id="hero" class="img-fluid" src="img/banner.png" alt="" />
                        </div>

                        <!-- Right Column -->
                        <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
                            <h2 class="title-text">Sejarah Desa</h2>
                            <div class="p-0 m-0">
                                <div class class="list-unstyled" style="margin-bottom: 2rem">
                                    <h5 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                        Tanjung Tiram
                                    </h5>
                                    <p class="text-caption" align="justify">
                                        Desa Tanjung Tiram pertama kali terbentuk pada tahun 1992 dengan Kepala Desa La
                                        Sali. Awalnya desa ini berpenduduk 100% Muna, dan seiring berjalannya waktu,
                                        terdapat beberapa suku di Desa Tanjung Tiram ini. Kepala Desa pada tahun 1992 -
                                        2000 adalah La Sali, pada tahun 2000 - 2008 adalah Sudirman dan pada tahun 2000
                                        - sekarang adalah Firman.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include("footer.php"); ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
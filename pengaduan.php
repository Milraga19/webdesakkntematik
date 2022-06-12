<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                    <span class="secondary">Konawe Selatan</span>
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
                                    <li class="nav-item">
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

                <div class="collapse navbar-collapse" id="navbarTogglerDemo" style="margin-left: 150px;">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pemeritahan.php">Pemerintahan</a>
                        </li>
                        <li class="nav-item">
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

            <div class="container">
                <h4 class="title">Silahkan Aduan Anda</h4>
                <section class="ftco-section contact-section">
                    <div class="container mt-5">
                        <div class="row block-9">
                            <div class="col-md-4 contact-info ftco-animate">
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h2 class="h4">Panduan Mengisi</h2>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <p>Jika tidak ingin memberitahu nama silahkan isi dengan " - "</p>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <p>Isi Dusun dengan bilangan 1 - 4
                                        </p>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <p>Isi Judul Aduan anda maksimal 10 kata</p>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <p>Isi Detail aduan anda dan jika sudah Klik tombol "Kirim Pesan"</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-6 ftco-animate">
                                <form action="kirim.php" method="post" class="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding: 10px 0;">
                                                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="padding: 10px 0;">
                                                <input type="text" name="dusun" class="form-control" placeholder="Dusun" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0;">
                                        <input type="text" name="judul" class="form-control" placeholder="Judul Aduan" required>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0;">
                                        <textarea name="pesan" cols="30" rows="7" class="form-control" placeholder="Detail Aduan saya ..." required></textarea>
                                    </div>
                                    <div class="form-group" style="padding: 10px 0;">
                                        <input type="submit" name="kirim" style="background-color: #ff7c57;" value="Kirim Pesan" class="btn  py-3 px-5">
                                </form>
                            </div>
                            </form>
                        </div>
                    </div>
            </div>

            <?php include("footer.php"); ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
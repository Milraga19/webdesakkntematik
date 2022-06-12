<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Sistem Informasi Desa Tanjung Tiram adalah web yang memudahkan pemerintah desa untuk mengakses informasi desa dan melakukan publikasi terkait kegiatan, berita dan potensi desa serta dapat mengakses aduan yang diajukan oleh setiap penduduk desa" />
    <meta name="keywords" content="Sistem Informasi Desa, Potensi Desa, Berita Desa, Pengaduan, KKN Tematik UHO 2021, Covid 19 Case" />
    <meta name="author" content="Tim KKN Tematik UHO 2021" />
    <title>Tanjung Tiram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
                                    <li class="nav-item">
                                        <a class="nav-link" href="profil.php">Profil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="berita.php">Berita</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="kkntematik.php">KKN Tematik</a>
                                    </li>
                                    <li class="nav-item active">
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
                        <li class="nav-item">
                            <a class="nav-link" href="profil.php">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="berita.php">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kkntematik.php">KKN Tematik</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="covid19.php">Covid 19</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php
                        include("koneksi.php");

                        $tampil = mysqli_query($koneksi, "SELECT * from covid19");

                        $i = 0;
                        foreach ($tampil as $row) {
                            $actives = "";
                            if ($i == 0) {
                                $actives = "active";
                            }

                        ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
                        <?php $i++;
                        } ?>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                        $i = 0;
                        foreach ($tampil as $row) {
                            $actives = "";
                            if ($i == 0) {
                                $actives = "active";
                            }

                        ?>
                            <div class="carousel-item <?= $actives; ?>">
                                <img class="d-block w-100" src="admin/upload/<?= $row["gambarcovid"] ?>" alt="slide" style="width: 100%;
    max-height: 500px;
    object-fit: cover;
    object-position: center;">
                            </div>
                        <?php $i++;
                        } ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <section class="h-100 w-100 bg-white" style="box-sizing: border-box center">
                <div class="content-2-1 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
                    <div class="text-center title-text">
                        <h1 class="text-title">Global Case Covid 19</h1>
                        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
                            Berikut Informasi Jumlah Kasus Mengenai Covid 19
                        </p>
                    </div>
                </div>
                <?php include 'corona.php'; ?>
                <main role="main" class="flex-shrink-0">
                    <div class="container">
                        <h6>GLOBAL</h6>
                        <hr />
                        <div class="row mb-5">
                            <div class="col-sm-4">
                                <div class="card text-white bg-danger">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="card-title">TOTAL POSITIF</h5>
                                                <H1><?= $jumlah_positif; ?></H1>
                                                <p class="card-text">ORANG</p>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="img/emoji-04.png" alt="" heigth="100" width="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card text-white bg-success">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="card-title">TOTAL SEMBUH</h5>
                                                <H1><?= $jumlah_sembuh; ?></H1>
                                                <p class="card-text">ORANG</p>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="img/emoji-01.png" alt="" heigth="100" width="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card text-white bg-info">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="card-title">TOTAL MENINGGAL</h5>
                                                <H1><?= $jumlah_meninggal; ?></H1>
                                                <p class="card-text">ORANG</p>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="img/emoji-03.png" alt="" heigth="100" width="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6>INDONESIA</h6>
                        <hr />
                        <div class="row mt-5 mb-5">
                            <div class="col-sm-4">
                                <div class="card text-white bg-danger">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="card-title">TOTAL POSITIF</h5>
                                                <H1><?= $positif; ?></H1>
                                                <p class="card-text">ORANG</p>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="img/emoji-04.png" alt="" heigth="100" width="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card text-white bg-success">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="card-title">TOTAL SEMBUH</h5>
                                                <H1><?= $sembuh; ?></H1>
                                                <p class="card-text">ORANG</p>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="img/emoji-01.png" alt="" heigth="100" width="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card text-white bg-info">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="card-title">TOTAL MENINGGAL</h5>
                                                <H1><?= $meninggal; ?></H1>
                                                <p class="card-text">ORANG</p>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="img/emoji-03.png" alt="" heigth="100" width="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6>PROVINSI</h6>
                        <hr />
                        <div class="row mt-5 mb-5">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">Provinsi</th>
                                        <th scope="col">Positif</th>
                                        <th scope="col">Sembuh</th>
                                        <th scope="col">Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data_prov as $rows) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $no; ?></th>
                                            <td><?php echo $rows->attributes->Provinsi; ?></td>
                                            <td><?php echo $rows->attributes->Kasus_Posi; ?></td>
                                            <td><?php echo $rows->attributes->Kasus_Semb; ?></td>
                                            <td><?php echo $rows->attributes->Kasus_Meni; ?></td>
                                        </tr>
                                    <?php
                                        $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </main>
            </section>

            <?php include("footer.php"); ?>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
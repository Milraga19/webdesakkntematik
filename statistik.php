<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Sistem Informasi Desa Tanjung Tiram adalah web yang memudahkan pemerintah desa untuk mengakses informasi desa dan melakukan publikasi terkait kegiatan, berita dan potensi desa serta dapat mengakses aduan yang diajukan oleh setiap penduduk desa" />
    <meta name="keywords" content="Sistem Informasi Desa, Potensi Desa, Berita Desa, Pengaduan, KKN Tematik UHO 2021, statistik desa tanjung tiram" />
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
                                    <li class="nav-item active">
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

                <div class="collapse navbar-collapse" id="navbarTogglerDemo" style="margin-left: 180px;">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item active">
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

            <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
                <div class="content-2-1 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
                    <div class="text-center title-text">
                        <h1 class="text-title">Statistik Desa</h1>
                        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
                            Berikut ini rincian Statistik Desa
                        </p>
                    </div>
                    <div class="grid-padding text-center">
                        <div class="container">
                            <h6 style="text-align: left;">Data Berdasarkan Demografi</h6>
                            <hr />
                            <?php
                            include("koneksi.php");
                            $tampil = mysqli_query($koneksi, "SELECT * from statistikdesa WHERE kategori = 'demografi'");

                            ?>
                            <div class="row mt-5 mb-5">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tampil as $rows) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $no; ?></th>
                                                <td><?php echo $rows["data"]; ?></td>
                                                <td><?php echo $rows["jumlah"]; ?></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container">
                            <h6 style="text-align: left;">Data Berdasarkan Agama</h6>
                            <hr />
                            <?php
                            include("koneksi.php");
                            $tampil = mysqli_query($koneksi, "SELECT * from statistikdesa WHERE kategori = 'agama'");

                            ?>
                            <div class="row mt-5 mb-5">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tampil as $rows) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $no; ?></th>
                                                <td><?php echo $rows["data"]; ?></td>
                                                <td><?php echo $rows["jumlah"]; ?></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container">
                            <h6 style="text-align: left;">Data Berdasarkan Umur</h6>
                            <hr />
                            <?php
                            include("koneksi.php");
                            $tampil = mysqli_query($koneksi, "SELECT * from statistikdesa WHERE kategori = 'umur'");

                            ?>
                            <div class="row mt-5 mb-5">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tampil as $rows) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $no; ?></th>
                                                <td><?php echo $rows["data"]; ?></td>
                                                <td><?php echo $rows["jumlah"]; ?></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container">
                            <h6 style="text-align: left;">Data Berdasarkan Pendidikan</h6>
                            <hr />
                            <?php
                            include("koneksi.php");
                            $tampil = mysqli_query($koneksi, "SELECT * from statistikdesa WHERE kategori = 'pendidikan'");

                            ?>
                            <div class="row mt-5 mb-5">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tampil as $rows) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $no; ?></th>
                                                <td><?php echo $rows["data"]; ?></td>
                                                <td><?php echo $rows["jumlah"]; ?></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container">
                            <h6 style="text-align: left;">Data Berdasarkan Pekerjaan</h6>
                            <hr />
                            <?php
                            include("koneksi.php");
                            $tampil = mysqli_query($koneksi, "SELECT * from statistikdesa WHERE kategori = 'pekerjaan'");

                            ?>
                            <div class="row mt-5 mb-5">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tampil as $rows) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $no; ?></th>
                                                <td><?php echo $rows["data"]; ?></td>
                                                <td><?php echo $rows["jumlah"]; ?></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container">
                            <h6 style="text-align: left;">Data Berdasarkan Dusun</h6>
                            <hr />
                            <?php
                            include("koneksi.php");
                            $tampil = mysqli_query($koneksi, "SELECT * from statistikdesa WHERE kategori = 'dusun'");

                            ?>
                            <div class="row mt-5 mb-5">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tampil as $rows) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $no; ?></th>
                                                <td><?php echo $rows["data"]; ?></td>
                                                <td><?php echo $rows["jumlah"]; ?></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container">
                            <h6 style="text-align: left;">Data Berdasarkan Perkawinan</h6>
                            <hr />
                            <?php
                            include("koneksi.php");
                            $tampil = mysqli_query($koneksi, "SELECT * from statistikdesa WHERE kategori = 'perkawinan'");

                            ?>
                            <div class="row mt-5 mb-5">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tampil as $rows) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $no; ?></th>
                                                <td><?php echo $rows["data"]; ?></td>
                                                <td><?php echo $rows["jumlah"]; ?></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container">
                            <h6 style="text-align: left;">Data Berdasarkan Kaum Dhuafa</h6>
                            <hr />
                            <?php
                            include("koneksi.php");
                            $tampil = mysqli_query($koneksi, "SELECT * from statistikdesa WHERE kategori = 'kaum_dhuafa'");

                            ?>
                            <div class="row mt-5 mb-5">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tampil as $rows) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $no; ?></th>
                                                <td><?php echo $rows["data"]; ?></td>
                                                <td><?php echo $rows["jumlah"]; ?></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container">
                            <h6 style="text-align: left;">Data Pemilik Usaha Kecil (PUK) desa Tanjung Tiram</h6>
                            <hr />
                            <?php
                            include("koneksi.php");
                            $tampil = mysqli_query($koneksi, "SELECT * from statistikdesa WHERE kategori = 'puk'");

                            ?>
                            <div class="row mt-5 mb-5">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tampil as $rows) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $no; ?></th>
                                                <td><?php echo $rows["data"]; ?></td>
                                                <td><?php echo $rows["jumlah"]; ?></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container">
                            <h6 style="text-align: left;">Data TPA desa Tanjung Tiram</h6>
                            <hr />
                            <?php
                            include("koneksi.php");
                            $tampil = mysqli_query($koneksi, "SELECT * from statistikdesa WHERE kategori = 'tpa'");

                            ?>
                            <div class="row mt-5 mb-5">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Santri</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tampil as $rows) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $no; ?></th>
                                                <td><?php echo $rows["data"]; ?></td>
                                                <td><?php echo $rows["jumlah"]; ?></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </section>
            <?php include("footer.php"); ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Sistem Informasi Desa Tanjung Tiram adalah web yang memudahkan pemerintah desa untuk mengakses informasi desa dan melakukan publikasi terkait kegiatan, berita dan potensi desa serta dapat mengakses aduan yang diajukan oleh setiap penduduk desa" />
  <meta name="keywords" content="Sistem Informasi Desa, Potensi Desa, Berita Desa, Pengaduan, KKN Tematik UHO 2021" />
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
                  <li class="nav-item active">
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

        <div class="collapse navbar-collapse" id="navbarTogglerDemo" style="margin-left: 180px;">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item active">
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

      <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <h1 class="title-text-big">
              Selamat Datang<br class="d-lg-block d-none" />
              Di Website Tanjung Tiram
            </h1>
            <p>Pengembangan Sistem Informasi Desa Tanjung Tiram yang berguna untuk mendukung data dan informasi dalam
              penentuan arah kebijakan pembangunan Desa Digital</p>
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
              <!-- <button class="btn d-inline-flex mb-md-0 btn-try text-white">
                Layanan Desa
              </button> -->
              <button class="btn d-inline-flex mb-md-0 btn-try text-white" onclick="document.location='pengaduan.php'">
                <div class="d-flex align-items-center">
                  Pengaduan
                </div>
              </button>
            </div>
          </div>
          <!-- Right Column -->
          <div class="right-column text-center d-flex justify-content-center pe-0">
            <img id="img-fluid" class="h-auto mw-100" src="img/banner.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="h-100 w-100 bg-white" style="box-sizing: border-box;">
    <div class="content-3-1 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="d-flex flex-lg-row flex-column align-items-center">
        <!-- Left Column -->
        <div class="img-hero text-center justify-content-center d-flex">
          <img id="hero" class="img-fluid" src="img/kades.png" alt="" />
        </div>

        <!-- Right Column -->
        <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
          <h2 class="title-text">Firman</h2>
          <div class="p-0 m-0">
            <div class class="list-unstyled" style="margin-bottom: 2rem">
              <h5 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                Kepala Desa
              </h5>
              <p class="text-caption" align="justify">
                Selamat Datang di Website Resmi Desa Tanjung Tiram. Terima kasih atas kerjasama semua pihak dalam
                membangun desa Tanjung Tiram. mohon
                tetap memberi dukungan dalam membangun Desa lebih baik dimasa yang akan datang. Suatu kebanggaan buat
                Kami karena Desa
                ini merupakan desa yang memiliki banyak potensi laut dan beberapa spot wisata yang bisa dikunjungi
                masyarakat baik dari daerah Konawe Selatan
                maupun dari luar. Semoga website ini dapat memberi informasi terkait gambaran umum tentang desa Kami,
                Terima kasih.
              </p>
            </div>
          </div>
          <button onclick="window.location.href='struktur.php'" class="btn btn-learn text-white">Struktur
            Organisasi</button>
        </div>
      </div>
    </div>
  </section>
  <section class="h-100 w-100 bg-white" style="box-sizing: border-box center">
    <div class="content-2-1 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="text-center title-text">
        <h1 class="text-title">Berita Terkini</h1>
        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
          Berikut ini Berita Terkini dari Desa Tanjung Tiram
        </p>
      </div>
      <div class="grid-padding text-center">
        <div class="row">
          <?php
          include("koneksi.php");

          $tampil = mysqli_query($koneksi, "SELECT * from beritadesa ORDER BY id DESC");
          $i = 1;
          while ($row = mysqli_fetch_array($tampil) and $i <= 3) {
          ?>
            <div class="col-lg-4 column">
              <div class="card" style="width: 21rem; margin-left: auto; margin-right: auto;">
                <img class="card-img-top" src="admin/upload/<?= $row["gambarberita"]; ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?= $row["judulberita"] ?></h5>
                  <p class="card-text"><?= $row["deskripsiberita"] ?>
                  </p>
                  <a href="showberita.php?id=<?= $row["id"]; ?>" class="btn btn-card text-white">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          <?php
            $i++;
          } ?>
        </div>
      </div>
  </section>
  <?php include("footer.php"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
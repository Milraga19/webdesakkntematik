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
                                    <li class="nav-item active">
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
                        <li class="nav-item">
                            <a class="nav-link" href="profil.php">Profil</a>
                        </li>
                        <li class="nav-item active">
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

            <section class="h-100 w-100 bg-white" style="box-sizing: border-box center">
                <div class="content-2-1 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
                    <div class="text-center title-text">
                        <img src="img/default-berita.jpg" alt="img-berita" style="margin-bottom: 15px;">
                        <h1 class="text-title">Judul Berita</h1>
                        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem; margin-bottom: 15px;">
                            mm/dd/yyyy
                        </p>
                        <p align="justify" style="padding: 0 280px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque deserunt eveniet corporis vero, suscipit omnis quidem deleniti temporibus voluptatibus debitis, maxime consequuntur reprehenderit, illo maiores magni ipsam labore aperiam autem minima? Qui, autem corrupti amet omnis reprehenderit dolorum ratione quo itaque quisquam minus quae fugiat consectetur rerum provident laborum labore rem, quos eius dolorem dignissimos architecto? Magnam quidem, cupiditate minima asperiores dicta blanditiis eligendi velit! Blanditiis molestiae, repellendus recusandae adipisci ipsa quo ex architecto necessitatibus minima, hic, nemo tenetur sed! Inventore, quam repellat? Nesciunt accusamus odio, corporis, adipisci illum cumque rerum eveniet vel beatae sapiente excepturi sequi quisquam maiores impedit.</p>
                    </div>
            </section>

            <?php include("footer.php"); ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mustika Offset</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/logo.jpeg" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/style2.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-biru fixed-top" id="mainNav">
        <div class="container navbar-custom">
            <a id="logo" class="navbar-brand" href="#page-top">
                <span><img src="img/logo.jpeg" alt="" srcset=""></span>
                Mustika Offset
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0 ">
                    <li class="nav-item"><a class="nav-link " href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Produk</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#about">About</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#team">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                    <!-- <li class="nav-item"><a class="icon-wa" target="_blank" href="https://bit.ly/chatadminmustika"><i class="fab fa-whatsapp fa-2x"></i></a></li> -->
                </ul>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" target="_blank" href="https://api.whatsapp.com/send/?phone=6281231273767">Admin 1</a></li>
                        <li><a class="dropdown-item" target="_blank" href="https://api.whatsapp.com/send/?phone=6281357000870">Admin 2</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <!-- <script src="js/scripts.js"></script> -->
    <!-- <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 15) {
                $('#navbar').addClass('nav-bg');
            } else {
                $('#navbar').removeClass('nav-bg');
            }
        });
    </script> -->
</body>

</html>
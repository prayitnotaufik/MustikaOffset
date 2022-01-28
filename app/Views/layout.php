<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Anonymous">
    <meta name="generator" content="Anonymous">
    <title>Mustika Offset</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/"> -->



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container px-5 py-3">
                <a class="navbar-brand" href="#">Mustika Offset</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-5" id="navbarCollapse">
                    <div class="ms-auto">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Follow</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kontak</a>
                            </li>
                        </ul>
                        <!-- <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Produk</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Follow</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Profil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                        </li>
                    </ul> -->
                    </div>

                </div>
            </div>
        </nav>
    </header>

    <?= $this->renderSection('content'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- <script src="js/text-anim.js"></script> -->



</body>

</html>
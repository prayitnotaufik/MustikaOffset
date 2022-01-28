<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<main>
    <div class="text-anim text-center">
        <h1>
            <span class="txt-rotate" data-period="1500" data-rotate='[ "Cetak Banner", "Cetak Majalah", "Cetak Kalender", "Cetak Kartu Nama", "Cetak Brosur" ]'></span>
        </h1>
    </div>


    <!-- Marketing messaging and featurettes
        ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1366x720.png?text=Slide+1" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1366x720.png?text=Slide+2" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1366x720.png?text=Slide+3" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container marketing">


        <!-- Three columns of text below the carousel -->
        <div class="row">
            <h1 class="text-center mb-5">Keunggulan Kami</h1>
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777" />
                    <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                </svg>

                <h2>Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first
                    column.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                </svg>

                <h2>Heading</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.
                </p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                </svg>

                <h2>Heading</h2>
                <p>And lastly this, the third column of representative placeholder content.</p>

            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">
        <h1 class="text-center mb-5">Menu</h1>
        <div class="row">
            <div class="col-sm-3 d-flex justify-content-center mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/500.png?text=gambar" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 d-flex justify-content-center mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/500.png?text=gambar" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 d-flex justify-content-center mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/500.png?text=gambar" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 d-flex justify-content-center mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/500.png?text=gambar" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>


        </div>


        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>

<script src="js/text-anim.js"></script>


<?= $this->endSection() ?>
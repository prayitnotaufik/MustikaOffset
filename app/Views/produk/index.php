<!-- Masthead-->
<?= $this->extend('layout2') ?>

<?= $this->section('content') ?>
<header class="">
    <div class="text-anim text-center">
        <div class="row m-3">
            <h1 class="text-atas">Percetakan Offset dan Digital Printing</h1>
        </div>
        <div class="row m-3 anim">
            <h3 class="fw-bolder">
                <span class="txt-rotate" data-period="1000" data-rotate='[ "Cetak Banner..", "Cetak Majalah..", "Cetak Kalender..", "Cetak Kartu Nama..", "Cetak Brosur.." ]'></span>
            </h3>
        </div>
        <div class="row m-3 d-flex justify-content-center">
            <h4 class="text-bawah fw-light">Yang tidak mau macet dan antri, Tidak sempat desain, dan Butuh kepastian harga</h4>
        </div>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <picture>
                    <source media="(min-width: 1200px)" srcset="img/slide2.jpg">
                    <img src="img/mobile2.jpg" class="d-block w-100" alt="...">
                </picture>
            </div>
            <div class="carousel-item">
                <picture>
                    <source media="(min-width: 1200px)" srcset="img/slide3.jpg">
                    <img src="img/mobile3.jpg" class="d-block w-100" alt="...">
                </picture>
            </div>
            <div class="carousel-item">
                <picture>
                    <source media="(min-width: 1200px)" srcset="img/slide4.jpg">
                    <img src="img/mobile4.jpg" class="d-block w-100" alt="...">
                </picture>
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
    <!-- <div class="container">
        <div class="masthead-subheading">Welcome To Our Studio!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
    </div> -->
</header>
<!-- Services-->
<main>
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Layanan</h2>
                <h3 class="section-subheading text-muted">Kami menyediakan layanan terbaik untuk para customer</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-cogs fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Cetak Offset</h4>
                    <p class="text-muted">Di antara semua teknik percetakan, offset merupakan teknik yang memiliki kualitas tinggi dan konsistensi yang baik untuk mencetak dalam skala besar.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Free Desain</h4>
                    <p class="text-muted">Ingin mencetak tapi belum ada desain? Tenang, kami juga menyediakan jasa desain untuk memudahkan para customer untuk mencetak produk.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-check fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Kualitas Terjamin</h4>
                    <p class="text-muted">Dengan komposisi mesin cetak dan bahan yang berkualitas, kami menjamin bahwa hasil cetak dari Mustika Offset terjamin kualitasnya.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Produk</h2>
                <h3 class="section-subheading text-muted">Berikut produk yang kami tawarkan</h3>
            </div>
            <div class="row">
                <?php foreach ($produk as $p) : ?>
                    <div class="col-lg-4 col-sm-6 col-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link d-flex justify-content-center" data-bs-toggle="modal" href="#produkModal<?= $p['id'] ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-search-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/<?= $p['gambar']; ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">
                                    <h6><?= $p['nama']; ?></h6>
                                </div>
                                <div class="portfolio-caption-subheading">
                                    <p class="text-muted"><small>Harga mulai Rp.<?= $p['harga']; ?>,-/pcs</small></p>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="portfolio-modal modal fade" id="produkModal<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modalku">
                                <div class="modal-content">
                                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="modal-body">
                                                    <!-- Project details-->
                                                    <h2 class="text-uppercase"><?= $p['nama']; ?></h2>
                                                    <p class="item-intro text-muted">Harga mulai Rp <?= $p['harga']; ?>,-/pcs</p>
                                                    <img class="img-fluid d-block mx-auto" src="img/<?= $p['gambar']; ?>" alt="..." />
                                                    <ul class="list-inline">
                                                        <li>
                                                            <strong>Category:</strong>
                                                            <?= $p['kategori']; ?>
                                                        </li>
                                                    </ul>
                                                    <p><?= $p['deskripsi']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!-- About-->
    <!-- <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2009-2011</h4>
                            <h4 class="subheading">Our Humble Beginnings</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>March 2011</h4>
                            <h4 class="subheading">An Agency is Born</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>December 2015</h4>
                            <h4 class="subheading">Transition to Full Service</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>July 2020</h4>
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section> -->
    <!-- Team-->
    <section class="page-section bg-offwhite" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Profil Mustika Offset</h2>
                <h3 class="section-subheading text-muted">Profil singkat mustika offset.</h3>
            </div>
            <div class="container mb-5">
                <div class="row">
                    <h3>Sejarah singkat</h3>
                </div>
                <div class="row profil">
                    <div class="col-lg-6 col-md-12 col-12 overflow-hidden mt-3">
                        <img class="" src="../img/profil3.jpg" alt="" width="100%">
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 mt-3 fw-light">
                        <p>
                            Kami adalah perusahaan yang bergerak di bidang Jasa Percetakan. Kami berdiri sejak tahun 2003 di Kota Mojosari - Mojokerto. Berlokasikan di Kelurahan Mojosari Kecamatan Mojosari Kabupaten Mojokerto.
                        </p>
                        <p>
                            Didukung oleh tenaga yang mumpuni dibidangnya dan peralatan yang lengkap, kami berusaha untuk memberikan pelayanan yang terbaik dan hasil yang maksimal dan tentunya semua itu adalah untuk kepuasan konsumen.
                        </p>
                        <p>
                            Dengan bekal pengalaman selama lebih dari 10 tahun di bidang jasa percetakan, kami akan berikan pelayanan yang maksimal guna mendukung aktivitas kerja dan juga promosi para konsumen kami, baik pada perusahaan ataupun instansi pemerintah maupun swasta.
                        </p>
                    </div>
                </div>
                <div class="row visi text-center">
                    <div class="col-md-6 p-5">
                        <h3>Visi</h3>
                        <div class="border p-5 fst-italic">
                            Menjadi Percetakan yang terus berkembang dan menjadi pionir dalam melayani konsumen
                        </div>
                    </div>
                    <div class="col-md-6 p-5">
                        <h3>Misi</h3>
                        <div class="border p-5 fst-italic">
                            Mengembangkan produk jasa cetak
                            Mengembangkan jaringan pelayanan secara terpadu
                            Memperbesar pangsa pasar
                            Memberikan kepuasan bagi pelanggan dan mitra usaha
                        </div>
                    </div>
                </div>
                <div class="row galeri">
                    <h3 class="text-center my-5">Galeri</h3>
                    <div class="col-md-3 col-6">
                        <img src="img/galeri1.jpg" class=" mx-auto d-block" alt="...">
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="img/galeri3.jpg" class=" mx-auto d-block" alt="...">
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="img/galeri4.jpg" class=" mx-auto d-block" alt="...">
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="img/galeri5.jpg" class=" mx-auto d-block" alt="...">
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="img/galeri6.jpg" class=" mx-auto d-block" alt="...">
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="img/galeri7.jpg" class=" mx-auto d-block" alt="...">
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="img/galeri8.jpg" class=" mx-auto d-block" alt="...">
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="img/galeri9.jpg" class=" mx-auto d-block" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section bg-light" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Kontak Kami</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row align-items-stretch mb-5">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 overflow-hidden maps" id="maps">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=cv%20mustika%20percetakan%20mojosari&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 100%;
                                }
                            </style><a href="https://www.embedgooglemap.net">google map for websites</a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 450px;
                                    width: 100%;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="row mb-5">
                        <div class="col-md-2 col-sm-2 col-2 text-center">
                            <i class="fas fa-map-marked-alt fa-3x"></i>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10">
                            <h6 class="my-auto">Alamat</h6>
                            <p class="my-auto">
                                <small class="text-muted">
                                    Jl. A. Yani No.122, Sambikerep, Pekukuhan, Kec. Mojosari, Kabupaten Mojokerto, Jawa Timur
                                </small>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-2 col-sm-2 col-2 text-center">
                            <i class="fas fa-envelope-open-text fa-3x"></i>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 ">
                            <h6 class="my-auto">Email</h6>
                            <p class="my-auto">
                                <small class="text-muted">
                                    mustikagrup@hotmail.com / grupmutika@gmail.com
                                </small>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-2 col-sm-2 col-2 text-center">
                            <i class="fas fa-phone fa-3x"></i>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 ">
                            <h6 class="my-auto">Telepon</h6>
                            <p class="my-auto">
                                <small class="text-muted">
                                    (0321) 6854072
                                </small>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-2 col-sm-2 col-2 text-center">
                            <i class="fab fa-whatsapp fa-3x"></i>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10">
                            <h6 class="my-auto">Whatsapp</h6>
                            <p class="my-auto">
                                <small class="text-muted">
                                    +62 822-4520-1760
                                </small>
                            </p>
                            <p class="my-auto">
                                <small class="text-muted">
                                    +62 812-3127-3767
                                </small>
                            </p>
                            <p class="my-auto">
                                <small class="text-muted">
                                    +62 813-5700-0870
                                </small>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-2 col-sm-2 col-2 text-center">
                            <i class="fas fa-mobile-alt fa-3x"></i>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10">
                            <h6 class="my-auto">HP</h6>
                            <p class="my-auto">
                                <small class="text-muted">
                                    0822-4520-1760
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4 bg-offwhite">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; www.mustikaoffset.com</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/mustikaoffset"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
</main>

<script src="js/text-anim.js"></script>
<?= $this->endSection();; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/"> -->



    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

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
    <link href="../css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Mustika Offset</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Dashboard Admin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">
                                <span data-feather="bookmark"></span>
                                Halaman Depan
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>
                <div class="div mb-3">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Produk</button>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="col-md-3">
                            <div class="alert alert-success alert-dismissible mt-3" role="alert" id="liveAlert">
                                <strong><?= session()->getFlashdata('pesan'); ?></strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    <?php endif ?>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/produk/addProduk" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Produk</label>
                                            <input type="text" class="form-control" id="nama" name="nama" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="harga" class="form-label">Harga</label>
                                            <input type="number" class="form-control" id="harga" name="harga" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kategori" class="form-label">Kategori</label>
                                            <input type="text" class="form-control" id="kategori" name="kategori" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                                            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Upload Gambar</label>
                                            <input class="form-control" type="file" id="formFile" name="gambar">
                                        </div>
                                        <button type="submit" class="btn btn-primary float-end">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive col-md-9">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($produk as $p) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $p['nama']; ?></td>
                                    <td>Rp<?= $p['harga']; ?>,-</td>
                                    <td><?= $p['kategori']; ?></td>
                                    <td>
                                        <img src="../img/<?= $p['gambar']; ?>" alt="" srcset="" width="100">
                                    </td>
                                    <td>
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal<?= $p['id'] ?>">Edit</button>
                                        <a href=" delete/<?= $p['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</a>
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="editModal<?= $p['id'] ?>" tabindex="-1" aria-labelledby="editModal<?= $p['id'] ?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/produk/updateProduk/<?= $p['id']; ?>" method="POST" enctype="multipart/form-data">
                                                        <?= csrf_field(); ?>
                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama Produk</label>
                                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $p['nama']; ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="harga" class="form-label">Harga</label>
                                                            <input type="number" class="form-control" id="harga" name="harga" value="<?= $p['harga']; ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="kategori" class="form-label">Kategori</label>
                                                            <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $p['kategori']; ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                                                            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"><?= $p['deskripsi']; ?></textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">Upload Gambar</label>
                                                            <input class="form-control" type="file" id="formFile" name="gambar">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary float-end">Simpan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/dashboard.js"></script>
</body>

</html>
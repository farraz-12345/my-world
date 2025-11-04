<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form tambah produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar bg-light fixed-top">
        <!-- sidebar -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UTS LARAVEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UTS LARAVEL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produk</a>
                        </li>

                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 80px;">
        <h1>tambah produk</h1>

        <form action="" class="row">
            <div class="col-4 mb-1">
                <label for="kode_produk" class="form-label">Kode Produk</label>
                <input type="text" id="kode_produk" class="form-control" placeholder="Input Kode Produk">
            </div>
            <div class="col-4 mb-1">
                <label for="nama_produk" class="form-label">nama Produk</label>
                <input type="text" id="nama_produk" class="form-control" placeholder="Input nama Produk">
            </div><div class="col-4 mb-1">
                <label for="jenis_produk" class="form-label">Jenis Produk</label>
                 <select id="jenis_produk" class="form-control">
                     <option selected value="">Pilih Produk</option>
                    @foreach ($products_type as $product_type)
                    <option value="">{{ $product_type['jenis'] }}</option>
                     @endforeach
            </select>
            </div>
            <div class="col-6 mb-1">
                <label for="input_harga" class="form-label">harga</label>
                <input type="text" id="input_harga" class="form-control" placeholder="Input harga">
            </div>
            <div class="col-6 mb-1 d-flex align-items-end">
            <button class="btn btn-success" style="width: 100%;">Simpan</button>
            </div>

            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
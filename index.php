<!doctype html>
<html lang="en">

<head>
    <title>projectklmpk1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="/prjectklmpk1" class="class-link">HOME &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/prjectklmpk1/index.php/pasien" class="class-link">PASIEN &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/prjectklmpk1/index.php/laboraturium" class="class-link">LABORATURIUM &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/prjectklmpk1/index.php/transaksi" class="class-link">TRANSAKSI &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/prjectklmpk1/index.php/transaksi_detail" class="class-link">TRANSAKSI DETAIL&#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/prjectklmpk1/index.php/tindakan_detail" class="class-link">TINDAKAN DETAIL &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/prjectklmpk1/index.php/kasir_detail" class="class-link">KASIR DETAIL &#160;&#160;&#160;</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="mt-6" role=main>
        <div class="container">
            <div class="col-md-12">
                <div class="row" style="margin-top: 75px !important;">
                    <?php
                    $location = "/prjectklmpk1";
                    $me = $location;
                    $request = $_SERVER['REQUEST_URI'];
                    switch ($request) {
                        case $me . '/':
                            break;
                        case $me . '/index.php/pasien':
                            require "layout/pasien.php";
                            break;
                        case $me . '/index.php/pasien/add':
                            require "layout/tambah_pasien.php";
                            break;
                        case $me . '/index.php/laboraturium':
                            require "layout/laboraturium.php";
                            break;
                        case $me . '/index.php/laboraturium/add':
                            require "layout/tambah_laboraturium.php";
                            break;
                        case $me . '/index.php/transaksi':
                            require "layout/transaksi.php";
                            break;
                        case $me . '/index.php/transaksi/add':
                            require "layout/tambah_transaksi.php";
                            break;
                        case $me . '/index.php/transaksi_detail':
                            require "layout/transaksi_detail.php";
                            break;
                        case $me . '/index.php/transaksi_detail/add':
                            require "layout/tambah_transaksi_detail.php";
                            break;
                        case $me . '/index.php/tindakan_detail':
                            require "layout/tindakan_detail.php";
                            break;
                        case $me . '/index.php/tindakan_detail/add':
                            require "layout/tambah_tindakan_detail.php";
                            break;
                        case $me . '/index.php/kasir_detail':
                            require "layout/kasir_detail.php";
                            break;
                        case $me . '/index.php/kasir_detail/add':
                            require "layout/tambah_kasir_detail.php";
                            break;
                        default:
                            http_response_code(404);
                            echo "404";
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
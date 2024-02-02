<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</head>
<body>
    <?php include "nav.php"; ?>
    <!-- HEADER -->
    <div class="row">
        <div class="col-8">
        <img src="assets/img/header1.png" alt="" style="width: 100%; height: 460px">
        </div>
        <div class="col-4">
        <img src="assets/img/header2.png" alt="" style="width: 100%; height: 230px;">
        <br>
        <div class="text-center mt-3" style="width: 100%; height: 215px; background-color: rgb(241, 205, 85);">
        <br><h6 class="pt-5">Selamat Datang di Rara Bakery</h6>
        <a href="#home" class="mt-3 btn btn-dark">More</a>
        </div>
        </div>
    </div>
    <!-- KATEGORI -->
    <div class="container">
    <center><br><br><br><br><br><h3 id="home">PRODUK</h3><br><br></center>
    <div class="mx-auto row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/birthcake16.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Cake</h5>
                    <p class="card-text">Tersedia berbagai varian cake.</p>
                    <a href="kategori.php?id_kategori=1" class="btn btn-dark m-2">More</a>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="card" style="width: 18rem;">
                <img src="assets/img/chickenbun.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Roti</h5>
                    <p class="card-text">Tersedia berbagai varian roti.</p>
                    <a href="kategori.php?id_kategori=2" class="btn btn-dark m-2">More</a>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="card" style="width: 18rem;">
                <img src="assets/img/tumpeng.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Jajanan Pasar</h5>
                    <p class="card-text">Tersedia berbagai varian pasar.</p>
                    <a href="kategori.php?id_kategori=3" class="btn btn-dark m-2">More</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br><br><br><br><br>  
    <?php include "footer.php"; ?>
</body>
</html>
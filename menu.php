<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</head>
<body>
    <?php include "nav.php"; ?>
    <br><h3 class="text-center">Produk</h3><br>
    <div class="container row m-2  mx-auto">
    <?php
            $query = mysqli_query($konek, "SELECT * FROM produk");
            while($data=mysqli_fetch_array($query))
        {
    ?>
    <div class="col-3 my-3">
    <div class="card" style="width: 15rem;">
    <img src="assets/img/<?php echo $data['gambar_produk']?>" class="card-img-top" alt="">
    <h6 class="ps-2 pb-2 pt-2"><?php echo $data['nama_produk']; ?></h6>
    <h6 class="ps-2 pt-0 pb-2"><?php echo "Rp. ".number_format($data['harga_produk'],2,',','.'); ?></h6>
    <a href="detailproduk.php?id_produk=<?php echo $data['id_produk'];?>" class="btn btn-dark m-2">Detail Produk</a>
    </div>
    </div>
    <?php } ?>
    </div>
    <br><br><br><br><br><br>  
    <?php include "footer.php"; ?>
</body>
</html>
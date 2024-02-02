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
    <?php include "nav.php"; 
    $id_produk=$_GET['id_produk'];
    $query=mysqli_query($konek, "SELECT * from produk where id_produk='$id_produk'");
    ?>
    <div class="container mx-auto m-2">
    <div class="card mx-auto text-center" style="width: 18rem;">
    <?php while($data=mysqli_fetch_array($query))
    {
    ?>
    <img src="assets/img/<?php echo $data['gambar_produk']; ?>" alt="">
    <h5><?php echo $data['nama_produk']; ?></h5>
    <h6><?php echo $data['harga_produk']; ?></h6>
    <form action="prosescart.php" method="GET">
        <input type="hidden" name="id_produk" id="" value="<?php echo $id_produk;?>">
        <input type="hidden" name="harga_produk" id="" value="<?php echo $data['harga_produk'];?>">
        <div class="row">
            <div class="col-6">
                <input type="number" name="jumlah" style="width: 80%;" class="form-control ms-auto mb-2">
            </div>
            <div class="col-6">
                <input type="submit" value="Add to Cart" style="width: 80%;" class="btn btn-dark me-auto mb-2">
            </div>
        </div>
    </form>
    <?php } ?>
    </div>
    </div>
    <br><br><br><br><br><br>  
    <?php include "footer.php"; ?>
</body>
</html>
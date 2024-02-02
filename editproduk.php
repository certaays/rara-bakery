<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Admin</title>
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</head>
<body>
    <?php include "navadmin.php"; 
        $id_produk=$_GET['id_produk'];
        $query=mysqli_query($konek, "SELECT * from produk where id_produk='$id_produk'");
        $data =mysqli_fetch_array($query);
    ?>

    <header align=center><h3 class="pb-2 pt-2">Edit Data Produk</h3></header>

    <div class="container mt-4" align=center>
        <div class="card" style="border: none; width: 50rem;" align=left>
            <form action="proseseditproduk.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>"></br>
                <div class="form-group row">
                        <label for="nama_produk" class="col">Nama Produk</label>
                        <div class="col-sm-8">
                        <input type="text" value="<?php echo $data['nama_produk'];?>" name="nama_produk" id="nama_produk" placeholder="Nama Produk" class="form-control" required="required">
                        </div>
                </div>
                <div class="form-group row mt-4">
                        <label for="deskripsi" class="col">Deskripsi</label>
                        <div class="col-sm-8">
                        <input type="text" value="<?php echo $data['deskripsi_produk'];?>" name="deskripsi_produk" id="deskripsi" placeholder="Deskripsi Produk" class="form-control" required="required">
                        </div>
                </div>
                <div class="form-group row mt-4">
                        <label for="harga" class="col">Harga Produk</label>
                        <div class="col-sm-8">
                        <input type="number" value="<?php echo $data['harga_produk'];?>" name="harga_produk" id="harga" placeholder="Harga Produk" class="form-control" required="required">
                        </div>
                </div>
                <div class="form-group row mt-4">
                        <label class="col">Gambar Produk</label>
                        <div class="col-sm-8">
                        <input type="file" name="gambar_produk" required="required" class="form-control">
                        <p style="color: blue;">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                        </div>
                </div>
                <div class="form-group row mt-4">
                        <label for="kategori" class="col">Kategori</label>
                        <div class="col-sm-8">
                        <select name="kategori" id="kategori" class="form-select">
                            <option value="1" <?php if($data['id_kategori']=="1") echo "selected";?>>Cake</option>
                            <option value="2" <?php if($data['id_kategori']=="2") echo "selected";?>>Roti</option>
                            <option value="3" <?php if($data['id_kategori']=="3") echo "selected";?>>Jajanan Pasar</option>
                        </select>
                        </div>
                </div>
                <div class="form-group row mt-4">
                        <div class="col"></div>
                        <div class="col-sm-8">
                        <input type="submit" name="submit" id="" class="ms-3 me-3 btn btn-dark" value="Input">
                        <a href="produkadmin.php" class="btn btn-dark">Batal</a>
                        </div>
                </div>
            </form>
        </div>
    </div>
    <br><br><br><br><br><br>  
    <?php include "footer.php"; ?>
</body>
</html>
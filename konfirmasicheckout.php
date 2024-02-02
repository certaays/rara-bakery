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
    $email=$_SESSION['email'];
    if(!empty($_SESSION['email']))
    {
        $query = mysqli_query($konek, "SELECT * FROM user where email='$email'");
        $data2=mysqli_fetch_array($query);
        $id_user=$data2['id_user'];
        $hargaakhir=0;
    } 
    else
    { 
        header("location:login.php?pesan=belum_login");
    }
    ?>
    <div class="container">
    <br><h3 class="text-center">Daftar Belanja</h3><br>
    <table border="1" class="mx-auto">
        <tr align=center  cellpadding=4>
            <th class="pt-2 pb-2" width="30%">Nama Produk</th>
            <th class="pt-2 pb-2" width="30%">Harga Satuan</th>
            <th class="pt-2 pb-2" width="30%">Jumlah</th>
            <th class="pt-2 pb-2" width="30%">Harga Total</th>
        </tr>
    <?php
    $query=mysqli_query($konek, "SELECT * FROM cart AS c, produk AS p, user AS u WHERE c.id_produk=p.id_produk && c.id_user=$id_user && u.id_user=c.id_user");
    while($data=mysqli_fetch_array($query))
    { ?>    
    <tr align=center>
                <td><?php echo $data['nama_produk'];?></td>
                <td><?php echo "Rp. " . number_format($data['harga_produk'],2,',','.');?></td>
                <td><?php echo $data['jumlah'];?></td>
                <td><?php echo "Rp. " . number_format($data['hargatotal'],2,',','.'); ?></td>
                <?php $hargaakhir= $hargaakhir+$data['hargatotal'];?>
    <?php } ?>
            </tr>
    </table>
    <center><h6 class="m-1"><?php echo "Total Rp. " . number_format($hargaakhir,2,',','.'); ?></h6></center>
    </div>
    <div class="container mb-5 ms-5 me-5 mt-3">
    <div class="ms-5">
    <h5>Data Diri</h5>
    <div class="ms-2 mb-2">
    <h6>Nama</h6>
    <p><?php echo $data2['nama_user'];?></p>
    <h6>Alamat</h6>
    <?php 
    if(!empty($data2['alamat']))
    { ?>
        <p><?php echo $data2['alamat']; ?></p>
        <a href="profil.php">Edit</a>
    <?php }
    else
    { ?>
        <p>Alamat anda masih kosong silahkan isi alamat terlebih dahulu</p>
        <a href="profil.php">Isi</a>
    <?php }
    ?>
    <h6>Nomor HP</h6>
    <?php 
    if(!empty($data2['no_hp']))
    { ?>
        <p><?php echo $data2['no_hp']; ?></p>
        <a href="profil.php">Edit</a>
    <?php }
    else
    { ?>
        <p>Alamat anda masih kosong silahkan isi alamat terlebih dahulu</p>
        <a href="profil.php">Isi</a>
    <?php }
    ?>
    </div>
    </div>
    </div>
    <center><a href="hapuscekout.php" class="btn btn-dark">Checkout</a></center>
    <br><br><br><br><br><br>  
    <?php include "footer.php"; ?>
</body>
</html>
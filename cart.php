<?php
    if(isset($_GET['message']))
    { ?>
    <script type="text/javascript">
        alert("Terimakasih telah membeli produk dari Rara Bakery. Pesanan Anda akan segera diproses, mohon tunggu email konfirmasi dari kami.");
    </script>
    <?php }
?>
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
    <?php 
    include "nav.php";
    $email=$_SESSION['email'];
    if(!empty($_SESSION['email']))
    {
        $query = mysqli_query($konek, "SELECT * FROM user where email='$email'");
        while($data2=mysqli_fetch_array($query)){
        $id_user=$data2['id_user'];
        } 
        $hargaakhir=0;
    } 
    else
    { 
        header("location:login.php?pesan=belum_login");
    } 
    ?>
    <?php
    $query=mysqli_query($konek, "SELECT * FROM cart AS c, produk AS p WHERE c.id_produk=p.id_produk && c.id_user=$id_user");
    
    $row_check = mysqli_num_rows($query);
    if($row_check>0){
     ?>
    <div class="container">
    <br><h3 class="text-center">Cart</h3><br>
    <table border="1" class="mx-auto">
        <tr align=center  cellpadding=4>
            <th class="pt-2 pb-2" width="20%">Nama Produk</th>
            <th class="pt-2 pb-2" width="20%">Harga Satuan</th>
            <th class="pt-2 pb-2" width="20%">Jumlah</th>
            <th class="pt-2 pb-2" width="20%">Harga Total</th>
            <th class="pt-2 pb-2" width="20%">Hapus</th>
        </tr>
        <?php while($data=mysqli_fetch_array($query))
        { ?>   
    <tr align=center>
                <td><?php echo $data['nama_produk'];?></td>
                <td><?php echo "Rp. " . number_format($data['harga_produk'],2,',','.');?></td>
                <td>
                <form action="editcart.php" method="POST">
                    <input type="hidden" name="id_cart" value="<?php echo $data['id_cart']?>">
                    <input type="hidden" name="harga_produk" value="<?php echo $data['harga_produk']?>">
                    <div class="row">
                        <div class="col m-0">
                        <input type="number" name="jumlah" id="" style="width: 100%;" value="<?php echo $data['jumlah'];?>" class="form-control">    
                        </div>
                        <div class="col m-0">
                        <input type="submit" name="" id="" value="update" class="btn btn-dark" style="width: 90%;"></form></td>
                        </div>
                    </div>
                <td><?php echo "Rp. " . number_format($data['hargatotal'],2,',','.'); ?></td>
                <td><a href="hapuscart.php?id_cart=<?php echo $data['id_cart']?>">hapus</a></td>
                <?php $hargaakhir= $hargaakhir+$data['hargatotal'];?>
        <?php } ?>
            </tr>
    </table>
    <center><h6 class="m-1"><?php echo "Total Rp. " . number_format($hargaakhir,2,',','.'); ?></h6></center>
    </div>
    <center><a href="konfirmasicheckout.php" class="btn btn-dark mx-auto mt-5">Checkout</a></center>
   <?php } else { ?> <br><br><br><br><br><br><br><br><h6 class="text-center">Cart kosong, silakan <a href="menu.php">belanja</a></h6>
    <?php } ?> 
    <br><br><br><br><br><br><br><br><br>  
    <?php include "footer.php"; ?>
</body>
</html>
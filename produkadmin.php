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
    <?php include "navadmin.php"; ?>

    <br><div class="container">
    <center>
    <h3>Daftar Produk Rara Bakery</h3><br>
    <table border="1">
        <tr align=center  cellpadding=4>
            <th class="pt-2 pb-2" width="4%">No</th>
            <th class="pt-2 pb-2" width="16%">Nama Produk</th>
            <th class="pt-2 pb-2" width="16%">Deskripsi</th>
            <th class="pt-2 pb-2" width="16%">Harga</th>
            <th class="pt-2 pb-2" width="16%">Gambar</th>
            <th class="pt-2 pb-2" width="16%">Kategori</th>
            <th class="pt-2 pb-2" width="16%">Aksi</th>
        </tr>

        <?php
            include 'koneksi.php';
            $hrgakhir=0;
            $i = 1;
            $query = mysqli_query($konek, "SELECT * FROM produk");
            while($data=mysqli_fetch_array($query))
        {
        ?>
            <tr align=center>
                <td><?php echo $i++; ?></td>            
                <td><?php echo $data['nama_produk'];?></td>
                <td><?php echo $data['deskripsi_produk'];?></td>
                <td><?php echo "Rp. " . number_format($data['harga_produk'],2,',','.');?></td>
                <td><img src="assets/img/<?php echo $data['gambar_produk'];?>" alt="" style="width:55px; height: 55px;"></td>
                <td><?php if($data['id_kategori']==1)
                {
                    $kategori="Cake";
                }
                else if($data['id_kategori']==2)
                {
                    $kategori="Roti";
                }
                else if($data['id_kategori']==3)
                {
                    $kategori="Jajanan Pasar";
                }
                echo $kategori;
                ?>
                </td>
                <td><a class="btn btn-dark me-2" style="width: 40%; font-size:10pt;" href=editproduk.php?id_produk=<?php echo $data['id_produk'];?>>Edit</a>
                <a class="btn btn-dark" style="width: 40%; font-size:10pt;" href=hapusproduk.php?id_produk=<?php echo $data['id_produk'];?>>Hapus</a>
                </td>
                <!-- <td><a class="btn btn-dark me-2" style="width: 40%; font-size:10pt;" href=edit.php?kode_barang=<?php //echo $data['kode_barang'];?>>Edit</a> -->
                <!-- <a class="btn btn-dark" style="width: 40%; font-size:10pt;" href=konfirmasihapus.php?kode_barang=<?php //echo $data['kode_barang'];?>>Hapus</a></td> -->
        <?php }
        ?>
            </tr>
    </table>
    <!-- <p>Total Inventaris = Rp. <?php //echo number_format($hrgakhir,2,',','.'); ?></p> -->
    </center>
    <br><a href="inputproduk.php" class="btn btn-dark ms-3 mt-3 mb-5">+Tambah</a><br>
    </div><br><br><br><br><br>

    <?php include "footer.php"; ?>
</body>
</html>
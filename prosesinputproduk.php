<?php
session_start(); 
include 'koneksi.php';
$nama_produk= $_POST['nama_produk'];
$deskripsi_produk = $_POST['deskripsi_produk'];
$harga_produk = $_POST['harga_produk'];
$kategori = $_POST['kategori'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar_produk']['name'];
$ukuran = $_FILES['gambar_produk']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:produkadmin.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['gambar_produk']['tmp_name'], 'assets/img/'.$rand.'_'.$filename);
		mysqli_query($konek, "INSERT INTO produk VALUES(NULL,'$nama_produk','$deskripsi_produk','$harga_produk','$xx','$kategori')");
		header("location:produkadmin.php");
	}else{
		echo "gagal_ukuran";
		//header("location:index.php?alert=gagal_ukuran");
	}
}
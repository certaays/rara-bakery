<?php include "koneksi.php"; ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a href=""><img src="assets/img/logo.png" alt="" style="width:160px; height:55px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto me-5 mb-2 mb-lg-0">
        <!-- <li class="nav-item me-3">
          <a class="nav-link" href="admin.php">Home</a>
        </li> -->
        <li class="nav-item me-3">
          <a class="nav-link" href="inputproduk.php">Input Produk</a>
        </li>
          <!-- <li class="nav-item dropdown me-3">
           <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="menu.php">All</a></li>
               <li><a class="dropdown-item" href="kategori.php?id_kategori=1">Cake</a></li>
               <li><a class="dropdown-item" href="kategori.php?id_kategori=2">Roti</a></li>
               <li><a class="dropdown-item" href="kategori.php?id_kategori=3">Jajanan Pasar</a></li>
              </ul>
        </li> -->
        <li class="nav-item me-3">
          <a class="nav-link" href="produkadmin.php">Produk</a>
        </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <?php
                session_start();
                if(empty($_SESSION['email'])){
                    ?>
                  <li class="nav-item dropdown me-5">
                  <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-user"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="regist.php">Register</a></li>
                    <li><a class="dropdown-item" href="login.php">Sign In</a></li>
                  </ul>
                </li>
              <?php
                } else{
                $email = $_SESSION['email'];
                ?>
              <li class="nav-item me-3">
                <a class="nav-link" href="profiladmin.php"><i class="fa fa-user"></i></a>
              </li>
              <?php } ?>
      </ul>
    </div>
  </div>
</nav>
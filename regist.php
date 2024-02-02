<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <title>Sign Up</title>
</head>
<body>
    <br><br>
    <center><br><br><br>
    <div class="card" style="width:30rem;">
    <h2 class="mt-2 font-fair">Register</h2>
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "Maaf email telah digunakan!";
            }
        }
    ?>
        <form action="registcheck.php" method="POST">
        <input type="text" name="nama" placeholder="Fullname" class="form-control mt-3 font-sans" style="width:20rem;" required>
        <input type="text" name="email" placeholder="E-mail" class="form-control mt-3 font-sans" style="width:20rem;" required>
        <input type="password" name="password" placeholder="Password" class="form-control mt-3 font-sans" style="width:20rem;" required>
        <button type="submit" name="submit" class="btn btn-dark mt-4 font-sans">Sign Up</button><br>
    </form>
    <p class="mt-3 font-sans">Already have an account ? <a href="login.php">Login</a></p>
    </div>
    </center>
</body>
</html>
<?php 
session_start();
if (isset($_SESSION['username'])) {
    header("Location: ../");
}
?>
<script>if ( window.history.replaceState ) {
 window.history.replaceState( null, null, window.location.href );
}
</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" type="text/css" href="login.css">
 
    <title>Login</title>
</head>
<body>

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="" required>
            </div>
            <div class="input-group">
            <input type="number" placeholder="Phone" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==15) return false;" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $_SESSION["username"] = $_POST['username'];
                $_SESSION["priv"] = 'user'; 
                $_SESSION["nama"] = $_POST['nama'];
                header("Location: ../");
            }
            if (isset($_SESSION['username'])){
                header("Location: ../");
            }
        ?> 
        </form>
        <br>udah punya akun? <a href="." style="text-decoration:none">Login</a>
    </div>
</body>
</html>
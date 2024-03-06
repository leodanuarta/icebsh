<?php 

// session_set_cookie_params(120);
session_start();

// Cek apakah session sudah expired
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
    session_unset();     // Hapus semua data session
    session_destroy();   // Hapus session data dari penyimpanan
    header("Location: login.php");  // Redirect ke halaman login
    exit();
}

// Update waktu aktivitas terakhir
$_SESSION['last_activity'] = time();


// include_once("login.php");
echo "<h1>INI SUDAH LOGIN</h1>";

if (!isset($_SESSION["username"])) {
    header("Location:login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action='logoutAction.php' method="POST"><button type="submit" name="btnLogout">LOGOUT</button></form>
<?php echo "Selamat datang, " . $_SESSION['username'];  ?>
</body>
</html>




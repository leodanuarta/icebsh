<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "icaste";
    $conn =new mysqli_connect($host,$user,$pass,$db);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    echo "Koneksi berhasil";

    // Tutup koneksi
    // $conn->close();

?>
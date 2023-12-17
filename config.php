<?php 
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'nakamaDB';

    // password pada connection tidak diset untuk kemudahan dalam proses login

    // bagian ini berguna untuk memeriksa koneksi
    $connect = mysqli_connect($host, $user, "", $db);
    if(!$connect) {
        die("Gagal melakukan koneksi :".mysqli_connect_error());
    }

?>
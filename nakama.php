<!-- file ini berguna untuk manajemen list karakater yang diinputkan oleh pengguna -->
<?php 
session_start();
include "config.php";

// memeriksa cookie
if (!isset($_COOKIE['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
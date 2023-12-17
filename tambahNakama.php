<?php 
include "config.php";

if (isset($_POST["id"]) && isset($_POST["karakter_favorit"]) && isset($_POST["usia_karakter"]) && isset($_POST["devilfruit"]) && isset($_POST["asal_krew"]) && isset($_POST["nilai_bounty"])) {
    $id = mysqli_real_escape_string($connect, $_POST["id"]);
    $karakter_favorit = mysqli_real_escape_string($connect, $_POST["karakter_favorit"]);
    $usia_karakter = mysqli_real_escape_string($connect, $_POST["usia_karakter"]);
    $devilfruit = mysqli_real_escape_string($connect, $_POST["devilfruit"]);
    $asal_krew = mysqli_real_escape_string($connect, $_POST["asal_krew"]);
    $nilai_bounty = mysqli_real_escape_string($connect, $_POST["nilai_bounty"]);

    
}
?>

<!-- (`id`, `karakter_favorit`, `usia_karakter`, `devilfruit`, `asal_krew`, `nilai_bounty`) -->
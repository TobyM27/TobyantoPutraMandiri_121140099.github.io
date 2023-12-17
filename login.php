<?php 
session_start();
include "config.php";

$response = array("success" => false, "pesan" => "");

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username)) {
        $_SESSION['error'] = "Diperlukan username!";
    } else if (empty($password)) {
        $_SESSION['error'] = "Diperlukan password!";
    } else {
        $sql = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                $response['success'] = true;
                $response['message'] = "Login berhasil!";
            } else {
                $_SESSION['error'] = "Username dan/atau Password yang anda inputkan tidak sesuai!";
            }
        } else {
            $_SESSION['error'] = "Username dan/atau Password yang anda inputkan tidak sesuai!";
        }
    }
} else {
    $_SESSION['error'] = "Anda melakukan request yang invalid";
}

echo json_encode($response);
?>
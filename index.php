<?php 
session_start();

// include'../connection.php'; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Website Nakama One Piece </title>
</head>
<body>
    <p class="info-login"> Berikut merupakan credential bawaan <br> Username : Nakama <br> Password : May5 </p> 
    
    <form action="login.php" method="post">
        <!-- Buat image nakama disini dengan photo luffy <img src> -->
        <h2> Login untuk jadi Nakama Luffy </h2>
        <?php if (isset($_SESSION['Error'])) { ?>
            <p class="Error">
                <?php echo $_SESSION['Error']; ?>
            </p> 
            <?php unset($_SESSION['Error']); ?>
        <?php } ?>
        <label> Username : </label>
        <input type="text" name="username" placeholder="Inputkan username">

        <label> Password : </label>
        <input type="password" name="password" placeholder="Inputkan password">

        <button type="submit">Login</button>
    </form>
</body>
</html>
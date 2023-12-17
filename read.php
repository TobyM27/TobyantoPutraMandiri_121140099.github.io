<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Website Nakama One Piece </title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="search" id="search">
        <input type="submit" name="submit" value="Cari">
    </form><br>

    <script>
        function forCreate() {
            let html = `
                <form class="inputValue" action="create.php" method="POST">
                    <div class="inputform">
                        <label for="">ID</label><span>:</span> 
                        <input type="number" name="id" id="id" placeholder="contoh : 1" required>
                    </div>

                    <div class="inputform">
                        <label for="">Karakter Favorit</label><span>:</span> 
                        <input type="text" name="karakter_favorit" id="karakter_favorit" required>
                    </div>

                    <div class="inputform">
                        <label for="">Usia Karakter</label><span>:</span> 
                        <input type="number" name="usia_karakter" id="usia_karakter" required>
                    </div>

                    <div class="inputform">
                        <label for="">Devilfruit</label><span>:</span> 
                        <input type="text" name="devilfruit" id="devilfruit" required>
                    </div>

                    <div class="inputform">
                        <label for="">Asal Krew</label><span>:</span> 
                        <input type="text" name="asal_krew" id="asal_krew" required>
                    </div>

                    <div class="inputform">
                        <label for="">Nilai Bounty Karakater</label><span>:</span> 
                        <input type="number" name="nilai_bounty" id="nilai_bounty" required>
                    </div>
                    <input style="width: 70px;" type="submit" name="submit" id="submit">
                </form>
            `;
            document.querySelector('.displayInputFrame').innerHTML = html;
        }
        function showEdit(id) {
            document.querySelectorAll('[id^="editForm"]').forEach(form => {
                form.style.display = 'none';
            });

            document.getElementById(`editForm${id}`).style.display = 'block';
        }
    </script>
</body>
</html>
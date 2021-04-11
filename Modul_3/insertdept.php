<?php
require("function.php");
if (isset($_POST["insert1"])) {
    if (insert1($_POST > 0)) {
        echo "<script>
            alert('data berhasil ditambah');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal ditambah');
            document.location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>

<body>
    <a href="index.php">home</a>
    <form action="" method="POST">
        <ul>
           
            <li>
                <label for="namadep">namadep</label>
                <input type="text" name="namadep" id="namadep">
            </li>
            <li>
                <label for="lokasi">lokasi</label>
                <input type="text" name="lokasi" id="lokasi">
            </li>
            <li>
                <button type="submit" name="insert1">insert</button>
            </li>
        </ul>
    </form>
</body>

</html>
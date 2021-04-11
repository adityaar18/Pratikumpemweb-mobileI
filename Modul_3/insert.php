<?php
require("function.php");
if (isset($_POST["insert"])) {
    if (insert($_POST > 0)) {
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
                <label for="namapegawai">namapegawai</label>
                <input type="text" name="namapegawai" id="namapegawai">
            </li>
            <li>
                <label for="alamat">alamat</label>
                <input type="text" name="alamat" id="alamat">
            </li>
            <li>
                <label for="iddept">iddept</label>
                <input type="text" name="iddept" id="iddept">
            </li>
            <li>
                <button type="submit" name="insert">insert</button>
            </li>
        </ul>
    </form>
</body>

</html>
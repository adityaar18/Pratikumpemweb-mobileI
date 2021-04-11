<?php
require("function.php");
$idpegawai = $_GET["update"];
$data = show("SELECT * FROM pegawai WHERE idpegawai = $idpegawai");
if (isset($_POST["ubah"])) {
    if (update($_GET > 0)) {
        echo "<script>
            alert('data berhasil diupdate');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal diupdate');
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
    <title>Update</title>
</head>

<body>
    <a href="index.php">home</a>
    <form action="" method="POST">
        <?php
        foreach ($data as $d) {
        ?>
            <ul>
                <li>
                    <label for="idpegawaibaru">idpegawaibaru</label>
                    <input type="text" name="idpegawaibaru" id="idpegawaibaru" value=<?php echo $d["idpegawai"]; ?>>
                </li>
                <li>
                    <label for="idpegawai">idpegawailama</label>
                    <input type="text" name="idpegawai" id="idpegawai" value=<?php echo $d["idpegawai"]; ?>>
                </li>
                <li>
                    <label for="namapegawai">namapegawai</label>
                    <input type="text" name="namapegawai" id="namapegawai" value=<?php echo $d["namapegawai"]; ?>>
                </li>
                <li>
                    <label for="alamat">alamat</label>
                    <input type="text" name="alamat" id="alamat" value=<?php echo $d["alamat"]; ?>>
                </li>
                <li>
                    <label for="iddept">iddept</label>
                    <input type="text" name="iddept" id="iddept" value=<?php echo $d["iddept"]; ?>>
                </li>
                <li>
                    <button type="submit" name="ubah">update</button>
                </li>
            </ul>
        <?php
        }
        ?>
    </form>
</body>

</html>
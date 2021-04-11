<?php
require("function.php");
$iddept = $_GET["update1"];
$data2 = show("SELECT * FROM departemen WHERE iddept = $iddept");
if (isset($_POST["ubah1"])) {
    if (update1($_GET > 0)) {
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
        foreach ($data2 as $d) {
        ?>
            <ul>
                <li>
                    <label for="iddept">iddept</label>
                    <input type="text" name="iddept" id="iddept" value=<?php echo $d["iddept"]; ?>>
                </li>
                <li>
                    <label for="namadep">namadep</label>
                    <input type="text" name="namadep" id="namadep" value=<?php echo $d["namadep"]; ?>>
                </li>
                <li>
                    <label for="lokasi">lokasi</label>
                    <input type="text" name="lokasi" id="lokasi" value=<?php echo $d["lokasi"]; ?>>
                </li>
                <li>
                    <button type="submit" name="ubah1">update</button>
                </li>
            </ul>
        <?php
        }
        ?>
    </form>
</body>

</html>
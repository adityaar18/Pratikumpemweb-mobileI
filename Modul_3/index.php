<?php
require("function.php");
$data = show("SELECT * FROM pegawai");
$data2 = show("SELECT * FROM departemen");
if (isset($_GET["delete"])) {
    if (delete($_GET > 0)) {
        echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal dihapus');
            document.location.href = 'index.php';
        </script>";
    }
}
if (isset($_GET["delete1"])) {
    if (delete1($_GET > 0)) {
        echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal dihapus');
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
    <title>Modul3</title>
</head>
<body>
    <form action="insert.php">
        <button>INSERT</button>
    </form>
    <table border="1">
        <tr>
            <td>idpegawai</td>
            <td>jeniskelamin</td>
            <td>alamat</td>
            <td>iddept</td>
            <td>aksi</td>
        </tr>
        <?php
        foreach ($data as $d) {
        ?>
            <tr>
                <td><?php echo $d["idpegawai"]; ?></td>
                <td><?php echo $d["namapegawai"]; ?></td>
                <td><?php echo $d["alamat"]; ?></td>
                <td><?php echo $d["iddept"]; ?></td>
                <td>
                    <form action="" method="GET">
                        <button type="submit" name="delete" value=<?php echo $d["idpegawai"]; ?>>DELETE</button>
                    </form>
                    <form action="update.php" method="GET">
                        <button type="submit" name="update" value=<?php echo $d["idpegawai"]; ?>>UPDATE</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br></br>
    <form action="insertdept.php">
        <button>INSERT</button>
    </form>
    <table border="1">
        <tr>
            <td>iddept</td>
            <td>namadept</td>
            <td>lokasi</td>
            <td>aksi</td>
        </tr>
        <?php
        foreach ($data2 as $d) {
        ?>
            <tr>
                <td><?php echo $d["iddept"]; ?></td>
                <td><?php echo $d["namadep"]; ?></td>
                <td><?php echo $d["lokasi"]; ?></td>
                <td>
                    <form action="" method="GET">
                        <button type="submit" name="delete1" value=<?php echo $d["iddept"]; ?>>DELETE</button>
                    </form>
                    <form action="updatedept.php" method="GET">
                        <button type="submit" name="update1" value=<?php echo $d["iddept"]; ?>>UPDATE</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
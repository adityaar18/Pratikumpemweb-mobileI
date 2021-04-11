<?php 
$servername = "localhost";
$database = "pegawai";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

function show($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function insert($data){
    global $conn;
    $namapegawai = $_POST["namapegawai"];
    $alamat = $_POST["alamat"];
    $iddept = $_POST["iddept"];

    mysqli_query($conn, "INSERT INTO pegawai VALUES('','$namapegawai','$alamat','$iddept')");
    return mysqli_affected_rows($conn);
}
function insert1($data2){
    global $conn;
    $namadep = $_POST["namadep"];
    $lokasi = $_POST["lokasi"];

    mysqli_query($conn, "INSERT INTO departemen VALUES('','$namadep','$lokasi')");
    return mysqli_affected_rows($conn);
}

function delete($data){
    global $conn;
    $idpegawai = $_GET["delete"];
    mysqli_query($conn, "DELETE FROM pegawai WHERE idpegawai = $idpegawai");
    return mysqli_affected_rows($conn);
}

function delete1($data2){
    global $conn;
    $iddept = $_GET["delete1"];
    mysqli_query($conn, "DELETE FROM departemen WHERE iddept = $iddept");
    return mysqli_affected_rows($conn);
}


function update($data){
    global $conn;
    $idpegawaibaru = $_POST["idpegawaibaru"];
    $idpegawai = $_POST["idpegawai"];
    $namapegawai = $_POST["namapegawai"];
    $alamat = $_POST["alamat"];
    $iddept = $_POST["iddept"];
    mysqli_query($conn, "UPDATE pegawai SET namapegawai = '$namapegawai', alamat = '$alamat', iddept='$iddept' WHERE idpegawai = '$idpegawai'");
    mysqli_query($conn, "UPDATE pegawai set idpegawai = '$idpegawaibaru' where idpegawai = '$idpegawai'");
    return mysqli_affected_rows($conn);
}

function update1($data2){
    global $conn;
    $iddept = $_POST["iddept"];
    $namadep = $_POST["namadep"];
    $lokasi = $_POST["lokasi"];
    mysqli_query($conn, "UPDATE departemen SET namadep = '$namadep', lokasi = '$lokasi' WHERE iddept = '$iddept'");
    return mysqli_affected_rows($conn);
}
?>

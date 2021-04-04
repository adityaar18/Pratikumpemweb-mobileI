<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$username_h = $password_h = $usernameErr = $passwordErr = $berhasil = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_REQUEST["username"];
  $password = $_REQUEST["password"];
  $user = strlen($username);
  $pass = strlen($password);
  $x = false;
  if (empty($_POST["username"])) {
    $usernameErr = "Username perlu di isi";
  }
  if($user>7){
    $usernameErr = "Username lebih dari 7";
    $x = true;
}
if (empty($_POST["password"])) {
  $passwordErr = "password perlu di isi";
}
if (!preg_match("/[A-Z]/", $password) ) {
  $passwordErr = "password kapital";
    $x = true;
}
if (!preg_match("/[a-z]/", $password)) {
  $passwordErr = "password kecil";
    $x = true;
}

if (!preg_match("/[^a-zA-Z\d]/", $password)) {
  $passwordErr = "password special character";
    $x = true;
}

if (!preg_match("/[0-9]/", $password)) {
  $passwordErr = "password digit";
    $x = true;
}
if($pass>10){
  $passwordErr = "password lebih dari 10";
    $x = true;
}
if( $x == false ){
    $berhasil = "<h2>BERHASIL</h2>";
    $username_h = $_POST["username"];
    $password_h = $_POST["password"];
}
}
?>

<h2>FORM VALIDASI</h2>
<p><span class="error">* WAJIB DI ISI.</span></p>
<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">  
  Username : <input type="text" name="username">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  Password : <input type="text" name="password">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo $berhasil;
echo "Username : ".$username_h;
echo "<br>";
echo "Password : ".$password_h;
?>

</body>
</html>
<?php
function hitung_vocal($kata){
  $arr = str_split($kata);
  $vocal = ['a', 'i', 'u', 'e', 'o'];
  $found = array_intersect($vocal, $arr);
  $count = array_count_values($arr);
  $result = [];
  foreach ($found as $item) {
      $result[$item] = $count[$item];
    }
    return $result;
}

function hitung_kos($kata1){
    $arr1 = str_split($kata1);
    $kos = ['b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z'];
    $found1 = array_intersect($kos, $arr1);
    $count1 = array_count_values($arr1);
    $result1 = [];
    foreach ($found1 as $item1) {
        $result1[$item1] = $count1[$item1];
    }
    return $result1;
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="form.css">
  <title>Tugas Pemograman Web</title>
</head>
<body>
  <h1>Hitung Huruf Vocal dan Kosonan</h1>
 
  <form method="POST" action="<?php $PHP_SELF ?>">
    <p>
      Kata: <br>
      <input type="text" name="kata">
    </p>
    <p>
      <button type="submit">Hitung</button>
    </p>
  </form>
 
  <?php if ($_POST && isset($_POST['kata'])): ?>
    <hr>
 
    <table border="1">
      <?php foreach (hitung_vocal($_POST['kata']) as $huruf => $jumlah): ?>
        <tr>
          <td style="width:100px">Huruf  : <?php echo $huruf ?></td>
          <td style="width:100px">Jumlah : <?php echo $jumlah ?></td>
        </tr>
      <?php endforeach ?>
    </table>
  <?php endif ?>
  <?php if ($_POST && isset($_POST['kata'])): ?>
    <hr>
 
    <table border="1">
      <?php foreach (hitung_kos($_POST['kata']) as $huruf1 => $jumlah1): ?>
        <tr>
          <td style="width:100px">Huruf  : <?php echo $huruf1 ?></td>
          <td style="width:100px">Jumlah : <?php echo $jumlah1 ?></td>
        </tr>
      <?php endforeach ?>
    </table>
  <?php endif ?>
</body>
</html>
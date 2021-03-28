<?php
$family=["Aditya Ananda Rama","Muhammad Zihan","Ella Mariani","Venicia Putri"];

foreach ($family as $nama) {
  echo "<br>Jumlah kata dari nama "."$nama"." : ".str_word_count($nama)."<br>";
}

foreach ($family as $nama) {
  $split = str_replace(" ","", $nama);
  echo "<br>Jumlah huruf dari nama "."$nama"." : ".strlen($nama)."<br>";
}

foreach ($family as $nama) {
  echo "<br>Jumlah kebalikan dari nama "."$nama"." : ".strrev($nama)."<br>";
}

function vocal_kosonan($word){
  $word_len = strlen($word) - 1;
  $vocal_words = array("a","e","i","o","u");
  
  $vocal = 0;
  $kosonan = 0;

  for($i = 0; $i <= $word_len; $i++){
      if(in_array($word[$i], $vocal_words)){
          $vocal++;
      }else{
          $kosonan++;
      }
  }   
  echo "<br>jumlah huruf vocal $word : ".$vocal."<br>";
  echo "<br>jumlah huruf kososonan $word : ".$kosonan."<br>";
}
foreach($family as $data){
	vocal_kosonan($data);
}
?>
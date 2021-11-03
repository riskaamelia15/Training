<?php

// mmbuat fungsi
function perkenalan($nama, $salam){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Muhardian", "Hi");

  echo "<hr>";

  $saya = "Indry";
  $ucapanSalam = "Selamat pagi";
  // memanggilnya lagi
  perkenalan($saya, $ucapanSalam);

function faktorial($angka) {
  if ($angka < 2) {
    return 1;
  } else {
  // memanggil dirinya sendiri
  return ($angka * faktorial($angka-1));
  }
}

// memanggil fungsi
  echo "<hr>";
echo "faktorial 6 adalah " . faktorial(6);

?>
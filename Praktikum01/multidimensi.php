<?php

// Deklarasi array multidimensi mahasiswa
$mahasiswa = [
  ["Rival", "Medan", "Sistem Informasi"],
  ["Wahyu", "Medan", "Sistem Informasi"],
  ["Bani", "Depok", "Sistem Informasi"],
  ["Adel", "Depok", "Sistem Informasi"],
];

// Cetak isi array menggunakan perulangan foreach
foreach ($mahasiswa as $mhs) {
  echo "Nama : " . $mhs[0] . "<br>";
  echo "Alamat : " . $mhs[1] . "<br>";
  echo "Jurusan : " . $mhs[2] . "<br>";
  echo "<br>";
}

?>
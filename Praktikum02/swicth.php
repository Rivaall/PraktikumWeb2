<?php
//Bikin variable nilai A B, C, D, E
$grade = "A";
//BIkin Predikat
$predikat;

//Bikin Percabangan swicth
switch ($grade) {
    case "A":
        $predikat = "Sangan Mantap";
        break;
    case "B":
        $predikat = "Mantap";
        break;
    case "C":
        $predikat = "Cukup Mantap";
        break;
    case "D":
        $predikat = "Gak Mantap";
        break;
    case "E":
        $predikat = "Dongo";
        break;
    default:
        $predikat = "NIla Tidak Ditemukan";
        break;
}

echo "Predikat : " . $predikat;

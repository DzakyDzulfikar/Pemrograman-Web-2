<?php 

$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];
$total_nilai = ($uts + $uas + $tugas) / 3;

if($total_nilai > 75){
    $keterangan = "LULUS";
} 

else {
    $keterangan = "TIDAK LULUS";
}


?>
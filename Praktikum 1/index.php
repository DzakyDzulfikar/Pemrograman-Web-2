<?php 

// Ini Komentar

echo "Hello World <br> <br>";
echo 'Hello World <br> <br>';
print_r("Muhammad Dzaky Dzulfikar Salim <br> <br>");
var_dump("STT Nurul Fikri");
echo "<hr>";

$nama = "Muhammad Dzaky Dzulfikar Salim";
$umur = 20;
$berat = 65.5;
$mahasiswa = true;

echo "Nama Saya : $nama <br> <br>";
echo "Umur Saya : $umur Tahun <br> <br>";
echo "Berat Saya : $berat Kg";
echo "<hr>";

// Membuat Array

$programs = ["php", "javascript", "html", "css"];
echo $programs[3];
foreach ($programs as $program){
    echo $program;
}
?>
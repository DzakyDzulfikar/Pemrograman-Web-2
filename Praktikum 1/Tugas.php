<?php 

$mahasiswa1 = [
    'id'=>1,
    'nim'=>01102221,
    'uts'=>90,
    'uas'=>85,
    'tugas'=>95,
];

$mahasiswa2 = [
    'id'=>2,
    'nim'=>01102222,
    'uts'=>80,
    'uas'=>75,
    'tugas'=>85,
];

$mahasiswa3 = [
    'id'=>3,
    'nim'=>01102223,
    'uts'=>70,
    'uas'=>65,
    'tugas'=>75,
];
$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>DAFTAR NILAI MAHASISWA</h2>
        <table class="table table-stripped">
            <tr>
                <th>NO.</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){?>
            <tr>
                <td><?= $nilai['id'];?></td>
                <td><?= $nilai['nim'];?></td>
                <td><?= $nilai['uts'];?></td>
                <td><?= $nilai['uas'];?></td>
                <td><?= $nilai['tugas'];?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
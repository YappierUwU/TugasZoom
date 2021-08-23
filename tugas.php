<?php


$tgl = @$_POST['tgl'];
$bln = @$_POST['bln'];
$hasil = @$_POST['hasil'];

if (($tgl >= 21 && $tgl <= 31 && $bln == 3) || ($tgl >= 1 && $tgl <= 19 & $bln == 4)) {
    $hasil = "ARIES";
}

if (($tgl >= 20 && $tgl <= 30 && $bln == 4) || ($tgl >= 1 && $tgl <= 20 & $bln == 5)) {
    $hasil = "TAURUS";
}

if (($tgl >= 21 && $tgl <= 31 && $bln == 5) || ($tgl >= 1 && $tgl <= 20 & $bln == 6)) {
    $hasil = "GEMINI";
}

if (($tgl >= 21 && $tgl <= 30 && $bln == 6) || ($tgl >= 1 && $tgl <= 22 & $bln == 7)) {
    $hasil = "CANCER";
}

if (($tgl >= 23 && $tgl <= 31 && $bln == 7) || ($tgl >= 1 && $tgl <= 22 & $bln == 8)) {
    $hasil = "LEO";
}

if (($tgl >= 23 && $tgl <= 31 && $bln == 8) || ($tgl >= 1 && $tgl <= 22 & $bln == 9)) {
    $hasil = "VIRGO";
}

if (($tgl >= 23 && $tgl <= 30 && $bln == 9) || ($tgl >= 1 && $tgl <= 22 & $bln == 10)) {
    $hasil = "LIBRA";
}

if (($tgl >= 23 && $tgl <= 31 && $bln == 10) || ($tgl >= 1 && $tgl <= 21 & $bln == 11)) {
    $hasil = "SCORPIO";
}

if (($tgl >= 22 && $tgl <= 30 && $bln == 11) || ($tgl >= 1 && $tgl <= 21 & $bln == 12)) {
    $hasil = "SAGITTARIUS";
}

if (($tgl >= 22 && $tgl <= 31 && $bln == 12) || ($tgl >= 1 && $tgl <= 19 & $bln == 1)) {
    $hasil = "CAPRICORN";
}

if (($tgl >= 20 && $tgl <= 31 && $bln == 1) || ($tgl >= 1 && $tgl <= 18 & $bln == 2)) {
    $hasil = "AQUARIUS";
}

if (($tgl >= 19 && $tgl <= 29 && $bln == 2) || ($tgl >= 1 && $tgl <= 20 & $bln == 3)) {
    $hasil = "PISCES";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yappier Albert Tugas Zoom PHP!</title>
</head>

<body>
    <form action="" method="post">
        <label for="fname">Tanggal Lahir :</label><br>
        <input type="text" name="tgl" value="<?= $tgl ?>"><br>
        <label for="lname">Bulan Lahir :</label><br>
        <input type="text" name="bln" value="<?= $bln ?>"><br><br>
        <label for="lname">Hasil :</label><br>
        <?= $hasil ?> <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    </br>
</body>

</html>
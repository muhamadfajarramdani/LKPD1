<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <label for="">Masukan angka: </label>
        <input type="number" name="angka" placeholder="Masukan Bilangan" required>
        <input type="submit">
    </form>
</body>
</html>


<?php

$angka = isset($_POST['angka']) ? $_POST['angka'] : 0;
$hasil = "";

function Prima($z){
    if ($z <= 1) return false;
    for ($i = 2; $i <= sqrt($z); $i++) {
        if ($z % $i == 0) return false;
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (is_numeric($angka)) {
        if (Prima($angka)){
            $hasil = "$angka adalah bilangan Prima.";
        } else {
            $hasil = "$angka bukan bilangan Prima.";
        }
    } else {
        $hasil = "harap masukan angka yang valid.";
    }
}

?>




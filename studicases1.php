<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="">masukan input</label>
        <input type="text" name="isi" id="">
        <input type="submit" name="" id="">
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $inputan = $_POST['isi'];
    $jumlahA = hitungHuruf($inputan);
    echo "Jumlah karakter 'a' dalam kalimat: " . $jumlahA;
}

function hitungHuruf($kata) {
    $jumlahA = substr_count(strtolower($kata), 'a');
    return $jumlahA;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simbol</title>
</head>
<body>
    <form method="post">
        <label for="">Masukan Data</label>
        <input type="text" name="teks" id="teks">
        <input type="submit">

    </form>
    
<br>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $teks = $_POST['teks'];
    // mencari semua simbol (karakter yang bukan huruf atau angka / menggunakan pola patter atau regex(regular expression)
    preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);
    
    //menghitung jumlah simbol yang ditemukan.//
    if (count($matches[0]) > 0) {
        $uniqueSymbols = array_unique($matches[0]);
        echo "yang ada: " . implode(',', $uniqueSymbols);
    } else {
        echo "tidak terdapat simbol pada kalimat";
    }
}

?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung coba</title>
    <h2>Aku Ultraman</h2>
</head>
<body>
    <form method="post">
        <label for="string">Masukkin dong bang hurufnya : </label>
        <input type="text" name="string" required>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isi = $_POST['string'];
        
        $aa = str_replace(" ","", $isi);
        $jumlah = strlen($aa);

        echo "Total Karakter : $jumlah";
    }
    ?>
</body>
</html>
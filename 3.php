<!DOCTYPE html>
<html>
<head>
    <title>Pencari Faktor Bilangan</title>
</head>
<body>
    <form method="post">
        <label for="bilangan">Masukkan bilangan:</label>
        <input type="number" name="bilangan" id="bilangan">
        <input type="submit" value="">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan = $_POST['bilangan'];

        for ($i=1; $i <= $bilangan; $i++) {
            if ($bilangan % $i == 0) {
                echo "$bilangan : $i = " . ($bilangan / $i) . "<br>";
            }
        }
    }
    ?>
</body>
</html>
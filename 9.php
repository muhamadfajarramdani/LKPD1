<!DOCTYPE html>
<html>
<head>
    <title>Penukaran Uang</title>
</head>
<body>
    <h2>Penukaran Uang</h2>
    <form method="post" action="">
        <label for="uang">Masukkan jumlah uang (dalam rupiah):</label>
        <input type="number" id="uang" name="uang" required>
        <button type="submit">Tukar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uang = $_POST['uang'];
        pecahanUang($uang);
    }

    function pecahanUang($uang) {
        $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000];
        $arr = [];

        foreach ($pecahan as $nilai) {
            if ($uang >= $nilai) {
                $jumlah = floor($uang / $nilai);
                $uang %= $nilai;
                array_push($arr, "Rp. " . number_format($nilai, 0, "", "") . " x $jumlah");
            }
        }

        echo "<ul>";
        foreach ($arr as $value) {
            echo "<li>$value</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
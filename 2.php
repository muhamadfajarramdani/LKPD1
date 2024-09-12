<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Total Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Hitung Total Pembayaran Rumah Makan</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="hari" class="form-label">Hari Pembelian</label>
            <input type="text" class="form-control" id="hari" name="hari" placeholder="Masukkan hari pembelian (contoh: Selasa)" required>
        </div>
        <div class="mb-3">
            <label for="totalBelanja" class="form-label">Total Belanja</label>
            <input type="number" class="form-control" id="totalBelanja" name="totalBelanja" placeholder="Masukkan total belanja" required>
        </div>
        <button type="submit" class="btn btn-primary">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input dari form
        $hariPembelian = $_POST['hari'];
        $totalBelanja = $_POST['totalBelanja'];

        // ini buat menghitung total pembayaran
        function hitungTotalPembayaran($hari, $totalBelanja) {
            // Diskon dasar
            $diskonHariSelasa = 0;
            $diskonBelanjaBesar = 0;

            // Diskon 5% jika hari Selasa
            if (strtolower($hari) === 'selasa') {
                $diskonHariSelasa = 0.05 * $totalBelanja;
            }

            // Diskon 7% jika belanja di atas 100.000
            if ($totalBelanja > 100000) {
                $diskonBelanjaBesar = 0.07 * $totalBelanja;
            }

            // hitung total diskon
            $totalDiskon = $diskonHariSelasa + $diskonBelanjaBesar;

            // hitung total yang harus dibayar setelah diskon
            $totalBayar = $totalBelanja - $totalDiskon;

            // Return hasil
            return [
                'total_belanja' => $totalBelanja,
                'diskon_hari_selasa' => $diskonHariSelasa,
                'diskon_belanja_besar' => $diskonBelanjaBesar,
                'total_diskon' => $totalDiskon,
                'total_bayar' => $totalBayar
            ];
        }

        // Hitung total pembayaran
        $hasil = hitungTotalPembayaran($hariPembelian, $totalBelanja);


        echo "<div class='mt-4'>";
        echo "<h2>Hasil Perhitungan</h2>";
        echo "<p>Total Belanja: Rp " . number_format($hasil['total_belanja'], 0, ',', '.') . "</p>";
        echo "<p>Diskon Hari Selasa: Rp " . number_format($hasil['diskon_hari_selasa'], 0, ',', '.') . "</p>";
        echo "<p>Diskon Belanja Besar: Rp " . number_format($hasil['diskon_belanja_besar'], 0, ',', '.') . "</p>";
        echo "<p>Total Diskon: Rp " . number_format($hasil['total_diskon'], 0, ',', '.') . "</p>";
        echo "<p>Total yang Harus Dibayar: Rp " . number_format($hasil['total_bayar'], 0, ',', '.') . "</div>";
    }
    ?>

</div>
</body>
</html>

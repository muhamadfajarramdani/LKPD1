<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">KALKULATOR</h2>
                        <form method="post">
                            <div class="mb-3">
                                <label for="Angka1" class="form-label">Bilangan Pertama</label>
                                <input type="number" name="Angka1" class="form-control" placeholder="Masukkan Bilangan Pertama">
                            </div>
                            <div class="mb-3">
                                <label for="Angka2" class="form-label">Bilangan Kedua</label>
                                <input type="number" name="Angka2" class="form-control" placeholder="Masukkan Bilangan Kedua">
                            </div>
                            <div class="mb-3">
                                <label for="operasi" class="form-label">Operasi</label>
                                <select class="form-select" name="operasi">
                                    <option value="tambah">Pertambahan</option>
                                    <option value="kurang">Perkurangan</option>
                                    <option value="kali">Perkalian</option>
                                    <option value="bagi">Pembagian</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="hitung" value="Hitung" class="btn btn-primary">
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['hitung'])) {
                            $Angka1 = $_POST['Angka1'];
                            $Angka2 = $_POST['Angka2'];
                            $operasi = $_POST['operasi'];
                            switch ($operasi) {
                                case 'tambah':
                                    $hasil = $Angka1 + $Angka2;
                                    break;
                                case 'kurang':
                                    $hasil = $Angka1 - $Angka2;
                                    break;
                                case 'kali':
                                    $hasil = $Angka1 * $Angka2;
                                    break;
                                case 'bagi':
                                    $hasil = $Angka1 / $Angka2;
                                    break;
                            }
                        }
                        ?>
                        <?php if (isset($_POST['hitung'])) { ?>
                            <div class="mt-3">
                                <label for="hasil" class="form-label">Hasil</label>
                                <input type="text" value="<?php echo $hasil; ?>" class="form-control" readonly>
                            </div>
                        <?php } else { ?>
                            <div class="mt-3">
                                <label for="hasil" class="form-label">Hasil</label>
                                <input type="text" value="0" class="form-control" readonly>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

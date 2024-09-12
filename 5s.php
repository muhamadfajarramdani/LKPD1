<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1>Hitung Total Karakter</h1>
                        <form method="post">
                            <div class="mb-3">
                                <label for="">Masukan String: </label>
                                <input type="text" name="nama" id="nama" required placeholder="masukan nama">
                                <input type="submit">
                            </div>
                            <?php

                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $huruf = $_POST['nama'];
                                $hurufgakpakespasi = str_replace(' ', '', $huruf);
                                $huruf1 = strlen($hurufgakpakespasi);
                                echo "<br>";
                                echo "Total Karakter: " . $huruf1;
                            }

                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
    <!-- <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form method="post">
            <label for="">Masukan nama: </label>
            <input type="text" name="nama" id="nama">

            <label for="">Masukan Jawaban: </label>
            <input type="text" name="jawaban" id="jawaban">

            <button type="submit">submit</button>
        </form> -->


        <?php

    function Checkjawaban($nama, ...$jawaban)
    {
        $jawabanA = ["A", "D", "B", "A", "C", "C", "B", "A", "D", "B"];
        $kosong = [];

        foreach ($jawabanA as $key => $value) {
            if ($jawaban[$key] == $value) {
                $kosong[$key] = 1;
            } else {
                $kosong[$key] = 0;
            }
        }

        echo "Nama : $nama <br>";
        echo "Jawaban Benar: <b>" . count(array_keys($kosong, 1)) . "</b><br>";
        echo "Jawaban Salah: <b>" . count(array_keys($kosong, 0)) . "</b><br>";
    }



    Checkjawaban("fajar","A", "D", "B", "A", "C", "C", "B", "A", "D", "A");

    ?>



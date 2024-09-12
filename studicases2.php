<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="">Masukan Input</label>
        <input type="text" name="isi" id="isi">
        <input type="submit" name="" id="">
    </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $angka = $_POST["isi"];
    tiriz($angka);
}
function tiriz($lpt){
    for ($i=1; $i < $lpt; $i++){
        if($i % 3 == 0 && $i % 5 == 0){
            echo "FizzBuzz" . "<br>";
        } elseif ($i % 3 == 0) {
            echo "Fizz" . "<br>";
        }elseif ($i % 5 == 0) {
            echo "buzz" . "<br>";
        }else {
            echo "$i" . "<br>";
        }
    }
}

?>
<?php

$Nama = ["PPLG", "PMN", "HTL", "KLN", "pplg", "htl", "mplb"];

$namaUpper = array_map('strtoupper', $Nama);

$namaUnique = array_unique($namaUpper);

print_r($namaUnique);
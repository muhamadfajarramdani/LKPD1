<?php

for ($i=1; $i < 10; $i++) {
    for ($j=0; $j < 8; $j++) {
        if ($i % 5 == 0) {
            echo "";
        } else {
            echo "*";
        }
    }
    echo "<br>";
}

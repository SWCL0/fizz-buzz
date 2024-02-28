<?php

for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 == 0) {
        echo "FIZZ BUZZ" . PHP_EOL;
    } elseif ($i % 5 == 0) {
        echo "BUZZ" . PHP_EOL;
    } elseif ($i % 3 == 0) {
        echo "FIZZ" . PHP_EOL;
    } else {
        echo $i . PHP_EOL;
    }
}

?>
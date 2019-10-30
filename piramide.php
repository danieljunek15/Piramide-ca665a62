<?php
echo "hoeleev rijen wilt u?". PHP_EOL;
$k = readline();
for ($i = -1; $i < $k; $i++) {
    for ($j = -1; $j < $i; $j++) {
        echo " * ";
    }
    echo "". PHP_EOL;
}
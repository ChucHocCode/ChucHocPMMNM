<?php
echo "<pre>";

$n = 10; // số dòng

for ($i = 1; $i <= $n; $i++) {
    // in khoảng trắng
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "  ";
    }

    // in dấu *
    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "* ";
    }

    echo "\n";
}

echo "</pre>";
?>

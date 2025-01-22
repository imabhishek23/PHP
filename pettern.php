<?php
$rows = 5; 
for ($i = 0; $i < $rows; $i++) {
    for ($j = $i; $j < $rows - 1; $j++) {
        echo "  ";
    }
    for ($j = 0; $j <= $i; $j++) {
        echo chr(65 + $j);
    }
    for ($j = $i - 1; $j >= 0; $j--) {
        echo chr(65 + $j);
    }

    echo "<br>"; 
}
?>

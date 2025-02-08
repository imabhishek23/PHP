<?php
function add(...$numbers){
    $sum =0;
    foreach($numbers as $n){
        $sum+=$n;
    }
    return $sum;
}
echo "sum of all element is :".add(1,2,5,7)."<br>";
?> 

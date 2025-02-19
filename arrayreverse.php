<?php
include('newmenu.php');
echo "Array Reverse :<br>";
$input  = array("php", 4.0, "green", "red");
$reversed = array_reverse($input);
echo "Original Array : ";
print_r($input);
echo "<br>";
echo "Reversed Array : ";
print_r($reversed);

echo "<br><br>";    
echo "Array Combine :<br>";
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$c=array_combine($fname,$age);
print_r($c);


echo "<br><br>";
echo "Array Difference :<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$result=array_diff($a1,$a2);
print_r($result);

echo "<br><br>";
echo "Array Slice :<br>";
$input = array("a", "b", "c", "d", "e");
$output = array_slice($input, 1, 3);   // returns "b", "c", and "d"
print_r($output);

echo "<br><br>";
echo "Array Splice :<br>";
$a=array("red","green","blue","yellow","brown");
array_splice($a,2,0,"purple"); //add purple at 2nd index
print_r($a);
echo "<br>";
array_splice($a,3,1); //remove 1 element at 3rd index
print_r($a);
echo "<br>";
array_splice($a,1,1,array("orange","black")); //replace 1 element at 1st index
print_r($a);
echo "<br>";
?>
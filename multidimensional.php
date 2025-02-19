<?php
include('newmenu.php');
$cornucopia = array('fruit' => array('red' => 'apple',
'orange' => 'orange',
'yellow' => 'banana',
'green' => 'pear'),
'flower' => array('red' => 'rose',
'yellow' => 'sunflower',
'purple' => 'iris'));

$kind_wanted = 'flower';
$color_wanted = 'purple';
print("The $color_wanted $kind_wanted is {$cornucopia[$kind_wanted][$color_wanted]}");
?>
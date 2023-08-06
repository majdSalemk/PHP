<?php
$x = 10;
$y = 24;
echo "\nBefore swapping:  ". $x . ',' . $y;
list($x, $y) = array($y, $x);
echo "\nAfter swapping:  ". $x . ',' . $y."\n";
?>

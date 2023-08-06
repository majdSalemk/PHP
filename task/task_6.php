<?php
function ArmStrongNum($MyNum) {
  $y = $MyNum;
  $sum = 0;
  $Order = 0;

  //Find number of digit in the Number
  while($y > 0){
    $Order++;
    $y = (int)($y / 10);
  }

  $y = $MyNum;
  while ($y > 0){
    $x = $y % 10;
    $sum = $sum + Pow($x, $Order);
    $y = (int)($y/10);
  }
  
  if ($MyNum == $sum){
    echo $MyNum." is a Armstrong Number.\n";
  } else {
    echo $MyNum." is not a Armstrong Number.\n";
  }
}

ArmStrongNum(153);

?>
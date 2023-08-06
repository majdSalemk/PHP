<?php
function Palindrome($MyString) {
  $revString = strrev($MyString);
  if ($revString == $MyString){
    echo $MyString." Yes it is a palindrome .\n";
  } else {
    echo $MyString." is not a Palindrome string.\n";
  }
}

Palindrome("Yes it is a palindrome ");

?>
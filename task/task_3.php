<?php
// PHP program to check if a string has all
// lower case characters

$strings = array('gfg123', 'geeksforgeeks', 'GfG');

// Checking for above three strings one by one.
foreach ($strings as $testcase) {
	if (ctype_lower($testcase)) {
		echo ":Your String is Ok \n";
	} else {
		echo " Yes";
	}
}
?>

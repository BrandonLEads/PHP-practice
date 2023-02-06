<?php
		$string1 = "Japan is an amazing country";
		$string2 = "Japan has some of the best food in the world";
		$common = similar_text($string1, $string2, $percent);
		printf("They have %d chars in common (%.2f%%).", $common, $percent);
?>
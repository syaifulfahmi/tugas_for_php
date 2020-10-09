<?php

for($a = 1; $a <= 10; $a++) {
	echo "<br>";
	for($b = 1; $b <= $a; $b++) :
		echo $b;
	endfor;
}
?>
<?php

$x = rand(0,5);
$a = 1;
$b = 1;
echo "$x";
echo "<br>";
while (true) {
	if ($a > $x) {
		echo "задуманное число НЕ входит в числовой ряд";
		echo "<br>";
		break;
	}
	else {
		if ($a == $x) {
			echo "задуманное число входит в числовой ряд";
			echo "<br>";
			break;
		}
	}
		$c = $a;
		$a = $a + $b;
		$b = $c;
}
?>


<?php 
	$a = 0; $b = 1; $c = 2; //Các hệ số a, b, c
	$x1; $x2; $d;
	if ($a == 0)
		if ($b == 0) {
		 	echo "Phương trình vô nghiệm!!!"."</br>";
		 } 
		 else {
		 	$x1 = (-$c) / ($b);
		 	echo "Phương trình có nghiêm".$x1."</br>";
		 }
		else{
			$d = $b * $b - 4 * $a * $c;
			if ($d > 0) {
				$x1 = ((-$b) + sqrt($d)) / (2 * $a);
				$x2 = ((-$b) - sqrt($d)) / (2 * $a);
				echo "Nghiệm x1 = ".$x1."</br>";
				echo "Nghiệm x2 = ".$x2."</br>";
			}
			if ($d == 0) {
				$x1 = (-$b) / (2 * $a);
				echo "Phương trình có nghiệm kép x = ".$x1."</br>";
			}
			if ($d < 0) {
				echo "Phương trình vô nghiệm!!!";
			}
		}
	
 ?>
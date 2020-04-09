<?php 
	$n; //Giá trị n nhập từ bàn phím
	$s = 0;
	$gt = 1;
	for ($i=1; $i <= $n; $i++) { 
		for ($j=1; $j <= $n; $j++) { 
			$gt *= $j;
		}
		$s += (($i) / $gt);
		$gt = 1;
	}
	echo "Tổng S là : ".$s;
 ?>
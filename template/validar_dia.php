<?php 

	$week = 1;

	for($i=1;$i<=date('t');$i++) {

		$day_week = date('N', strtotime(date('Y-m').'-'.$i));
		

		$calendar[$week][$day_week] = $i;


		if ($day_week == 7) { $week++; };

	}
 
?>

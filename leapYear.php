<?php
function leapYear($startYear,$endYear){

	for ($i=$startYear; $i<= $endYear ; $i++) { 
		if (0 == $i % 4 && 0 != $i % 100 && 0 != $i % 400) {
			echo $i."<br>";
		}
	}
}

leapYear(1900,2020);

?>
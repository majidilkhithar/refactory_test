<?php
 function palindrom($MyString){
 	$new_string = strtolower($MyString);
 	$a=0;
 	$b=strlen($new_string)-1;
 	$poli =0;

 	while ($b>$a) {
 		if ($new_string[$a] != $new_string[$b]) {
 			$poli = 1;
 			break;
 		}

 		$a++;
 		$b--;
 	}

 	if ($poli == 0) {
 		echo $MyString ." Palindrom <br>";
 	} else{
 		echo $MyString . " Bukan Palindrom<br>";
 	}
 }

 palindrom("radar");
 palindrom("Malam");
 palindrom("Kasur ini rusak");
 palindrom("Ibu Ratna antar ubi");
 palindrom("Malas");
 palindrom("Makan nasi goreng");
 palindrom("Balonku ada lima");

?>
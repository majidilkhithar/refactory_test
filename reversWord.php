<?php

function reversWord($MyString){

$reversed = "";
$tmp = "";
for($i = 0; $i < strlen($MyString); $i++) {
    if($MyString[$i] == " ") {
        $reversed .= $tmp . " ";
        $tmp = "";
        continue;
    }
    $tmp = $MyString[$i] . $tmp;    
}
$reversed .= $tmp;
echo $reversed;
}

reversWord("I am A Great human");
?>

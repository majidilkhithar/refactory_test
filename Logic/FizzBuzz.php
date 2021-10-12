<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fizbuzz</title>
</head>
<body>
	<form method="post">
		<label>Masukan Angka</label>
		<input type="number" name="angka">
		<input type="submit" name="submit" value="ok">
	</form>

</body>
</html>
<?php
if (isset($_POST['submit'])) {

$angka = $_POST['angka'];

for ($i=1; $i <=$angka; $i++ ){
	if ($i % 3 ==0 && $i % 5 ==0) {
		echo "FizzBuzz <br>";
	} else if ($i % 3 ==0) {
		echo "Fizz <br>";
	} else if ($i % 5 ==0) {
		echo "Buzz <br>";
	} else{
		echo $i ."<br>";
	}
}
}

?>
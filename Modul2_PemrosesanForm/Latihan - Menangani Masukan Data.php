<!DOCTYPE html>
<html>
<!--
	Algoritma
	- Begin
	- Inputkan nama
	- Klik Ok untuk submit form
	- Output
	- End
-->

<head>
	<title> Metode GET </title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>"method="get">
		Nama <input type="text" name="nama"/>
	
			<br/>
	
		<input type="submit" value="OK"/>
	</form>
	
	<?php
		if(isset ($_GET['nama']))
		{
			echo 'Hallo ' . $_GET['nama'];
		}
	?>
</body>

</html>
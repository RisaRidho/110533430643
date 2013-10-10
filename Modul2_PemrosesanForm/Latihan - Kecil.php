<!DOCTYPE html>
<html>
<!--
	Algoritma
	- Begin
	- Inputkan nama
	- Klik Ok untuk submit
	- Output
	- End
-->

<head>
	<title> Identifikasi Metode </title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?> "method="get">
		Nama <input type="text" name="nama"/>
		
		<br/>
		
		<input type="submit" value="OK"/>
	</form>
	
	<?php
		if(isset($_REQUEST['nama']))
		{
			echo 'Metode '. $_SERVER['REQUEST_METHOD'];
		}
	?>
</body>
</html>
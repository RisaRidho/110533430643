<!DOCTYPE html>
<html>
<!--
	Algoritma
	- Begin
	- Inputkan nama
	- Klik tombol Ok untuk submit
	- Output
	- End
-->

<head>
	<title> Metode POST </title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?> "method="post">
		Nama <input type="text" name="nama"/>
	
			<br/>
		
		<input type="submit" value="OK"/>
	</form>
	
	<?php
		if(isset($_POST['nama']))
		{
			echo 'Hallo ' . $_POST['nama'];
		}
	?>
</body>
</html>
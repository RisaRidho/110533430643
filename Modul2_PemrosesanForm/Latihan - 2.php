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
	<title> Prefilling Text Field </title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?> "method="post">
		Nama <input type="text" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '' ?>"/>
		
		<br/>
		
		<input type="submit" value="Ok"/>
	</form>
	
	<?php
		if(isset($_POST['nama']))
		{
			echo $_POST['nama'];
		}
	?>
</body>
</html>
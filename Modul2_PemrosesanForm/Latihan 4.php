<!DOCTYPE html>
<html>
<!--
	Algoritma
	- Begin
	- Pilih pekerjaan
	- Klik Ok untuk submit
	- Output
	- End
-->

<head>
	<title> Data Seleksi </title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Pekerjaan <select name="job">
			<option value="Mahasiswa"> Mahasiswa </option>
			<option value="ABRI"> ABRI </option>
			<option value="PNS"> PNS </option>
			<option value="Swasta"> Swasta </option>
		</select>
		
		<br/>
		
		<input type="submit" value="OK"/>
	</form>
	
	<?php
		if(isset($_POST['job']))
		{
			echo $_POST['job'];
		}
	?>
</body>
</html>
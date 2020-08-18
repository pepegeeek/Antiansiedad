<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Factorial numero</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<section>
		<h1>Calcular Descuento</h1>
		<form name="factor" action="controladorfactorial.php" method="GET" enctype="multipart/form-data">
			<label>Numero a calcular</label>
			<label>Monto</label>
			<input type="text" name="num"  min="1" max="10" required />
			<br/>
			<input type="submit" name="calcular" value="calcular"/>
		</form>
		<?php
if(isset($_GET['prom']))
{
	echo '<h1>'.$dato.'<h1>';
}
?>
	</section>

</body>
</html>
<?php $saludo="PRUEBAS PHP"; ?>
<?php $num1 = 2; $num2 = 3; ?>
<?php $total = $num1 + $num2; ?>
<?php $vec = array(3, 5, 9, 1); ?>
<?php class Persona
{
	var $nombre;

	function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	function getNombre()
	{
		return($this->nombre);
	}
}
?>


<html>
	<head>
		<title>PRUEBAS</title>
	</head>
	<body>
		<?php echo $saludo; ?>
		<h1> HOLA, ESTAS SON PRUEBAS DE PHP </h1>
		<?php echo "la suma de 2 + 3 es igual a ".$total ; ?>
		<?php echo "si dice static, las variables locales no se destruye"; ?>
		
		<?php $arr = array('uno' => 'one', 'dos' => 'two', 'tres' => 'three');
			foreach ($arr as $clave => $valor) 
			echo "Clave:".$clave."Valor:".$valor."<br>\n"; ?>
		<?php $hombre = new Persona(); ?>
		<?php $nom ="Juan"; ?>
		<?php $hombre->setNombre($nom);
			echo $hombre->getNombre(); ?>
	</body>
</html>
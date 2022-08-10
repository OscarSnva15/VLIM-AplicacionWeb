
<?php
	$host='localhost';
	$basededatos = 'hotel';    // sera el valor de nuestra BD 
	$usuariodb = 'root';    // sera el valor de nuestra BD 
	$clavedb = ''; 
	$link = mysqli_connect($host,$usuariodb,$clavedb,$basededatos);
	if (!$link) 
	{
		echo "Fallo en la conexión del sitio";
	}
?>


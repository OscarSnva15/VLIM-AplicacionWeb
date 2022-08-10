<?php
	$alert='';
	session_start();
	if(!empty($_SESSION['active']))
	{
		header ('location:sistema/');
	}
	else
	{
		if(!empty($_POST))
		{
			if (empty($_POST['usuario']) || empty($_POST['clave']))
			{
				$alert ='INGRESE SUS DATOS';

			}
			else
			{
				require_once "php/conexion.php";
				$user=$_POST['usuario'];
				$pass=$_POST['clave'];
				$query = mysqli_query($link,"SELECT * FROM login WHERE user='$user' AND password='$pass'");
				$result= mysqli_num_rows($query);
				if ($result >0)
				{
					$data=mysqli_fetch_array($query);
					//session_start();
					$_SESSION['active']=true;
					$_SESSION['user']=$data[user];
					$_SESSION['password']=$data[password];
					
					header ('location:sistema');
				}
				else
				{
					$alert='El usuario o la clave son incorrectos';
					session_destroy();
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<title>VLIM-AplicacionWeb</title>
</head>
<body>
	<section id="container">
		<form action="" method="post">
			<h1> INICIAR SESION </h3>
			<img src="assets\img\user.png" height="200" width="200"  alt="Login">
			<input type="text" name="usuario" placeholder="Ingrese Usuario">
			<input type="password" name="clave" placeholder="Ingrese Password">
			<div class="alert"><?php echo isset ($alert)? $alert:' ';?></div>
			<input type="submit" value="INGRESAR">
		</form>
	</section>
</body>
</html>

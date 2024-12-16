<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Enviar mail</title>
</head>
<body>
<?php
if (isset($_POST['edo']))
	 {
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$comentario = $_POST['comentario'];
		if ($nombre == "")
		 {
			print "el nombre es obligatorio<br>";
		} else if ($apellido == "")
		{
			print "El apellido es obligatorio<br>";	
		}else if ($correo == "")
		 {
		    print "El correo es obligatorio<br>";	
		}else if ($comentario == "")
		 {
		    print "El comentario es obligatorio<br>";		
		} else {

			$mail = "colocatucorreo";
			$mensaje = "$nombre $apellido ha enviado un email. <br>";
			$mensaje .= "su mail es  $correo y su mensaje es: <br>";
			$mensaje .= $comentario;
			
			$headers = "MIME-Version: 1.0 \r\n";
			$headers .= "Content-type:text/html; charset=UTF-8\r\n";
			$headers .= "From: ".$_POST['correo']."\r\n";
			$headers .= "Repaly-to: $correo\r\n";
			
			$asunto = "$nombre $apellido ha enviado un email";
			if(mail($mail,$asunto,$mensaje,$headers))
			{
				print "su comentario ha sido enviado exitosamente<br>";
			}
			else
			{
				print "error en el envio de su correo, intentarlo mas tarde <br>";
			}
		}


	}
	else
	{
		?>
		<form method="post" action="s20_1.php">
		
			<table>
				<tr>
					<td>nombre:</td>
					<td><input type="text" name="nombre" ></td>
				</tr>

				<tr>
					<td>apellido:</td>
					<td><input type="text" name="apellido" ></td>
				</tr>
				<tr>
					<td>correo:</td>
					<td><input type="text" name="correo" ></td>
				</tr>

				<tr>
					<td>dime que te parece el curso:</td>
					<td><textarea name="comentario" cols="50" rows="6" wrap ="off"> </textarea></td>
				</tr>

				<tr>
					<td><input type="submit" value="enviar" > </td>
					<td><input type="hidden" value ="1" name="edo" ></td>
				</tr>

			</table>

		</form>
	<?php } ?>
</body>
</html>
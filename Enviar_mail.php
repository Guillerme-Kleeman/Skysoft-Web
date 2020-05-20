<?php 
$texto_mail ="Nombre: ". $_POST["nombre"] ." ". $_POST["apellido"]. ". ";
$texto_mail .= "Celular: ". $_POST["tfno"]." ";
$texto_mail .="Correo: ". $_POST["email"]." ";
$texto_mail .="Mensaje: ". $_POST["comentarios"]." ";
$destinatario="erikasilvero13@gmail.com";

$asunto=$_POST["asunto"];
$headers="MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
$headers.="From: Prueba Erika <erikasilvero13@gmail.com>\r\n";
$exito=mail($destinatario, $asunto, $texto_mail, $headers);

if ($exito) {
	
	header("Location:alert.html");	
}
else{
	
	header("Location:alerta_fallo.html");	
}






 ?>
<?
	$destino="contact@ieeeunfv.org";
	$name = $_POST['name'];
  	$email = $_POST['email'];
  	$subject = $_POST['subject'];
  	$comment = $_POST['message'];
	
	$contenido = "Nombre: " . $name . "\nCorreo: " . $email . "\nAsunto: " . $subject . "\nMensaje: " . $comment;
	mail($destino,$subject,$contenido);
?>
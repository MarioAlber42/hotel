<?php
 $destino="mario.pandoruk@gmail.com"; 
 $nombre=$_POST["nombre"];
 $correo=$_POST["correo"];
 $telefono=$_POST["telefono"];
 $asunto=$_POST["asunto"];
 $mensaje=$_POST["mensaje"];
 if(!isset($_POST['terms'])){
return false; // return false para detener la ejecución del resto de instrucciones, puedes igual hacer una redireccion o envió de errores en caso de ajax. Checkbox
}


 $contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo ."\nTelèfono: " . $telefono . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;



 mail($destino,"Contacto", $contenido);
 header("Location: index.html");

?>



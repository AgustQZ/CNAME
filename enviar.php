<?php
    $destino= "san.agustin20.aqz@gmail.com";
    $nombre= $_POST["nombre"];
    $asunto= $_POST["asunto"];
    $correo= $_POST["correo"];
    $mensaje= $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "Asunto: " . $asunto . "\nCorreo : " . $correo .  "\nMensaje : " . $mensaje;
    mail($destino, $asunto, $mensaje, "FROM: $correo");
    header ("Location:Mensaje_Enviado.html");
?>
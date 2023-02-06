<?php
    
        $nombre = $_POST['name'];
        $email = $_POST['email'];
        $mensaje = $_POST['message'];

        $mensaje = "Este mensaje fue enviado por: " . $nombre . ",\r\n";
        $mensaje = "Su e-mail es: " . $email . ",\r\n";
        $mensaje = "Mensaje: " . $_POST['mensaje'] . ",\r\n";
        $mensaje = "Enviado el: " . date('d/m/Y', time());

        $para = 'macccielo27879@gmail.com';
        $header = "Mensaje desde el formulario de contacto de mi CV";

        mail($para, $header);

        header('Location:exito.html');    
?>
   


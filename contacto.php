<?php
    $destinatario = "info@mrledshow.com";

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $tel  = $_POST['tel'];
    $mensaje = $_POST['mensjae'];

    $header = "Enviado desde la pagina de mr led show";

    $mjscompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $tel, $mjscompleto, $header);
    echo "<script>alert('correo enviado satisfactoriamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",2000)</script>";
>?
<?php
$link = mysqli_connect("localhost", "root", "", "proyecto");

enviar ($link);

function enviar ($link){
    $usuario = $_POST['usuario'];
    $email = $_POST['mail'];
    $contacto = $_POST['contacto'];

    $consulta = "INSERT INTO usuarios(usuario, email, contacto) VALUES ('$usuario', '$email', '$contacto')";
    mysqli_query($link, $consulta);
    mysqli_close($link);
}

echo "Datos enviados";
?>
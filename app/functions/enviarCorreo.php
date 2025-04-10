<?php include '../../config/constantes.php' ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inputNombre']) && isset($_POST['inputApellido']) && isset($_POST['inputEmail']) && isset($_POST['textAreaMensaje'])) {
    $nombre = $_POST['inputNombre'];
    $apellido = $_POST['inputApellido'];
    $email = $_POST['inputEmail'];
    $mensaje = $_POST['textAreaMensaje'];

    $to = "ikerguerra2000@gmail.com";
    $subject = "$nombre $apellido";
    $txt = $mensaje;
    $headers = "From: $email" . "\r\n" . "CC: $email";

    mail($to, $subject, $txt, $headers);

    header('Location: ../views/pages/contacto.php');
}
?>
<?php
$nombre = $_POST['nombre'];
$password = $_POST['password'];
$genero = $_POST['genero'];
$correo = $_POST['correo'];
$materia = $_POST['materia'];
$telefono = $_POST['telefono'];
/* $enviar = $_POST['enviar']; */

if (!empty($nombre) || !empty($password) || !empty($genero) || !empty($correo) || !empty($materia) || !empty($telefono)) {
    $host = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'formulariophp';
}

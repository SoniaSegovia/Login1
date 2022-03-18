<?php
incluide ('config.php');
session_start();

$username = $_POST [ 'usuario'];
$userpassword = $_POST [ 'password'];

$query = $conn -> prepare("SELECT * FROM usuarios WHERE username = :username ");
$query  ->bindParam ("username, $username, PDO::PARAM_STR");
$query -> execute ();

$result = $query -> fetch (PDO::FETCH_ASSOC);
if (!$result) {
    echo 'Usuario o Password es incorrecto';
} else {
    if (password.verify($password, $result ['PASSWORD'])) {
        echo 'Felicitaciones Bienvenidos';
        
    }else {
        echo  'Error al iniciar';
    }
}
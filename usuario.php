<?php

//IMPORTAR LA CONEXIÓN

require 'includes/config/database.php';
$db = conectarDB();


//CREAR UN EMAIL Y PASSWORD
$email = "automirkam@yahoo.com";
$password = "mivka2022";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

//QUERY PARA CREAR EL USUARIO
$query = "INSERT INTO usuarios (email,password) VALUES ( '${email}', '${passwordHash}');";

echo $query;

exit;
//AGREAGRLO A LA BASE DE DATOS
mysqli_query($db, $query);

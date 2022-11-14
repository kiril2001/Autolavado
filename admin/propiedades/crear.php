<?php
//COMPROVAMOS SI EL USUARIO ESTA AUTENTICADO
session_start();
$auth = $_SESSION['login'];
if(!$auth){
    header('Location: /');
}



require '../../includes/config/database.php';
$db = conectarDB();

$errores = [];



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $imagen = $_FILES['imagen'];

    /** MENSAJES DE ERROR **/

    if (!$titulo) {
        $errores[] = "Debes añadir un titulo";
    }
    if (!$imagen['name'] || $imagen['error']) {
        $errores[] = "Debes subir una imagen";
    }
    $medida = 1000 * 1000;
    if ($imagen['size'] > $medida) { //Comprobamos el tamaño de la imagen
        $errores[] =  'La imagen es muy pesada';
    }


    /** ENVIO DE LOS DATOS AL SERVIDOR (cuando no hay errores) **/
   if (empty($errores)) {
    
        //CREAMOS LA CARPETA PARA LAS IMAGENES
        $carpetaImagenes = '../imagenes/';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
            //comprovamos si existe para no duplicarla
        }


        //GENERAMOS NOMBRE UNICO DE LA IMAGEN
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";


        //SUBIMOS LA IMAGEN
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes .  $nombreImagen);


        //INSERTAMOS LOS DATOS EN LA BASE
        $query = "INSERT INTO fotografias (titulo,imagen) VALUES ('$titulo','$nombreImagen');";

        echo $query;

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            //redireccionar el usuario 
            header('Location: ../indexpropiedades.php');
        }

        //UNA VEZ SUBIDOS REDIRECCIONAMOS EL USUARIO HACIA LA PAGINA
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../build/css/app.css" />
</head>

<body>
    <?php
    include '../../includes/templates/whatsapp.php'
    ?>
    <header class="header">
        <?php
        include '../../includes/templates/header.php'
        ?>
    </header>
    <main class="contenedor">
        <h1>Crear un nuevo elemento</h1>

        <a href="../indexpropiedades.php" ><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="52" height="52" viewBox="0 0 24 24" stroke-width="2" stroke="#009988" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
</svg></a>

        <?php foreach ($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>

        <?php endforeach; ?>

        <form class="formularios-admin" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Información general</legend>

                <label for="titulo">Titulo:</label>
                <input id="titulo" type="text" name="titulo" placeholder="Titulo del servicio">

                <label for="imagen">Imagen:</label>
                <input id="imagen" type="file" name="imagen" accept="image/jpeg, image/png">
            </fieldset>
            <input name="crear" type="submit" class="boton boton-admin-crear" value="Crear Fotografia">
        </form>

    </main>


    <?php
    include '../../includes/templates/footer.php';
    ?>

</body>

</html>
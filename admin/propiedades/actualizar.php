<?php
//COMPROVAMOS SI EL USUARIO ESTA AUTENTICADO
session_start();
$auth = $_SESSION['login'];
if(!$auth){
    header('Location: /');
}




$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('location: indexpropiedades');
}

require '../../includes/config/database.php';
$db = conectarDB();


//Obtener datos de la propiedad
$consulta = "SELECT * FROM fotografias WHERE id = ${id}";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);


$errores = [];

$titulo = $propiedad['titulo'];
$imagenPropiedad = $propiedad['imagen'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $imagen = $_FILES['imagen'];

    /** MENSAJES DE ERROR **/

    if (!$titulo) {
        $errores[] = "Debes añadir un titulo";
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
        }


        if ($imagen['name']) {
            unlink($carpetaImagenes . $propiedad['imagen']);

            //Generar un nombre unico
            $nombreImagen = md5(uniqid(rand(), true))  . ".jpg";

            //Subir la imagen

            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);


            //Insertar en la base de datos
            $query = "UPDATE fotografias SET titulo='${titulo}', imagen = '${nombreImagen}'  WHERE id= ${id}";

            $resultado = mysqli_query($db, $query);
        }
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
        <h1>Actualizar elemento</h1>

        <a href="../indexpropiedades.php"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="52" height="52" viewBox="0 0 24 24" stroke-width="2" stroke="#009988" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
            </svg></a>

        <?php foreach ($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>

        <?php endforeach; ?>

        <form class="formularios-admin" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Información general</legend>

                <label for="titulo">Titulo:</label>
                <input id="titulo" type="text" name="titulo" placeholder="Titulo del servicio" value="<?php echo $titulo ?>">

                <label for="imagen">Imagen:</label>
                <input id="imagen" type="file" name="imagen" accept="image/jpeg, image/png">

                <img src="/admin/imagenes/<?php echo $imagenPropiedad; ?>" class="imagen_small">

            </fieldset>
            <input name="crear" type="submit" class="boton boton-admin-crear" value="Actualizar Fotografia">
        </form>

    </main>


    <?php
    include '../../includes/templates/footer.php';
    ?>

</body>

</html>
<?php

require 'includes/config/database.php';

$db = conectarDB();


//OBETENER LOS DATOS DE LA BASE DE DATOS
$query = "SELECT * FROM fotografias";
$resultadoConsulta = mysqli_query($db, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="build/css/app.css" />
</head>

<body>
  <?php
  include 'includes/templates/whatsapp.php'
  ?>
  <header class="header">
    <?php
    include 'includes/templates/header.php'
    ?>
  </header>
  <main>
    <section class="header-galeria">
      <h1>Nuestra galería</h1>
    </section>
    <section class="galeria contenedor">
      <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)) : ?>
        <article>
          <h2> <?php echo $propiedad['titulo'] ?> </h2>
          <img src="/admin/imagenes/<?php echo $propiedad['imagen'] ?>" alt="">
        </article>
      <?php endwhile; ?>

    </section>

  </main>


  <?php
  include 'includes/templates/footer.php'
  ?>
</body>

</html>
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
    <section class="fondo">
      <h1>Nuestros Servicios y Ofertas</h1>
    </section>

    <?php
    include 'includes/templates/servicios/navegacion_servicios.php'
    ?>

    <?php
    include 'includes/templates/servicios/servicios_lavados.php'
    ?>

    <?php
    include 'includes/templates/servicios/servivios_integrales.php'
    ?>

    <?php
    include 'includes/templates/servicios/servicios_especiales.php'
    ?>

    <?php
    include 'includes/templates/servicios/servicios_ofertas.php'
    ?>

  </main>
  <?php
  include 'includes/templates/footer.php'
  ?>

  <script src="/src/js/app.js"></script>
</body>

</html>
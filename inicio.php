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
      <h1>Dedicamos el tiempo necesario para cada vehiculo</h1>

      <?php
      include 'includes/templates/informacion_esencial.php'
      ?>


    </section>

    <section class="contenedor servicios-in barra-fija">
      <div class="descripcion-servicios-in">
        <h4>Servicios de lavado generales</h4>
        <h2>Los <span>mejores</span> servicios para una única experiencia </h2>
        <p>Os ofrecemos una gran variedad de servicios de lavado de vuestro vehículo.
          Estan perfectamente diseñados para que se adpten al presupuesto y a la necesidad
          de cada cliente. Te esperamos en nuestro autolavado en Granollers</p>
        <a class="boton-verde" href="#">Ver todos los servicios</a>
      </div>
      <article class="servicio-vip">
        
        <h2>Lavado VIP</h2>
        <a href="#">Saber más</a>

      </article>
      <article class="servicio-integral">

        <h2>Lavados integrales</h2>
        <a href="#">Saber más</a>

      </article>
    </section>





    <section class="contenedor servicio-especiales ">
      <h4>Servicios especiales</h4>
      <article class="especiales-tapizados" href="index.php">
        <h2>Tapizados</h2>
        <a href="#">Saber más</a>
      </article>
      <article class="especiales-puliment">
        <h2>Pulimento</h2>
        <a href="#">Saber más</a>
      </article>
      <article class="especiales-neumaticos">
        <h2>Cambio de neumáticos</h2>
        <a href="#">Saber más</a>
      </article>
    </section>


    <?php
    include 'includes/templates/formulario.php'
    ?>


  </main>

  <?php
  include 'includes/templates/footer.php'
  ?>


  <script src="/src/js/app.js"></script>
</body>

</html>
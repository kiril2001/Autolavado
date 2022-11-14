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
    <section class="header-nosotros">
      <h1>¿Quiénes somos?</h1>
    </section>
    <section class="nosotros contenedor">
      <div class="descripcion-nosotros">
        <h3>Autolavado Exprés</h3>
        <p class="sobrenosotros__texto">
          Somos una empresa dedicada especialmente al
          lavado profecional de todo tipo de vehículos. Con más de 10 años de
          experiencia en el sector de la limpieza de vehiculos, asesoramos a
          nuestros clientes para alcanzar el máximo beneficio en su instalación de lavado.
        </p>
      </div>
      <picture>
        <source srcset="/build/img/logo_negro.webp" type="image/webp">
        <source srcset="/build/img/logo_negro.png" type="image/png">
        <img src="/build/img/logo_negro.png" alt="Imagen logo Nosotros">
      </picture>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2983.8241768066537!2d2.284127615432238!3d41.59468627924567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4c7eb95a8ec4f%3A0xcddc751d0678323!2sAuto%20Lavado%20Expr%C3%A9s!5e0!3m2!1ses!2ses!4v1666861711438!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

  </main>


  <?php
  include 'includes/templates/footer.php'
  ?>
</body>

</html>
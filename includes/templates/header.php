<?php
if (!isset($_SESSION)) {
    session_start();
}
$auth = $_SESSION['login'] ?? false;
var_dump($auth);
?>

<div class="contenedor barra">

    <div class="barra-horizontal">
        <a class="logo" href="/index.php">
            <img src="/build/img/logo_blanco.webp" alt="Logotipo del autolavado" />
        </a>


        <div class="mobile-menu">
            <img src="/build/img/barras.svg" alt="Barra hamburguesa" />
        </div>
    </div>
    <nav class="navegacion">
        <a href="/inicio.php">Inicio</a>
        <a href="/nosotros.php">Sobre Nosotros</a>
        <a href="/servicios.php">Servicios</a>
        <a href="/galeria.php">Galería</a>
        <a href="/contacto.php">Contacto</a>
        <?php if ($auth) : ?>
            <a href="/cerrar-sesion.php">Cerrar Sesión</a>
        <?php endif; ?>
    </nav>

    <script src="/src/js/app.js"></script>
</div>
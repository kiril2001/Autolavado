<section class="inicio-inferior">
    <h2>¿Tienes alguna duda?</h2>
    <p>Rellena el cuestionario y la solucionaremos en un instante</p>
    <form class="formulario contenedor">

        <fieldset>
            <legend>Información personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu nombre" id="nombre">

            <label for="apellido">Apellido</label>
            <input type="text" placeholder="Tu Apellido" id="apellido">

            <label for="telefono">Teléfono</label>
            <input type="tel" placeholder="Tu teléfono" id="telefono">

            <label for="email">E-mial</label>
            <input type="email" placeholder="Tu correo electronico" id="email">



        </fieldset>

        <fieldset>
            <legend>¿Como desea ser contactado?</legend>
            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                <label for="contactar-email">E-mail</label>
                <input name="contacto" type="radio" value="email" id="contactar-email">
            </div>

        </fieldset>
        <fieldset>
            <legend>¿Que desea saber?</legend>
            <textarea id="mensaje" placeholder="Describe tu duda aquí" cols="30" rows="10"></textarea>

        </fieldset>
        <input type="submit" value="Enviar" class="boton-enviar">

    </form>

    <div class="contenedor informacion-esencial">

        <a href="tel:+34643704782">
            <p class="telefono">643 70 47 82</p>
        </a>
        <a class="correo" href="mailto:automirkam@yahoo.es">
            <p>automirkam@yahoo.es</p>
        </a>


    </div>
</section>
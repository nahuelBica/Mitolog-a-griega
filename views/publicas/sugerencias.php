<?php
    @include_once __DIR__. '/../base/header.php';
?>
    <h1 class="titulo-pagina">Sugerencias</h1>

    <p class="descripcion-pagina">Complete el siguiente formulario para enviar su sugerencia</p>

    <form class="form" id="form" action="">
        <div class="item__form">
            <label for="name">nombre:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <!---->
        <div class="item__form">
            <label for="email">email: </label>
            <input type="email" name="email" id="email" required>
        </div>
        <!---->
        <div class="item__form">
            <label for="mensaje">mensaje: </label>
            <textarea name="mensaje" id="mensaje" required></textarea>
        </div>
        <!---->
        <div class="botones">
            <input class="item__form--send" id="enviar" type="submit" value="Enviar">
            <input class="item__form--borrar" type="reset" value="Borrar">
        </div>
        
    </form>

<?php
    @include_once __DIR__. '/../base/footer.php';
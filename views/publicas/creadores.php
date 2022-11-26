<?php
    @include_once __DIR__. '/../base/header.php';
?>

    <section class="creadores contenedor">
        <div class="creador">
            <picture>
                <source srcset="build/img/user1.webp" type="image/webp">
                <img src="build/img/user1.png" loading="lazy" alt="creador1" type="image/png">
            </picture>
            <h3 class="creador__nombre">Ignacio Dorrego</h3>
            <h3 class="creador__uso">Estudiante</h3>
        </div>

        <div class="creador">
            <picture>
                <source srcset="build/img/user2.webp" type="image/webp">
                <img src="build/img/user2.png" loading="lazy" alt="creador2" type="image/png">
            </picture>
            <h3 class="creador__nombre">Nahuel Bica</h3>
            <h3 class="creador__uso">Estudiante</h3>
        </div>
    </section>
    
    <section class="motivo contenedor">
        <p>El motivo de realizacion de este sitio ha sido para brindarles algo de informacion sobre la mitologia griega, esta informacion podria servirles de modo para que ustedes puedan interesarse en el tema, el cual es bastante extenso y da mucho de lo que hablar y por ende hacerles investigar e indagar mas. Esperemos les haya resultado util esta informacion</p>
    </section>

<?php
    @include_once __DIR__. '/../base/footer.php';
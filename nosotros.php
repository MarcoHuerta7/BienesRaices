<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div><!--.picture-->
            <div class="texto-nosotros">
                <blockquote>
                    25 años de Experiencia
                </blockquote>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis eos voluptatum 
                    cupiditate nobis maiores laboriosam expedita minus ullam. Dolores rem saepe at 
                    ut omnis, amet aliquid nobis incidunt molestias 
                    voluptatibus.
                </p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, laudantium 
                    hic repellat officiis, deserunt pariatur quisquam laborum ratione debitis ipsum 
                    doloribus, dolorem possimus voluptates doloremque consequatur. Porro distinctio 
                    nobis esse!
                </p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Dignissimos, atque dolorum fugit 
                    tempore fuga possimus maiores, nam quam unde nisi 
                    similique enim tenetur id reiciendis in ratione odit quis veritatis!</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Dignissimos, atque dolorum fugit 
                    tempore fuga possimus maiores, nam quam unde nisi 
                    similique enim tenetur id reiciendis in ratione odit quis veritatis!</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Dignissimos, atque dolorum fugit 
                    tempore fuga possimus maiores, nam quam unde nisi 
                    similique enim tenetur id reiciendis in ratione odit quis veritatis!</p>
            </div>
        </div>
    </section>

    <?php include 'includes/templates/footer.php' ?>
</body>
</html>
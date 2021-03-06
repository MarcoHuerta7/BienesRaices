<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                    <p>4</p>
                </li>
            </ul>
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
    </main>

    <?php include 'includes/templates/footer.php' ?>
</body>
</html>
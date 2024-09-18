<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>

                <p>Contamos con 25 años de experiencia en el sector inmobiliario, lo que nos ha permitido consolidarnos como una empresa de confianza y excelencia. A lo largo de estos años, hemos ayudado a miles de familias a encontrar el hogar de sus sueños y a inversionistas a obtener propiedades con un alto rendimiento. Nuestra trayectoria se basa en un profundo conocimiento del mercado, una atención personalizada y un compromiso inquebrantable con la satisfacción de nuestros clientes.
                Cada proyecto que emprendemos refleja nuestra pasión por ofrecer un servicio profesional, cercano y eficiente, asegurándonos de cumplir con los más altos estándares de calidad en cada etapa del proceso. Desde asesoría especializada hasta el cierre exitoso de una transacción, puedes confiar en que nuestra experiencia está siempre a tu servicio.</p>

            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
        <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>La seguridad de nuestros clientes es nuestra máxima prioridad. Nos aseguramos de que todas las propiedades que ofrecemos cumplen con estrictos estándares de seguridad y regulaciones legales. Desde ubicaciones en vecindarios seguros hasta el cumplimiento de normativas de construcción, nos esforzamos para garantizar que tu nuevo hogar te brinde paz y tranquilidad.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Nos comprometemos a ofrecer las mejores propiedades al precio justo. Entendemos que encontrar una casa que se ajuste a tu presupuesto es crucial, por eso analizamos constantemente el mercado para asegurar que nuestros precios sean competitivos y reflejen el verdadero valor de cada inmueble. Con nosotros, obtienes transparencia y honestidad en cada transacción, sin costos ocultos ni sorpresas.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Sabemos que el tiempo es valioso, y nos esforzamos para cumplir con los plazos prometidos. Desde la búsqueda de la casa perfecta hasta el cierre de la compra, nuestro equipo trabaja diligentemente para garantizar que el proceso sea rápido y eficiente. Nos aseguramos de que todos los trámites y gestiones se realicen de manera oportuna, para que puedas mudarte a tu nuevo hogar sin demoras innecesarias.</p>
            </div>
        </div>
    </section>

<?php 
    incluirTemplate('footer');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mugiwara | One Piece Blog</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        label {
            width: 250px;
            display: block;
            font-size: 16px;
            margin-top: 10px;
        }
        input, textarea {
            width: 300px;
            font-size: 18px;
        }
    </style>
</head>
<body>
     <!-- Menu -->
    <header class="header">
        <div class="menu-container">
            <a href="#" class="logo">Mugiwara | One Piece Blog</a>
            <input type="checkbox" id="menu">
            <label for="menu" class="menu-icono">
                <img src="img/menu.png" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <?php
                    $menuItems = array(
                        array("id" => "inicio", "nombre" => "Inicio"),
                        array("id" => "nosotros", "nombre" => "Nosotros"),
                        array("id" => "personajes", "nombre" => "Personajes"),
                        array("id" => "contacto", "nombre" => "Contacto")
                    );

                    foreach ($menuItems as $item) {
                        echo '<li><a href="#' . $item['id'] . '">' . $item['nombre'] . '</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
         <!-- Inicio -->            
        <div class="header-content-container" id="inicio">
            <div class="header-txt">
                <h1>Mugiwara</h1>
                <p>Bienvenido al blog de One Piece, donde encontrarás noticias, teorías y todo lo relacionado con el mundo de los piratas más famosos.</p>
                <a href="vermaspersonajes.php" class="btn-1">Leer Más</a>
            </div>
            <div class="header-img">
                <img src="img/mugiwara.png" alt="Imagen de One Piece">
            </div>
        </div>
    </header>
     <!-- Nosotros -->                
    <section class="about-container" id="nosotros">
        <div class="about-img">
            <img src="img/about.png" alt="Sobre Nosotros">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>Somos un grupo de fanáticos de One Piece dedicados a compartir noticias, teorías y todo lo relacionado con este increíble manga y anime. Únete a nuestra comunidad y comparte tu pasión con nosotros.</p>
           
        </div>
    </section>
    <!-- Personajes -->
    <section class="section-container" id="personajes">
        <div class="section-img">
            <img src="img/characters.png" alt="Personajes">
        </div>
        <div class="section-txt">
            <h2>Personajes</h2>
            <p>Descubre a los personajes más emblemáticos de One Piece. Desde Luffy y sus amigos, hasta los temibles villanos que se interponen en su camino.</p>
            <br>
            <a href="vermaspersonajes.php">Ver más</a>
        </div>
    </section>

    <section class="section-container" id="contacto">
        <div class="section-img">
            <img src="img/contact.png" alt="Contacto">
        </div>
        <div class="section-txt">
            <h2>Contacto</h2>
            <p>¿Tienes alguna pregunta o comentario? Contáctanos y únete a nuestra comunidad de seguidores de One Piece. Estamos aquí para escuchar tus opiniones y sugerencias.</p>
            <br>
            <!-- Formulario de Contacto -->
            <form method="POST" action="guardar_contacto.php">
                <div>
                    <label>Nombre</label>
                    <input type="text" name="nombre" placeholder="Ingrese su nombre">
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Ingrese su email">
                </div>
                <div>
                    <label>Mensaje</label>
                    <textarea name="mensaje" placeholder="Ingrese su mensaje"></textarea>
                </div>
                <div>
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <a href="#" class="logo">Mugiwara | One Piece Blog</a>
            </div>
            <div class="footer-social">
                <?php
                $footerRedesSociales = array(
                    array("icono" => "fab fa-facebook-f", "url" => "https://www.facebook.com/"),
                    array("icono" => "fab fa-twitter", "url" => "https://twitter.com/x/migrate?tok=7b2265223a222f222c2274223a313731383730363739317d64368132d36dfdd70decf96745d8adb8"),
                    array("icono" => "fab fa-instagram", "url" => "https://www.instagram.com/"),
                    array("icono" => "fab fa-youtube", "url" => "https://www.youtube.com/?themeRefresh=1")
                );

                foreach ($footerRedesSociales as $redSocial) {
                    echo '<a href="' . $redSocial['url'] . '" class="social-icon"><i class="' . $redSocial['icono'] . '"></i></a>';
                }
                ?>
            </div>
        </div>
    </footer>
</body>
</html>

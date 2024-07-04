<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mugiwara | One Piece Blog</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Estilos para el formulario de contacto */
        .contacto-container {
            margin-top: 30px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contacto-container h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }
        .contacto-container label {
            width: 150px;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
        }
        .contacto-container input, .contacto-container textarea {
            width: calc(100% - 12px);
            padding: 6px;
            font-size: 16px;
            margin-top: 6px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .contacto-container textarea {
            height: 120px;
            resize: vertical;
        }
        .contacto-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .contacto-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header class="header">
        
    </header>

    <section class="about-container" id="nosotros">
        
    </section>

    <section class="section-container" id="personajes">
        
    </section>

    <section class="section-container" id="contacto">
        <div class="section-img">
            <img src="img/contact.png" alt="Contacto">
        </div>
        <div class="section-txt">
            <h2>Contacto</h2>
            <p>¿Tienes alguna pregunta o comentario? Contáctanos y únete a nuestra comunidad de seguidores de One Piece. Estamos aquí para escuchar tus opiniones y sugerencias.</p>
            
            <!-- Formulario de Contacto -->
            <div class="contacto-container">
                <form method="POST" action="guardar_contacto.php">
                    <div>
                        <label>Nombre</label>
                        <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Ingrese su email" required>
                    </div>
                    <div>
                        <label>Mensaje</label>
                        <textarea name="mensaje" placeholder="Ingrese su mensaje" required></textarea>
                    </div>
                    <div>
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        
    </footer>
</body>
</html>

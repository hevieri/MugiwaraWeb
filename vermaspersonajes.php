<?php
// Archivo de conexión a la base de datos
include 'conexion.php';

// Consulta SQL para obtener todos los personajes
$sql = "SELECT * FROM personajes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes de One Piece</title>
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            padding: 20px;
        }
        .personaje-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .personaje-container h2 {
            color: #000;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .personaje-container p {
            font-size: 16px;
            line-height: 1.6;
        }
        .personaje-container img {
            max-width: 100%;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Personajes de One Piece</h1>
    <?php
    // Verifica si se obtuvieron resultados
    if ($result->num_rows > 0) {
        // Iterar sobre cada fila de resultados
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="personaje-container">
                <h2><?php echo $row["nombre"]; ?></h2>
                <p><?php echo $row["descripcion"]; ?></p>
                
                <img src="data:image/jpeg;base64,<?php echo $row["image"]; ?>" alt="Imagen">
                
            </div>
            <?php
        }
    } else {
        echo "<p>No se encontraron personajes en la base de datos.</p>";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
    ?>
</body>
</html>

<? 
public function hex2bin($data)
{
    $bin    = "";
    $i      = 0;
    do {
        $bin    .= chr(hexdec($data{$i}.$data{($i + 1)}));
        $i      += 2;
    } while ($i < strlen($data));
    return $bin;
}
?>

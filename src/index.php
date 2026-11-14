<?php
$host = getenv('DB_HOST');
$dbname = getenv('DB_NAME');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

try {
    $conexion = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conexion->exec("
        CREATE TABLE IF NOT EXISTS visitas (
            id INT AUTO_INCREMENT PRIMARY KEY,
            fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ");

    $conexion->exec("INSERT INTO visitas () VALUES ()");

    $total = $conexion->query("SELECT COUNT(*) FROM visitas")->fetchColumn();

    $mensaje = "Conexión exitosa con la base de datos MySQL";
    $estado = "Conectado";

} catch (PDOException $e) {
    $mensaje = "Error de conexión: " . $e->getMessage();
    $estado = "Desconectado";
    $total = 0;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo - Docker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f3f5;
            text-align: center;
            padding: 80px 20px;
        }

        .contenedor {
            background: white;
            max-width: 550px;
            margin: auto;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #0002;
        }

        h1 {
            color: #2563eb;
        }

        .estado {
            color: #16803c;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>¡Hola mundo!</h1>

        <p>Mi aplicación web funciona con PHP y Docker Compose.</p>

        <h2>Estado de la base de datos</h2>

        <p class="estado">
            <?php echo htmlspecialchars($estado); ?>
        </p>

        <p>
            <?php echo htmlspecialchars($mensaje); ?>
        </p>

        <p>
            Visitas registradas:
            <strong><?php echo htmlspecialchars((string)$total); ?></strong>
        </p>
    </div>
</body>
</html>
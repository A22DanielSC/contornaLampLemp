<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Consulta a la Base de Datos PrestaShop</title>
</head>

<body>
    <h2>Datos de la tabla ps_zone</h2>
    <?php
    // Datos de conexión a la base de datos
    $servidor = '10.0.0.220';
    $usuario = 'a22danielsc';
    $contrasena = 'abc123.';
    $base_datos = 'prestashowdb';

    // Conexión a la base de datos
    $conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consulta SQL
    $sql = "SELECT * FROM ps_zone";

    // Ejecutar la consulta
    $resultado = $conexion->query($sql);

    // Mostrar los datos en una tabla
    if ($resultado->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>id_zone</th>
                    <th>name</th>
                    <th>active</th>
                </tr>";
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>{$fila['id_zone']}</td>
                    <td>{$fila['name']}</td>
                    <td>{$fila['active']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
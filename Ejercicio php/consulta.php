<?php
include ("conexion.php");

// Aquí puedes agregar tu código de consulta
$sql = "SELECT * FROM clasificacion";
$result = $conn->query($sql);
echo "<h1> Tabla de clasificacion de arañas</h1>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Nombre Común</th>
    <th>Nombre Científico</th>
    <th>Orden</th>
    <th>Peligro Humano</th>
    </tr>";

    // Mostrar los datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nombre_comun"] . "</td>";
        echo "<td>" . $row["nombre_cientifico"] . "</td>";
        echo "<td>" . $row["orden"] . "</td>";
        echo "<td>" . $row["peligro_humano"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

// Cerrar la conexión
$conn->close();
?>

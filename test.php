<?php
$conn = mysqli_connect('localhost', 'pani_cms', 'Yngwie81', 'pani_cms');

if (!$conn) {
    die('Error de conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

echo '¡Conexión exitosa a la base de datos pani_cms!';
mysqli_close($conn);
?>
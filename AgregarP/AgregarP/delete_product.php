<?php
require 'db_connection.php';
$conn = getDBConnection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el producto
    $stmt = $conn->prepare("DELETE FROM producto WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    echo "Producto eliminado exitosamente.";
    // Redirigir a la lista de productos
    header("Location: manage_product.php");
    exit();
}
?>

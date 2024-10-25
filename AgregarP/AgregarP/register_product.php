<?php
// Datos de conexión
$host = 'localhost'; // XAMPP usa localhost
$db = 'tienda_de_ropa'; // Nombre de la base de datos
$user = 'root'; // Usuario por defecto de XAMPP
$pass = ''; // Sin contraseña por defecto en XAMPP

try {
    // Crear conexión
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Comprobar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoger datos del formulario
        $name = $_POST['name'];
        $description = $_POST['description'];
        $genero = $_POST['genero'];
        $Talla = $_POST['Talla'];
        $price = $_POST['price'];
        $color = $_POST['color'];

        // Manejar la subida de la imagen
        $image = $_FILES['image']['name'];
        $target_dir = "uploads/";
        
        // Crear un nombre único para el archivo
        $imageFileType = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        $uniqueImageName = uniqid() . '.' . $imageFileType; // Nombre único
        $target_file = $target_dir . $uniqueImageName;

        // Verificar si el directorio existe, si no, crearlo
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true); // Crea el directorio
        }

        // Comprobar tamaño del archivo (5MB máximo)
        if ($_FILES['image']['size'] > 5000000) {
            echo "Lo sentimos, el archivo es demasiado grande.";
        } else {
            // Intentar mover el archivo
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                // Insertar datos en la base de datos
                $stmt = $conn->prepare("INSERT INTO producto (name, description, genero, Talla, price, color, image) VALUES (:name, :description, :genero, :Talla, :price, :color, :image)");
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':genero', $genero);
                $stmt->bindParam(':Talla', $Talla);
                $stmt->bindParam(':price', $price);
                $stmt->bindParam(':color', $color);
                $stmt->bindParam(':image', $target_file);
                
                // Ejecutar la consulta
                $stmt->execute();
                echo "Producto registrado exitosamente.";
            } else {
                echo "Lo sentimos, hubo un error al subir la imagen.";
            }
        }
    }
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>

<?php
include("./assets/PHPMailer/src/PHPMailer.php");
include("./assets/PHPMailer/src/SMTP.php");
include("./assets/PHPMailer/src/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "rt"; 

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $correo = htmlspecialchars($_POST["correo"]);

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }


    $stmt = $conn->prepare("INSERT INTO mensajes (nombre, asunto, correo, mensaje) VALUES (?, ?, ?, ?)");
    $mensaje = "Correo enviado"; 
    $stmt->bind_param("ssss", $nombre, $subject, $correo, $mensaje);

 
    if ($stmt->execute()) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar los datos: " . $stmt->error;
    }

    $mail = new PHPMailer();


    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.outlook.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sergiocornerlio1234@outlook.com';
        $mail->Password = 'sergio1234';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';

        $mail->setFrom('sergiocornerlio1234@outlook.com', 'sergio');
        $mail->addAddress($correo, $nombre);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = file_get_contents("plantilla.html");

        $mail->send();
        echo "Mensaje enviado";

        
$conexion= mysqli_connect("localhost","root","","rt");
//$sql="INSERT INTO `usuario`(`nombre`, `correo`, `asunto`, `mensaje`) VALUES ('edgar','edgar@tec.com','Prueba','Mensaje de prueba')";
//$result=mysqli_query($conexion,$sql);
//echo    "listo";
 
$sql1="SELECT * FROM `mensajes`";
$result=mysqli_query($conexion,$sql1);
 
echo    "listo";
/////
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div style='border: 7px solid #c0c0c0; padding: 10px; margin: 10px; border-radius: 5px;'>";
    echo "<h3>ID: " . $row['id'] . "</h3>";
    echo "<p><strong>Nombre:</strong> " . $row['nombre'] . "</p>";
    echo "<p><strong>Correo:</strong> " . $row['correo']. "</p>";
    echo "<p><strong>Asunto:</strong> " . $row['asunto'] . "</p>";
    echo "<p><strong>Mensaje:</strong> " . $row['mensaje'] . "</p>";
    echo "</div>";
}
 
 
    } catch (PHPMailer\Exception $e) {
        echo "No se pudo enviar el correo. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

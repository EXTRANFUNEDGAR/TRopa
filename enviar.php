<?php
include("./assets/PHPMailer/src/PHPMailer.php");
include("./assets/PHPMailer/src/SMTP.php");
include("./assets/PHPMailer/src/Exception.php");


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

    
    $stmt->close();
    $conn->close();

   
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.outlook.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'correo';
        $mail->Password = '';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';

        $mail->setFrom('correo', 'Edgar');
        $mail->addAddress($correo, $nombre);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = file_get_contents("plantilla.html");

        $mail->send();
        echo "Mensaje enviado";
    } catch (PHPMailer\PHPMailer\Exception $e) {
        echo "No se pudo enviar el correo. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

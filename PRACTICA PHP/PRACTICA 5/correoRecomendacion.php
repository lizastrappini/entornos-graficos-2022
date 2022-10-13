<?php 

//SIN USAR LIBERIA PHPMAILER Y USANDO 0000webhost.com
/*	if(isset($_POST['enviar'])){
		if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['msj']) ){
			$name = $_POST['name'];
			$asunto = $_POST['asunto'];
			$msj = $_POST['msj'];
			$email = $_POST['email'];
			//no estoy validando los campos

			$header= "From: lizaotrascosas@gmail.com"."\r\n";
			$header.= "Reply-To: lizaotrascosas@gmail.com"."\r\n";
			$header.= "X-Mailer: PHP/".phpversion();
			$mail = mail($email,$asunto,$msj,$header);
			if($mail){
				echo "<h4>¡mail enviado!<h4>";
			}
		}
	}

*/

//USANDO PHPMAILER

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );

    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                      	//Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'lizaotrascosas@gmail.com';                     //SMTP username
    $mail->Password   = 'STRAPPINIliza10';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $emailTo=$_POST["ToEmail"]; 
    $mail->setFrom('lizaotrascosas@gmail.com', 'Mailer');
    $mail->addAddress($emailTo, 'Joe User');    //recupero mail de destino


    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Prueba de mail';
    $mail->Body    = "<h1>Hola Te recomiendo este sitio<h1>
    <a href='https://facebook.com/'>Facebook</a> 
    <b>in bold!</b>";


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}	
?>
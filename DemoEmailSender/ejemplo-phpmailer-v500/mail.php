<?php
// TODO: Passar a array el tocho de paràmetres
// TODO: Afegir opció attachment. Vore alhambraguitarras.com contact_send.php
function sendmailAUTH(){
	$to="correoQueRecibe";
	$sender="CorreoQueEnvia";
	$subject="Titulo";
	$body="contenido";
	$smtpHost="host";
	$smtpUser="miUsuario";
	$smtpPass="miContraseña";
	$smtpPort="Mi Puerto";
	$smtpSecure="";
		try{
			require("class.phpmailer.php");

			$mail = new PHPMailer();
			$mail->IsSMTP();
				$mail->SMTPDebug = 2;
				
				if ($smtpSecure) {
					$mail->SMTPSecure = $smtpSecure;
				}
				
			$mail->Host = $smtpHost;
			$mail->Port = $smtpPort;
			$mail->From = $sender;
			$mail->Subject = $subject;
			$mail->IsHTML(true);
			$mail->MsgHTML($body);
			$mail->AddAddress($to);
			
			$mail->SMTPAuth = true;
			$mail->Username = $smtpUser;
			$mail->Password = $smtpPass;
			
			if($mail->Send()){
				echo 'Message has been sent';
			}
		}catch(Exception $e){
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
}

echo(file_get_contents("TemplatePokemon.php"));
echo("Holaaaaa");
SendmailAUTH();
?>
					
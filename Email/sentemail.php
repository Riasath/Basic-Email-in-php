<?php
	$mypassword = $_POST['mypassword'];
 	$sender = $_POST['sender'];
	$Subject = $_POST['Subject'];
	$body = $_POST['body'];
	
	//echo "$sender $Subject $body";

	require_once 'mailer/class.phpmailer.php';
	$mail = new PHPMailer();

	$message = "<html><body>";
	$message .= $body;
	$message .= "</body></html>";

	
			try
			{
				$mail->IsSMTP(); 
				$mail->isHTML(true);
				$mail->SMTPDebug  = 0;                     
				$mail->SMTPAuth   = true;                  
				$mail->SMTPSecure = "ssl";                 
				$mail->Host       = "smtp.gmail.com";      
				$mail->Port       = 465;             
				$mail->AddAddress($sender);
				$mail->Username   ="shuvrohosain@gmail.com";  
				$mail->Password   =$mypassword;            
				$mail->SetFrom("shuvrohosain@gmail.com","Shuvro");
				$mail->AddReplyTo("shuvrohosain@gmail.com","Shuvro");
				$mail->Subject    = $Subject;
				$mail->Body 	  = $message;
				$mail->AltBody    = $message;
					
				if($mail->Send())
				{
					
					$msg = "email sent";
					
				}
			}
			catch(phpmailerException $trr)
			{
				$msg = $trr->errorMessage();
			}

?>





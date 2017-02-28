<?php
	$mypassword = $_POST['mypassword'];
 	$sender = $_POST['sender'];
	$Subject = $_POST['Subject'];
	$body = $_POST['body'];
	
	//echo "$sender $Subject $body";
	
		$file = rand(1000,100000)."-".$_FILES['file']['name'];
		$file_loc = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
		$file_type = $_FILES['file']['type'];
		$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	move_uploaded_file($file_loc,$folder.$final_file);
	$path_of_uploaded_file = $folder . $final_file;
	
	//.............................

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
				$file_to_attach = $path_of_uploaded_file;
				$mail->AddAttachment( $file_to_attach , $final_file );
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





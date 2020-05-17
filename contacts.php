<? php
      $name = $_Post['name'];
	  $visitor_email = $_POST['email'];
	  $message = $_Post['message'];
	  
	  
	  $email_form = 'krunal.shah320@gmail.com';
	  
	  $email_subject = "New Submission";
	  
	  $email_body = "User Name: $Name.\n".
                      "User Email: $Visitor_email.\n".
					        "User Message: $message.\n";
							
      $to = "joyusindian.clothier@gmail.com";
	  
	  $headers = "From: $email_form \r\n";
	  
	  $headers .= "Reply-To: $visitor_email \r\n";
	  
	  mail($to,$email_subject,$email_body,$headers);
	  
	  header("Location; index.html);
	  
?>
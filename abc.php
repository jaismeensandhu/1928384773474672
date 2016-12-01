<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "jaismeen.sandhu@yahoo.com";
  $server_email = "jaismeen.sandhu@gmail.com";
  $uemail = $_REQUEST['email'];
  $subject = $_REQUEST['title'];
  $message = $_REQUEST['message'];
  $fullName = $_REQUEST['fullName'];
  $contactNumber = $_REQUEST['contactNumber'];
  $email_message = "Title: ".$subject."\n";
  $email_message .= "Name: ".$fullName."\n";
  $email_message .= "Email: ".$uemail."\n";
  $email_message .= "Conatct Number: ".$contactNumber."\n";
  $email_message .= "Message: ".$message."\n";
  //send email
  mail($admin_email, "$subject", $email_message, "From:" . $server_email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>
 <form id="contact" method="post">
    				<fieldset>
						<input placeholder="Request Title" name="title" type="text" tabindex="1" required>
					</fieldset>
					<fieldset>
						<input placeholder="Full name" name="fullName" type="text" tabindex="2" required>
					</fieldset>
					<fieldset>
						<input placeholder="Email Address" name="email" type="email" tabindex="3" required>
					</fieldset>
					<fieldset>
						<input placeholder="Phone Number" name="contactNumber" type="tel" tabindex="4" required>
					</fieldset>
					<fieldset>
						<textarea placeholder="Type your Message Here...." name="message" tabindex="5"></textarea>
					</fieldset>
					<fieldset>
						<button name="submit" value="submit" type="submit" id="contact-submit">Submit</button>
					</fieldset>
	</form>
  
<?php
  }
?>

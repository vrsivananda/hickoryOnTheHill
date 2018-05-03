<?php

$EmailFrom = "contactForm@HickoryOnTheHill.com";
$EmailTo = "contact@hickoryonthehill.com";
$Subject = "Contact Form Inquiry";
$Name = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: \n";
$Body .= $Name;
$Body .= "\n\n";
$Body .= "Email: \n";
$Body .= $Email;
$Body .= "\n\n";
$Body .= "Message: \n";
$Body .= $Message;
$Body .= "\n\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactThanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
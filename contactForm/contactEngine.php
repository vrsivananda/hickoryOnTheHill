<?php

//Define variables and set to empty values
$NameErr = $EmailErr = $MessageErr = "";
$Name = $Email = $Message = '';

//If the posting is requested and fields are empty, then set the error messages
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["Name"])){
		$NameErr = "Name is required";
	}
	if(empty($_POST["Email"])){
		$EmailErr = "Email is required";
	}
	if(empty($_POST["Message"])){
		$MessageErr = "Message is required";
	}
}


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

//All these echoes are for debugging
echo("<script>console.log('Name: ".$Name."');</script>");
echo("<script>console.log('Email: ".$Email."');</script>");
echo("<script>console.log('Message: ".$Message."');</script>");

//Flag to check if successful
$success = false;

// send email only if fields are not empty
if(isset($Name) === true && $Name != '' && isset($Email) === true && $Email != '' && isset($Message) === true && $Message != '' ){
	
	// try to send the email
	$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
}

// redirect to success page if we sent the email
if ($success){
  
 print "<meta http-equiv=\"refresh\" content=\"0;URL=contactThanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactError.php\">";
}


?>
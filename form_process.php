<?php 
require("sendgrid-php/sendgrid-php.php");
// define variables and set to empty values
$name_error = $email_error  = "";
$name = $email = $message= $subject= "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format"; 
    }
  }
  
  


  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }

  if (empty($_POST["subject"])) {
    $subject = "";
  } else {
    $subject = test_input($_POST["subject"]);
  }
  

  if ($name_error == '' and $email_error == '' and $phone_error == '' and $url_error == '' ){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
      

      $from = new SendGrid\Email(null, $email);
      //$subject = "Hello World from the SendGrid PHP Library!";
      $to = new SendGrid\Email(null, "ewulonu.mitchell@yahoo.ie");
      $content = new SendGrid\Content("text/plain", $message);
      $mail = new SendGrid\Mail($from, $subject, $to, $content);

      $apiKey = getenv('SENDGRID_API_KEY');
      $sg = new \SendGrid($apiKey);

      $response = $sg->client->mail()->send()->post($mail);     

      
      //$to = 'ewulonu.mitchell@yahoo.ie';
      //$headers="From: ".$email;
      if ($response != null){
          $success = "Message sent, thank you for contacting me " . $name. "!";
          $name = $email = $phone = $message = $subject = '';
      }
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
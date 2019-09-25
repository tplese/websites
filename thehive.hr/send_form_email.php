<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "ivan.plese@gmail.com";
 
    $email_subject = "The Hive Novi kontakt";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    // if(!isset($_POST['name2']) ||
 
    //     !isset($_POST['email2']) ||
 
    //     !isset($_POST['message2'])  {
 
    //     died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    // }
 
     
 
    $name2 = $_POST['name2']; // required
 
    $email2 = $_POST['email2']; // required
 
    $message2 = $_POST['message2']; // required
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  // if(!preg_match($email_exp,$email_from)) {
 
  //   $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  // }
 
  //   $string_exp = "/^[A-Za-z .'-]+$/";
 
  // if(!preg_match($string_exp,$first_name)) {
 
  //   $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  // }
 
  // if(!preg_match($string_exp,$last_name)) {
 
  //   $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  // }
 
  // if(strlen($comments) < 2) {
 
  //   $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  // }
 
  // if(strlen($error_message) > 0) {
 
  //   died($error_message);
 
  // }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($name2)."\n";
 
    $email_message .= "Last Name: ".clean_string($email2)."\n";
 
    $email_message .= "Email: ".clean_string($message2)."\n";
     
 
// create email headers
 
$headers = 'From: '.$email2."\r\n".
 
'Reply-To: '.$email2."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>
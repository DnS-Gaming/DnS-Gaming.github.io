<?php
if (isset($_POST['demo-email'])) {

    // EDIT THE FOLLOWING TWO LINES:
    $email_to = "dnsgamingdeveloper@gmail.com";
    $email_subject = "Tester";

    $name = $_POST['demo-name']; // required
    $email = $_POST['demo-email']; // required
    $message = $_POST['demo-message']; // required

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

         $header = "From:'. $email .' \r\n";
         $header .= "Cc:'. $email_to .' \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
    @mail($email_to, $email_subject, $email_message,$header);
?>

    <!-- INCLUDE YOUR SUCCESS MESSAGE BELOW -->

    Thanks for getting in touch. We'll get back to you soon.

<?php
}
?>

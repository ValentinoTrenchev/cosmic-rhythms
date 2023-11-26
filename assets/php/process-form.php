<?php

if (isset($_REQUEST['name'],$_REQUEST['surname'],$_REQUEST['email'])) {

      

    $name = $_REQUEST['name'];

    $surname = $_REQUEST['surname']

    $mail = $_REQUEST['email'];

    $message = $_REQUEST['comment'];

      

    // Set your email address where you want to receive emails. 

    $to = 'valentino@trencev.com';

      

    $subject = 'Contact From My Website';

    $headers = "From: ".$name." <".$mail."> \r\n";

      

    $send_email = mail($to,$subject,$message,$headers);

      

    echo ($send_email) ? 'success' : 'error';

      

}

?>
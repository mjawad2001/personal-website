<?php
    $fullname = $_POST['name'];
    $vemail = $_POST['email'];
    $vmessage = $_POST['message'];


    $email_from = 'mjawad20011@outlook.com';

    $email_subject = "New Form Submission ";

    $email_body = "User Name: $fullname.\n".
                    "User Email: $vemail.\n".
                    "User Message:$vmessage.\n";


    $to = "mjawad20011@outlook.com";

    $headers = "From: $email_from \r\n";

    $headers.= "Reply-To: $vemail\r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Loaction: index.html");


?>
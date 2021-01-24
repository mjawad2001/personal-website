<?php
    $fullname = $_POST['name'];
    $vemail = $_POST['email'];
    $vmessage = $_POST['message'];


    $email_form = 'mdjawad510@gmail.com';

    $email_subject = "New Form Submission ";

    $email_body = "User Name: $fullname.\n".
                    "User Email: $vemail.\n".
                    "User Message:$vmessage.\n";


    $to = "mdjawad510@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers.= "Reply-To: $vemail\r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Loaction: index.html");


?>
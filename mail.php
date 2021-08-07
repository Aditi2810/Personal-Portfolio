 <?php

if(isset($_POST['esubmit']))
{
    $to = "adititib@gmail.com";
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['email'];
    $headers = "From : $from";

    mail($to , $subject, $message, $headers);
    
}
<?php
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$message = $_REQUEST["message"];
$full_message = "FROM: " . $name. 
                "\n Email: " .$email . 
                "\n Phone: " .$phone.
                "\n Message" . $message;
$to = "info@serapisrbk.com";
$subject = "Message from : " . $name;
// try{
    mail($to, $subject, $full_message);
    echo "Your email has been send seccessfully!";
    sleep(3);
    header('Location: index.html');

// }
// catch(Exception $e){
//     echo "Error" . $e;
// }

?>
<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RBK | Serapis</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $message = $_REQUEST["message"];
    $full_message = "FROM: " . $name. 
                    "\n Email: " .$email . 
                    "\n Phone: " .$phone.
                    "\n Message: " . $message;
    $to = "info@serapisrbk.com";
    // $to = "almuhder@gmail.com";
    $subject = "Message from : " . $name;
    $headers = 'From: webmaster@serapisrbk.com' . "\r\n" .
        'Reply-To: info@serapisrbk.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail("almuhder@gmail.com", $subject, $full_message, $header);
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div dir="rtl" class="container">
            <div class="alert alert-success text-center">
                    <strong>شكرا جزيلا!</strong> تم إرسال رسالتك بنجاح، سيتم التواصل معك قريبا!
                    <br>
                    <strong>Thank you!</strong> Your message has been sent successfully! We will contact you soon
            </div>
            <p class="text-center" style="margin-top:-5px;"><a href="https://serapisrbk.com">اضغط هنا</a> للعودة إلى الموقع</p>
            <p class="text-center" style="margin-top:-5px;"><a href="https://serapisrbk.com">Click Here</a> to go back to the website</p>
            <script>
            setInterval(function(){
                window.location.href = "http://serapisrbk.com/";
            }, 3000);
            </script>
    </div>
</body>
</html>
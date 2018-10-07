<html>
    <head>
        <meta charset="UTF-8">
        <title>Send I-6 Form</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="main">
            <h1>Send I-6 Form</h1>
            <div id="login">
                <h2>Send Email</h2>
                <hr/>
                <form action="SendForm1-6.php" method="post">
                    <input type="text" placeholder="Enter your Gmail ID" name="email"/>
                    <input type="password" placeholder="Enter your Gmail Password" name="password"/>
                    <input type="text" placeholder="To : Email Id " name="toid"/>
                    <input type="text" placeholder="Subject : " name="subject"/>
                    <textarea rows="4" cols="50" placeholder="Enter Your Message..." name="message"></textarea>
                    <input type="file" name="uploaded_file" id="uploaded_file" />
                    <input type="submit" value="Send" name="send"/>
                </form>
            </div>
        </div>
          <?php
              require '../phpmailer/phpmailer/PHPMailerAutoload.php';
              if(isset($_POST['send']))
                  {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $to_id = $_POST['toid'];
                    $message = $_POST['message'];
                    $subject = $_POST['subject'];
                    $mail = new PHPMailer;
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->Port = 587;
                    $mail->SMTPSecure = 'tls';
                    $mail->SMTPAuth = true;
                    $mail->Username = $email;
                    $mail->Password = $password;
                    $mail->setFrom('from@example.com', 'First Last');
                    $mail->addReplyTo('replyto@example.com', 'First Last');
                    $mail->addAddress($to_id);
                    $mail->Subject = $subject;
                    $mail->msgHTML($message);
                    if (isset($_FILES['uploaded_file']) &&
                              $_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK) {
                  $mail->AddAttachment($_FILES['uploaded_file']['tmp_name'],
                              $_FILES['uploaded_file']['name']);
                            }
                    if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    }
                    else {
                       echo '<script>alert("Message sent!");</script>';
                    }
               }
        ?>
    </body>
</html>


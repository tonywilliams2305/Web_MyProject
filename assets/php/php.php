<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if(!empty($_POST["send"])) {
        $name = $_POST["name"];
        $email_address = $_POST["email_address"];
        $message = $_POST["message"];
        $toEmail = $_POST["kimdat2305@gmail.com"];

        $mailHeaders = "Name: " . $name .
        "\r\n Email: " . $email_address .
        "\r\n Message: " . $message .
        
        if(mail($toEmail, $name, $mailHeaders)) {
            $message = "Your contact information is received successfully.";
        }
    }


?>
    <form action="" class="contact-form" data-reveal="right">

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Name *" required class="input-field">

            <input type="email" name="email_address" placeholder="Email *" required class="input-field">
        </div>

        <textarea name="message" placeholder="Message *" required class="input-field"></textarea>

        <!-- <input type="submit" name="send" value="Submit"> -->
        <!-- thay thế bằng dòng button -->
        <button type="submit" class="btn btn-secondary">Send message</button>

        <div class="input-row">
            <?php if(!empty($message)){ ?>
            <div class="success">
                <strong><?php echo $message ?></strong>
            </div>
            <?php} ?>
        </div>
    </form>
</body>
</html>
<?php include('header.php') ?>

    <?php

        $to = "snfj0014@humbermail.ca";
        $subject = "Message from contact form";
        $from = $_POST["email"];
        $message = $_POST["name"]."\r\n";
        $message .= $_POST["email"]."\r\n";
        $message .= $_POST["comments"];

        mail($to,$subject,$from,$message);

    ?>
    <div class='thankYou'>
        <h2>Thank You</h2>
        <h3>We Will Get Back to You</h3>
    </div>
    </div>

<?php include('footer.php') ?>
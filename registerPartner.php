<?php

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['emailInput'];
    $phoneNumber = $_POST['telnum'];
    $companyName = $_POST['cname'];
    $companyWebsite = $_POST['websitecompany'];
    $message = $_POST['message'];

    $fullName = $fname . " " . $lname;

    $mailTo = "applications@tedxkuleuven.com";
    $subject = "From: ".$mailFrom." regarding Partnership";
    $txt = "Je hebt een email ontvangen van".$fullName." in verband met een partnership.\n\n";
    $info = "Email: ".$mailFrom.".\n Telefoonnummer: ".$phoneNumber."
    .\n Bedrijf: ".$companyName.", te vinden op ".$companyWebsite."\n\nBericht: .$message";

    $sent = mail($mailTo, $subject, $txt, $info);
}

if ($sent) {

    ?><html>
    <head>
    <title>Thank You</title>
    </head>
    <body>
    <h1>Thank You</h1>
    <p>Thank you for your feedback.</p>
    </body>
    </html>
    <?php
    
    } else {
    
    ?><html>
    <head>
    <title>Something went wrong</title>
    </head>
    <body>
    <h1>Something went wrong</h1>
    <p>We could not send your feedback. Please try again.</p>
    </body>
    </html>
    <?php
    }
?>
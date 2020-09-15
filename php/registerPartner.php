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

    mail($mailTo, $subject, $txt, $info);
    header("Location: index.html?mailsend");
}

?>
<?php
ini_set('display_errors',1);  
error_reporting(E_ALL);

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['mail'];
    $phoneNumber = $_POST['telnum'];;
    $companyName = $_POST['companyname'];;

    $message = $_POST['message'];;

    $mailTo = "info@kilianhoefman.be";
    $subject = "From: ".$mailFrom." regarding Partnership";
    $headers = "Je hebt een email ontvangen van ".$fname." ".$lname." in verband met een partnership.\n\n";
    $txt = "Email: ".$mailFrom.".\n Telefoonnummer: ".$phoneNumber."
    .\n Bedrijf: ".$companyName."\n\nBericht: $message";

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsent");
}
?>
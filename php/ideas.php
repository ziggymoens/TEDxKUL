<?php
ini_set('display_errors',1);  
error_reporting(E_ALL);

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['mail'];
    $phoneNumber = $_POST['telnum'];;

    $message = $_POST['message'];;

    $mailTo = "applications@tedxkuleuven.com";
    $subject = "From: ".$mailFrom." regarding application speaker/podcast guest";
    $headers = "Je hebt een email ontvangen van ".$fname." ".$lname." in verband met een applicatie als spreker of podcast gast.\n\n";
    $txt = "Email: ".$mailFrom."\nTelefoonnummer: ".$phoneNumber."
    \nPersoon heeft volgend bericht meegegeven: \n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsent");
}
?>
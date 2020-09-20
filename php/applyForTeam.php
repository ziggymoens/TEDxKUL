<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['mail'];
    $university = $_POST['university'];
    $faculty = $_POST['faculty'];
    $study = $_POST['study'];
    $phase = $_POST['phase'];
    $attendee = $_POST['attendee'];
    $favTalks = $_POST['favtalks'];

    $motivational = $_POST['motivational'];;

    $top = implode(' - ' ,$_POST['pref']);
    
    $mailTo = "applications@tedxkuleuven.com";
    $subject = "From: " . $mailFrom . " regarding team application";
    $headers = "Je hebt een email ontvangen van " . $fname . " " . $lname . " in verband met een team applicatie.\n\n";

    $txt = "Naam applicant: " . $fname . " " .$lname . "\n" .
    "Emailadres: " . $mailFrom . "\n" . "\n" .
    "Universiteit: " . $university . "\n" .
    "Faculteit: " . $faculty . "\n" .
    "Opleiding: " . $study . " - " .
    $phase . "\n" ."\n" .
    "Reeds aanwezig geweest op TEDx events: " . $attendee . "\n" .
    "Favoriete talks= " . $favTalks . "\n" .
    "Voorkeursfuncties: " . $top . "\n" ."\n" .
    "Motivatie: " . $motivational . "\n";      

    mail($mailTo, $subject, $txt, $headers);
    header("Location: ./html/team.html?mailsent");
}

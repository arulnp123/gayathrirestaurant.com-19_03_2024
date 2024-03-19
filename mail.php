<?php
$ToEmail = 'felinfs122@gmail.com, saranrajkavi1995@gmail.com';
$EmailSubject = 'Site contact form Gayathri Restaurant Website';
$mailheader = "From: " . $_POST["email"] . "\r\n";
$mailheader .= "Reply-To: " . $_POST["email"] . "\r\n";

$MESSAGE_BODY = "";
$MESSAGE_BODY .= "\r\n Name: " . $_POST["name"] . "";
$MESSAGE_BODY .= "\r\n Email: " . $_POST["email"] . "";
$MESSAGE_BODY .= "\r\n Phone: " . $_POST["phone"] . "";
$MESSAGE_BODY .= "\r\n Message: " . $_POST["message"] . "";

if (mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader)) {
    echo "<script>alert('We will contact you as soon as possible');</script>";
    echo "<script>window.location.href='index.php';</script>";
} else {
    echo "Failure";
}
?>







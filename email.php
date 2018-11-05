<!DOCTYPE html>
<html>
<body>

<?php
$to      = 'f34ee@localhost';
$subject = 'ShoeVilla Order Confirmation';

$message = 'Hi, thanks for shopping at ShoeVilla! This email is to confirm your purchase.';

$headers = 'From: f34ee@localhost' . "\r\n" .
    'Reply-To: f34ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff34ee@localhost');
?> 

</body>
</html>
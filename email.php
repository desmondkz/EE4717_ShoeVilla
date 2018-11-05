<?php

include 'mySQL.php';

var_dump($_SESSION['username']);

$to      = 'f34ee@localhost';
$subject = 'ShoeVilla Order confirmation';

$message = 'Hi Customer, thanks'


$headers = 'From: f34ee@localhost' . "\r\n" .
    'Reply-To: f34ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff34ee@localhost');
echo ("mail sent to : ".$to);
?> 

</>
</html>
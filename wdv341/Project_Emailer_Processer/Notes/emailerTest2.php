<?php
include 'emailer2.php';  //getthe class file.
$customerMail = new Emailer(); //instantiate a new object from Emailer class.
$customerMail->setRecipientAddress('jlgreenwood3@dmacc.edu');
//$customerMail->getRecipientAddress();
$customerMail->sendEmail();
?>
<!DOCTYPE html>
<html lang=“en” dir=“ltr”>
 <head>
   <meta charset=“utf-8">
   <title>Test Emailer</title>
 </head>
 <body>
   <h1>WDV341 Intro PHP</h1>
   <h2>Test Emailer Class</h2>
   <p>Recipiet Address: <?php echo $customerMail->getRecipientAddress(); ?></p>
 </body>
</html>


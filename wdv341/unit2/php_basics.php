<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>PHP Basics</title>
    <style>
    
    h1{
      text-decoration: underline;
    }
    
    </style>
    <script>
      
      var yourName = "Jordan";
      
      var number1 = 2;
      
      var number2 = 5;
      
      var total = number1 + number2;
      
    </script>
  </head>
  <body>
    
      <h1>PHP Basics</h1>
      
      
      <p>Display my name here: <?php echo "<h2><script>document.writeln(yourName);</script></h2>" ?></p>
      <p>Adding my number1 variable to my number2 variable. My total will show below.</p>
      <p>Total: <?php echo "<b><script>document.writeln(total);</script></b>" ?> </p>
      
  
  </body>
</html>
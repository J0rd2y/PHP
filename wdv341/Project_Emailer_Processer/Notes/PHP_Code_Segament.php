<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
    <h1>PHP Code Segamnets</h1>
    <h2>Example 1 - All output is written by echo PHP command</h2>
    
    <?php
    
    $validInput = true; 
    
    if($validInput){
      //true branch 
      echo "<h1>Good Job! Thank you</h1>";
      
    }
    
    else(){
      //false branch
      echo "<h2>Sorry Try Again</h2>";
      
    }
    
    ?>
    
    <h2>Example 2 -All output is passed to the Response Object as HTML lines</h2>
    
    <?php 
    
    $validTwoInput = true;  //boolean variable
    
    if($validTwoInput)
    {
    ?>
    
    <h2>Good Job! Thank You</h2>
    <p>Your information has been entered. You will be contacted when it is ready</p>
    <p>For updates <a href= "http;//www.google.com">Current Status</a></p>
    
    <?php 
    }
    else 
    {
     ?>
    
    <h2>Sorry, Try Again!!</h2>
    <p>Your form has encountered several errors</p>
    <p>PLease fix all of the following errors. We cannot use your information until all errors are resolved.</p>
    <p>For assistance please contact <a href= "http;//www.google.com">Google</a></p>
    
    
    <?php 
    }    
     ?>
    
    
  
    
  </body>
</html>
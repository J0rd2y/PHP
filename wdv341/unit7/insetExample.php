<?php 

  require_once('dbConnect.php');
  
  
try{
  $sql = "INSERT INTO wdv341_event (event_name, event_description, event_id)
    VALUES ('WDV341 Intro PHP', 'How to write PHP', NULL);";

    $stmt = $conn->prepare($sql);
    
  
    
    $stmt->execute();
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


 ?>
<?php  

  class Emailer {
    
    //The class store information required to send a PHP email.
    //It will build an email and use the PHP mail().
    
    //Proprties of the class
    private $emailMessage;    //body of the email
    
    private $emailSuject;
    
    private $recipientAddress;
    
    private $senderAddress;
    
    
    //Constructor Function 
      function __construct(){
        //constructor function
        
      
      }
      
    
      //Setter Function aka mutators
      function setEmailMessage($inMessage){
        $this->emailMessage = (inMeassge);
        
      }
      
      function setEmailSubject($inSubject){
        $this->emailSubject = (inSubject);
        
      }
      
      function setRecipientAddress($inAddress){
        $this->recipientAddress = (inAddress);
        
      }
      
      function setSenderAddress($inFromAddress){
        $this->senderAddress = (inFromAddress);
        
      }
      
      
      //Getter function aka accessor's
      function getEmailMessage(){
        return $this->emailMessage;
        
      }
      
      function getEmailSubject(){
        return $this->emailSubject;
        
      }
      
      function getRecipientAddress(){
        return $this->recipientAddress;
        
      }
      
      function getSenderaddress(){
        return $this->senderAddress;
        
      }
      
      
      //Processing function
      function sendEmail(){
        
        $fromAddress = "From: " . $this->getSenderaddress();
        
        mail($this->getRecipientAddress(), 
          $this->getEmailSubject(),
          $this->getEmailMessage(),
          $fromAddress
        );
      }
  }







?>
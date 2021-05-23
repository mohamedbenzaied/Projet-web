<!DOCTYPE html>
<html>
    <head>
        <title>
            Projet 
        </title>
        
        <link rel="stylesheet" href="Index.css">
    </head>
    <body>
       
    
        <div>
        <div >
               <h1> WELCOME ! </h1>
               <h2> Cette page permet d'envoyer des mails vers une adresse bien choisie...</h5>
           </div>
            <div class="container">
                <div class="form">
                <form  action="" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name :</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Send To :</label>
      </div>
      <div class="col-75">
        <input type="text" placeholder="---@---.--" id="email" name="email">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Subject">Subject :</label>
      </div>
      <div class="col-75">
      <input type="text" placeholder="Your subject" id="subject" name="subject"> 
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="message">Message :</label>
      </div>
      <div class="col-75">
        <textarea class= ""id="message" name="message" placeholder="Your message"style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input id="envoi" name="envoi" type="submit" value="Send">
    </div>
  </form>
                    
  
  
              
</form>
<?php


$to_email = $_POST['email'];
$subject = $_POST['subject'];
$body = $_POST['message'];


if (mail($to_email, $subject, $body)) {
    $alert = '<div class="alert-success">
    <span>Message Sent! Thank you </span>
   </div>';
} else {
    $alert = '<div class="alert-failed">
    <span>Message not Sent! Sorry</span>
   </div>';
}
?>
                    </h3>
                </div>
                
            </div>
        </div>
    </body>
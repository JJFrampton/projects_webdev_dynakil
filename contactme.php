<?php

// check the variables

$hidden = $_POST['hidden'];

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


// add the date the form was submitted
$date = gmdate("M d Y");


// send this data to your email address
$to = "info@dynakil.com";
$subject = "Contact Form Visitor Message";
$body = "\n \n 
          NOTE: THE(*) MEANS THE REQUIRED FILEDS
          \n \n
          DATE ::::    $date \n
          
              *___NAME_____ ::::: $name \n 
              *____EMAIL____ ::::: $email \n 
              *__MESSAGE__ ::::: $message \n\n";
          
mail($to,$subject,$body);

echo '<script type="text/javascript">'; 
echo 'alert("Message successfully sent");'; 
echo 'window.location.href = "http://dynakil.com";';
echo '</script>';

die();

?>




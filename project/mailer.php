<?php
$name = $_POST["name"];
$email = $_POST["email"];

$phone = $_POST["phone"];
$message = $_POST["message"];
$text = "NAME: $name<br>
 EMAIL: $email<br>
 
 TELEPHONE NUMBER: $phone<br>    
 MESSAGE: $message<br><hr><br><br><br>";
 $file = fopen("contac.htm","a+");
 fwrite($file, $text);
 fclose($file);

?>
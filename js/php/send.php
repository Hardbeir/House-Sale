<?php
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$info =$_POST['info'];

$to="mracdorac@gmail.com";

$subject ="lista wyslana sprzedaz_buynków";
$message="
Lista wyslana z Formy.<br/>
Mail: ".htmlspecialchars($mail)."<br/>
Phone: ".htmlspecialchars($phone)."<br/>
Informacja: ".htmlspecialchars($info);
$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
$headers .= "From: Uzytkownik <from@example.com>\r\n"; 
mail ($to,$subject,$message,$headers);
header('Location: ../../index.html');

exit();
?>
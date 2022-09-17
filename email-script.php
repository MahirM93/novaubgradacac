<?php

if(isset($_POST['sendMailBtn'])&& $_POST['email'] !=''){

    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) ){

    $ime=$_POST['ime'];
    $email=$_POST['email'];
    $naslov=$_POST['naslov'];
    $poruka=$_POST['poruka'];
    $slika=$_FILES['slika'];


  $to="mesanovicmahir@gmail.com";
  $body="";
  $body.="From:".$ime. "\r\n";
  $body.="Email:".$email. "\r\n";
  $body.="poruka:".$poruka. "\r\n";
  $body.="slika:".$slika. "\r\n";

  mail($to,$naslov,$body);

  $mail->addAttachment($slika,'33');



    }





}




?>
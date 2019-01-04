<?php

    $from="multifunctionaltm@gmail.com";
	$email="skyllex@mail.bg";
	$subject=$_POST['Subject'];
	$message=$_POST['Message'];
	mail ($email,$subject,$message,"From:".$from);
Print "Your Message is Sent!";
?>
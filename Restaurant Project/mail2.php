		<?php
		$FirstName=$_POST['First Name'];
		$LastName=$_POST['Last Name'];
		$State=$_POST['state'];
		$ReservationDate=$_POST['rsevervation date'];
		$Phonenumber=$_POST['Phone number'];
		$GuestNumber=$_POST['Guest number'];
		$Email=$_POST['email'];
		$Subject=$_POST['subject'];
		$msg=$_POST['message'];
		$message=$name."<br />".$msg;         
                  
         $header = "From:shazmeenjaved786@gmail.com\r\n";         
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($email,$subject,$message,$header);
         
         if( $retval == true ) {
         header("location:message2.html");
         }
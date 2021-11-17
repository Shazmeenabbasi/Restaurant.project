		<?php
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$msg=$_POST['message'];
		$message=$name."<br />".$msg;         
                  
         $header = "From:shazmeenjaved786@gmail.com\r\n";         
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($email,$subject,$message,$header);
         if( $retval == true ) {
            header("location:message.html");
         }
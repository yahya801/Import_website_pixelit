<?php
require "PHPMailer/PHPMailerAutoload.php";

function smtpmailer($to, $from, $from_name, $subject, $body)   {
       
         
          
          
        // }
        // ($toemail,$from,$subj, $fname,$lname,$phoneno,$address1, $address2,$url,$price,$color,$size,$quantity,$request);
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'bringitin.pk';
        $mail->Port = 465;  
        $mail->Username = 'customercare@bringitin.pk';
        $mail->Password = 'h.[*YFd;D^^L';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From= "customercare@bringitin.pk";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        // $mail->Addcc("customercare@bringitin.pk");
        
        if(!$mail->Send())
        {
            $error = false;
            return $error; 
        }
        else 
        {
            $error = true;  
            return $error;
        }
    
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
    $from = 'sales@bringitin.pk';
    
    $subj = $_POST["subject"];
    // $msg = 'This is mail about testing mailing using PHP.';
    $name = $_POST["name"];
    
    $toemail = $_POST["email"];
    $message = $_POST["message"];
    $txt = "Hi from " . $name . ", " . $toemail . "<br /><br />" . $message;
    
    $error=smtpmailer($toemail, $from, $name, $subj, $txt) ;
        if(!$error)
        echo "Message was not sent <br />PHP Mailer Error: " . $mail->ErrorInfo;
        else
            echo "Message has been sent";
       
    }
    
?>  
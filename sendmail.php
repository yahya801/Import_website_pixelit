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
        $mail->Username = 'sales@bringitin.pk';
        $mail->Password = 'jLP?gO&{]vn=';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From= "sales@bringitin.pk";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        $mail->Addcc("sales@bringitin.pk");
        
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
    
    // $to = 'yahyaahsan83@gmail.com';
    $from = 'sales@bringitin.pk';
    // $name = 'Muhammad Yahya';
    $subj = 'Order From Bringitin.pk';
    // $msg = 'This is mail about testing mailing using PHP.';
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $toemail = $_POST["email"];
    $phoneno =$_POST["phoneno"];
    $city = $_POST["city"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $servicecharges = $_POST["servicecharges"];
    $shipmethod = $_POST["shipmethod"];
    $url = json_decode($_POST["url"]);
    $price = json_decode($_POST["price"]);
    $color = json_decode($_POST["color"]);
    $size = json_decode($_POST["size"]);
    $quantity = json_decode($_POST["quantity"]);
    $request = json_decode($_POST["request"]);
    $shipping = json_decode($_POST["shipping"]);
    $itemshipping = json_decode($_POST["itemshipping"]);
    $txt = "Thank you From from Ordering From Bringitin.pk";
    $txt .= "<br>";
    $txt .= "<br>";
    $txt .= "Your Name: ";
    $txt .= $fname;
    $txt .= " ";
    $txt .= $lname;
    $txt .= "<br>";

    $txt .= "Phone No: ";
    $txt .= $phoneno;
    $txt .= "<br>";
    $txt .= "Address: ";
    $txt .= $address1;
    $txt .= "<br>";
    $txt .= "Address 2: ";
    $txt .= $address2;
    $txt .= "<br>";
    $txt .= "City: ";
    $txt .= $city;
    $txt .= "<br>";
    $txt .= "Ship Method: ";
    $txt .= $shipmethod;
    $txt .= "<br>";
    $txt .= "<br>";
    $txt .= "Your Order";
    $txt .= "<br>";




    $total_price = 0 ;

    for ($x = 0; $x < count($url); $x++) {
        $total_price += ($price[$x]* $quantity[$x]);
        $total_price += $itemshipping[$x];
      $txt .=  "Ordered Url: ";  
      $txt .=  $url[$x];
      $txt .= "<br>"; 
      $txt .=  "Quantity: "; 
      $txt .=  $quantity[$x];
      $txt .= "<br>";
      $txt .=  "Size: "; 
      $txt .=  $size[$x];
      $txt .= "<br>";
      $txt .=  "Color: "; 
      $txt .=  $color[$x];
      $txt .= "<br>";
      $txt .=  "Price: Rs "; 
      $txt .= $price[$x];
      $txt .= "<br>";
      $txt .=  "Shipping Chosen: "; 
      $txt .= $shipping[$x];
      $txt .= "<br>";
      $txt .= "<br>";
    }
    $total_price += $servicecharges;
    $txt .= "Service Charges: Rs ";
    $txt .= $servicecharges;
    $txt .= "<br>";
    $txt .= "<br>";
    $txt .=  "Total Price: Rs "; 
    $txt .= $total_price;
    $txt .= "<br>";
    // $url2 = $url[1];
    // echo json_encode([
    //     "msg" => $url
    // ]);
    $error=smtpmailer($toemail, $from, $fname, $subj, $txt) ;
     echo json_encode([
            "error" => $error
        ]);
    }
    
?>
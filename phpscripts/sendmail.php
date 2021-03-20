<?php
// session_start();
require "PHPMailer/PHPMailerAutoload.php";
// include 'db_connection.php';
// $sessionID = $_SESSION['sessionID'];

function smtpmailer($data)
{   
    $error ="";
    $name = $toemail = $phoneno = $address1 = $address2 = $city = "";
    $subj = 'Order From Bringitin.pk';
    $from = 'sales@bringitin.pk';
    $txt = "";
    $txt2 = "";
    $txt3 = "";
    $totalcharges = $servicecharges = $branddelivery = $shipping = 0;
    while ($row = mysqli_fetch_array($data)) {
        $name = $row['name'];
        $toemail = $row['email'];
        $phoneno = $row['phoneno'];
        $address1 = $row['address1'];
        $address2 = $row['address2'];
        $totalcharges = $row['totalamountRS'];
        $servicecharges = $row['totalservice'];
        $branddelivery  += $row['brandshipping'];
        $city = $row['city'];
        $txt2 .=  "Brand Name: ";
        $txt2 .=  $row['brandname'];
        $txt2 .= "<br>";
        $txt2 .=  "Order Url: ";
        $txt2 .=  $row['url'];
        $txt2 .= "<br>";
        $txt2 .=  "Quantity: ";
        $txt2 .=  $row['quantity'];
        $txt2 .= "<br>";
        $txt2 .=  "Size: ";
        $txt2 .=  $row['size'];
        $txt2 .= "<br>";
        $txt2 .=  "Color: ";
        $txt2 .=  $row['color'];
        $txt2 .= "<br>";
        $txt2 .=  "Price in Pound : £ ";
        $txt2 .= $row['priceinpound'];
        $txt2 .= "<br>";
        $txt2 .=  "Total Product Price: Rs ";
        $txt2 .= $row['producttotal'];
        $txt2 .= "<br>";
        $txt2 .=  "Product Shipping Charges: ";
        $txt2 .= $row['description'];
        $txt2 .= "<br>";
        $txt2 .=  "Brand Shipping Charges: Rs ";
        $txt2 .= $row['brandshipping'];
        $txt2 .= "<br>";
    }
    // $txt = " <img src='assets/images/logo/new-icon.png' alt=''>";
    $txt .= "Thank you from Ordering From Bringitin.pk";
    $txt .= "<br>";
    $txt .= "<br>";
    $txt .= "Name: ";
    $txt .= $name;
    $txt .= "<br>";
    $txt .= "Phone Number: ";
    $txt .= $phoneno;
    $txt .= "<br>";
    $txt .= "Address: ";
    $txt .= $address1;
    $txt .= "<br>";
    $txt .= $address2;
    $txt .= "<br>";
    $txt .= "City: ";
    $txt .= $city;
    $txt .= "<br>";
    $txt .= "<br>";
    $txt .= "Your Order";
    $txt .= "<br>";

    $txt3 .= "<br>";
    $txt3 .= "Total Service Charges: Rs ";
    $txt3 .= $servicecharges;
    $txt3 .= "<br>";
    $txt3 .= "Total Brand Delivery Charges: Rs ";
    $txt3 .= $branddelivery;
    $txt3 .= "<br>";
    $txt3 .=  "Total Price: Rs ";
    $txt3 .= $totalcharges;
    $txt3 .= "<br>";


    // echo $txt2;
    $txt4 = $txt . $txt2 .  $txt3;
    
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'bringitin.pk';
    $mail->Port = 465;
    $mail->Username = 'sales@bringitin.pk';
    $mail->Password = '8xX^Y6V[_){E';

    //   $path = 'reseller.pdf';
    //   $mail->AddAttachment($path);

    $mail->IsHTML(true);
    $mail->From = "sales@bringitin.pk";
    $mail->FromName = $name;
    $mail->Sender = $from;
    $mail->AddReplyTo($from, $name);
    $mail->Subject = $subj;
    $mail->Body = $txt4;
    $mail->AddAddress($toemail);
    $mail->Addcc("sales@bringitin.pk");
    // echo $toemail;
    $error = $mail->Send();
    // if($mail->Send())
    // {
    //     $error = false;
        
    // }
    // else 
    // {
    //     $error = true;  
      
    // }
    return $error;
}

function sendmail2($conn, $userID, $orderID)
{

    $sql = "SELECT * FROM `orderitem` JOIN `order` ON `orderitem`.`orderID` =  `order`.`orderID`
    JOIN `user` ON `user`.`userID` = `order`.`userID` JOIN `shipping` ON `orderitem`.`shippingID` = `shipping`.`shippingID`
    JOIN `brand` ON `brand`.`brandID` = `orderitem`.`brandID` WHERE `user`.`userID` = $userID ";
    $result = $conn->query($sql);
    // while ($row = mysqli_fetch_array($result)) {
    //     echo "<br>",$row['orderitemID'];
    //     echo "<br>",$row['email'];
    // }
    // $row =mysqli_fetch_array($result);
    $mailsend = smtpmailer($result);
    // echo $mailsend,"<br>";
    echo json_encode([
        "error" => $mailsend
      ]);
}

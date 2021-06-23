<?php
// session_start();
require "PHPMailer/PHPMailerAutoload.php";
require 'vendor/autoload.php';
// include 'db_connection.php';
// $sessionID = $_SESSION['sessionID'];
$dotenv = Dotenv\Dotenv::createMutable(__DIR__);
$dotenv->load();

// $email_ID = $_ENV['email_ID'];

function smtpmailer($data, $email_ID)
{
    $error = "";
    $name = $toemail = $phoneno = $address1 = $address2 = $city = $paymentmethod = "";
    $subj = 'Order From Bringitin.pk';
    $from = $email_ID;
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
        $paymentmethod = $row['paymentdescription'];
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
        $txt2 .=  "Special Requests: ";
        $txt2 .=  $row['requests'];
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
    $txt3 .= "Total Service Fees: Rs ";
    $txt3 .= $servicecharges;
    $txt3 .= "<br>";
    $txt3 .= "Total Brand Delivery Fees: Rs ";
    $txt3 .= $branddelivery;
    $txt3 .= "<br>";
    $txt3 .=  "Total Price: Rs ";
    $txt3 .= $totalcharges;
    $txt3 .= "<br>";
    $txt3 .=  "Payment Method: ";
    $txt3 .= $paymentmethod;
    $txt3 .= "<br>";


    // echo $txt2;
    $txt4 = $txt . $txt2 .  $txt3;

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'bringitin.pk';
    $mail->Port = 465;
    $mail->Username = $email_ID;
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
    $mail->Addcc($email_ID);
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

    $sql = "SELECT `orderitem`.*,`order`.* ,`shipping`.*,`brand`.`brandname`,`user`.*,`paymentmethod`.`description` AS paymentdescription FROM `orderitem` JOIN `order` ON `orderitem`.`orderID` =  `order`.`orderID`
    JOIN `user` ON `user`.`userID` = `order`.`userID` JOIN `shipping` ON `orderitem`.`shippingID` = `shipping`.`shippingID`
    JOIN `brand` ON `brand`.`brandID` = `orderitem`.`brandID` JOIN `paymentmethod` ON `order`.`paymentmethodID` = `paymentmethod`.`paymentmethodID` WHERE `user`.`userID` = $userID ";
    $result = $conn->query($sql);
    // while ($row = mysqli_fetch_array($result)) {
    //     echo "<br>",$row['orderitemID'];
    //     echo "<br>",$row['email'];
    // }
    // $row =mysqli_fetch_array($result);
    $email_ID = $_ENV['email_ID'];
    $mailsend = smtpmailer($result, $email_ID);
    // echo $mailsend,"<br>";
    echo json_encode([
        "error" => $mailsend
    ]);
}

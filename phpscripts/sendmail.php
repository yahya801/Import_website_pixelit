<?php
// session_start();
require "PHPMailer/PHPMailerAutoload.php";
// include 'db_connection.php';
// $sessionID = $_SESSION['sessionID'];
function smtpmailer($to, $from, $from_name, $subject, $body)
{
}

function sendmail2($conn, $userID, $orderID)
{

    // $sql = "SELECT * FROM `user` WHERE `userID` = $userID";
    // $result = $conn->query($sql);
    // $name = $email = $address1 = $address2 = $phoneno = $city = "";
    // // while ($row = $result->fetch_assoc()) {
    // //     $name = $row['name'];
    // //     $email = $row['email'];
    // //     $address1 = $row['address1'];
    // //     $address2 = $row['address2'];
    // //     $phoneno = $row['phoneno'];
    // //     $city = $row['city'];
    // // }
    // if (mysqli_query($conn, $sql)) {
    //     echo "Records updated successfully.";
    // } else {
    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    // }
    // echo $phoneno;

    $sql = "SELECT * FROM `orderitem` JOIN `order` ON `orderitem`.`orderID` =  `order`.`orderID`
    JOIN `user` ON `user`.`userID` = `order`.`userID` WHERE `user`.`userID` = $userID ";
    $result = $conn->query($sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<br>",$row['orderitemID'];
        echo "<br>",$row['orderID'];
    }
}

<?php

session_start();
include 'db_connection.php';
$sessionID = $_SESSION['sessionID'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = OpenCon();

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connection established";
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $name = $fname . " " . $lname;
        $toemail = $_POST["email"];
        $phoneno = $_POST["phoneno"];
        $city = $_POST["city"];
        $address1 = $_POST["address1"];
        $address2 = $_POST["address2"];

        $sql = "INSERT INTO `user` (`name`, `email`, `address1`, `address2`, `phoneno`, `city`, `country`,   `rolesID`) VALUES ('" . $name . "', '" . $toemail . "', '" . $address1 . "', '" . $address2 . "','" . $phoneno . "','" . $city . "', ' Pakistan ', 1)";
        if (mysqli_query($conn, $sql)) {
            echo "Records inserted successfully.";
          } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }

        // inserting records in order item

        $sql2 = "INSERT INTO `orderitem` (`size`,`color`,`quantity`,`priceinpound`,`producttotal`,";
    }
}

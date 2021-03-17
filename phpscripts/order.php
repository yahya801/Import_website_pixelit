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
    $sql = "SELECT * FROM `user` WHERE `userID` = '" . $sessionID . "'";
    $result = $conn->query($sql);

    $row_cnt = mysqli_num_rows($result);
    if ($row_cnt <= 0) {
      $sql = "INSERT INTO `user` (`userID`,`name`, `email`, `address1`, `address2`, `phoneno`, `city`, `country`,   `rolesID`) VALUES ('" . $sessionID . "','" . $name . "', '" . $toemail . "', '" . $address1 . "', '" . $address2 . "','" . $phoneno . "','" . $city . "', ' Pakistan ', 1)";
      if (mysqli_query($conn, $sql)) {
        echo "Records inserted successfully.";
      } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
      }
    } else {
      echo "Duplicate";
    }
    $shipping = $qty = $size = $color = $price = $request =  $url = "";
    $sql = "SELECT * FROM cart WHERE sessionID = '" . $sessionID . "' and status = '1'";
    $result = $conn->query($sql);
    $total = $prod_total = $shipping = $service = 0;
    $brand_delivery = 0;
    $service = 0;
    $service_perc = 0;
    while ($row = mysqli_fetch_array($result)) {
      $prod_total += $row['producttotal'];
      $shipping += $row['airshipping'];
      $brand_delivery += $row['brandshipping'];
      $service = $row['paymentmethodID'];
    }
    if ($service == 0) {

      $service_perc = 0.15;
    } else {
      $service = 1;
      $service_perc = 0.05;
    }
    $total = ($prod_total + $shipping + $brand_delivery) * (1 + $service_perc);
    $service_charge =  ($prod_total + $shipping + $brand_delivery) * ($service_perc);
    $sql = "SELECT * FROM conversionrate WHERE conversionrateID = (SELECT max(conversionrateID) from conversionrate)";
    $result = $conn->query($sql);
    $convrate = 0;
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        // echo "Id: " . $row["conversionrateID"] . " - rate: " . $row["conversionrate"] .  "<br>";
        $convrate = $row["conversionrateID"];
      }
    }
    echo $convrate;
    $a = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `order` (`date`, `totalamountRS`, `totalservice`, `status`, `userID`, `paymentmethodID`, `conversionrateID`) VALUES ('" . $a . "',$total , $service_charge,'Out for Delivery','" . $sessionID . "','" . $service . "',$convrate)";
    if (mysqli_query($conn, $sql)) {
      $orderID = $conn->insert_id;
      // echo "New record created successfully. Last inserted ID is: " . $last_id;
      echo "Records inserted successfully.2";
    } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    $sql = "INSERT INTO `orderitem` ( `size`, `color`, `quantity`,`priceinpound`,`producttotal`,`brandID`,`shippingID`,`url`,`brandshipping`,`airshipping`,`requests`,`sessionID`)
    SELECT  `size`, `color`, `quantity`,`priceinpound`,`producttotal`,`brandID`,`shippingID`,`url`,`brandshipping`,`airshipping`,`requests`,`sessionID`
    FROM   `cart`
    WHERE sessionID = '" . $sessionID . "' and status = '1'";
    if (mysqli_query($conn, $sql)) {
      // $orderID = $conn->insert_id;
      // echo "New record created successfully. Last inserted ID is: " . $last_id;
      echo "Records inserted successfully.3";
    } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    $sql = "UPDATE `orderitem`
        SET `orderID` = $orderID
        WHERE `sessionID` = '" . $sessionID . "'";
    if (mysqli_query($conn, $sql)) {
      $orderID = $conn->insert_id;
      // echo "New record created successfully. Last inserted ID is: " . $last_id;
      echo "Records inserted successfully.4";
    } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    $sql = "UPDATE cart
        SET status = 0
        WHERE sessionID = '" . $sessionID . "' and status = 1";
    if (mysqli_query($conn, $sql)) {
      $orderID = $conn->insert_id;
      // echo "New record created successfully. Last inserted ID is: " . $last_id;
      echo "Records inserted successfully.5";
    } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
  }
}

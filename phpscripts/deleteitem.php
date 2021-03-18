<?php
session_start();
include 'db_connection.php';
$sessionID = $_SESSION['sessionID'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = OpenCon();
  $cartid = $_POST["delete"];
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    echo "Connection established";
  }
  $sql = "SELECT * FROM cart where cartID = $cartid";
  $brand = 0;
  $result = $conn->query($sql);
  if (mysqli_query($conn, $sql)) {
    while ($row = $result->fetch_assoc()) {
      $brand = $row["brandID"];
    }
  } else {
    echo "Could not retrieve";
  }
  //setting status of cart to 0 to indicate deletion
  $sql = "UPDATE cart
    SET status = '0'
    WHERE cartID = $cartid";
  $result = $conn->query($sql);


  if (mysqli_query($conn, $sql)) {
    echo "Item Updated";
  } else {
    echo "Could not Update";
  }

  //adjusting the brand delinery charges of all the other items from the same brand which are part of the order
  $sql = "SELECT * FROM cart WHERE brandID = $brand and sessionID = '" . $sessionID . "' and status = 1";
  $result = $conn->query($sql);
  $tprice = 0;
  $count = 0;
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $tprice = $tprice + ($row["priceinpound"] * $row["quantity"]);
      $count = $count + 1;
    }

    $adjustedbrandshipping = 0;
    $sql = "SELECT * FROM Brand WHERE brandId = $brand";
    $result = $conn->query($sql);
    $brandfree = 0;
    $brandcharge = 0;
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $brandfree = $row["free"];
        $brandcharge = $row["charge"];
      }
    } else {
      echo "f in life";
    }
    if ($brandcharge == NULL) {
      $adjustedbrandshipping = 0;
    } else {
      if ($brandfree == NULL) {
        $adjustedbrandshipping = $brandcharge;
      } else {
        if ($tprice > $brandfree) {
          $adjustedbrandshipping = 0;
        } else {
          $adjustedbrandshipping = $brandcharge;
        }
      }
    }
    $sql = "SELECT * FROM conversionrate WHERE conversionrateID = (SELECT max(conversionrateID) from conversionrate)";
    $result = $conn->query($sql);
    $convrate = 0;
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        $convrate = $row["conversionrate"];
      }
    }
    $adjustedbrandshipping = $adjustedbrandshipping * $convrate;
    $sql = "UPDATE cart
        SET brandshipping = $adjustedbrandshipping
        WHERE cartID = (
            SELECT cartID FROM cart WHERE brandID = $brand and sessionID = '" . $sessionID . "' and status = 1
        LIMIT 1
            )
        ";
    if (mysqli_query($conn, $sql)) {
      echo "Records update successfully.";
    } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
  } else {
    echo "fail";
  }

  //closing table tag

  CloseCon($conn);
}

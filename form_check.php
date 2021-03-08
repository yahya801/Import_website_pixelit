<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["url"]) || empty($_POST["brand"])) {
    echo "error";
  }
  else{
  $conn = OpenCon();

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    // echo "Connection established";
  }

  $url = $_POST["url"];
  $brand = $_POST["brand"];
  $shipping = $_POST["shipping"];
  $qty = $_POST["qty"];
  $size = $_POST["size"];
  $color = $_POST["color"];
  $price = $_POST["price"];
  $request = $_POST["request"];

  $sql = "SELECT * FROM Brand WHERE brandId = $brand";
  $result = $conn->query($sql);
  $parse = "";
  $parse_path =  "";
  $parseU1 = "";
  $parseU2 = "";
  $parseM = "";
  $parse_final = "";
  $brandID = 0;
  $brandshipping = 0;
  $brandfree = 0;
  $brandcharge = 0;

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo "BrandId: " . $row["brandID"] . " - URL: " . $row["url"] .  "<br>";
      $brandID = $row["brandID"];
      $brandfree = $row["free"];
      $brandcharge = $row["charge"];
      if ($brandfree == NULL) {
        if ($brandcharge == NULL) {
          $brandshipping = 0;
        } else {
          $brandshipping = $brandcharge;
        }
      } else {
        if ($brandcharge == NULL) {
          $brandshipping = 0;
        } else {
          if (($qty * $price) >= $brandfree) {
            $brandshipping = 0;
          } else {
            $brandshipping = $brandcharge;
          }
        }
      }
      echo $brandshipping;
      $parse = parse_url($url, PHP_URL_HOST);
      $parse_path =  parse_url($url, PHP_URL_PATH);
      $parseU1 = parse_url($row["url"], PHP_URL_HOST);
      $parse_final = "";
      // echo $parse . "<br>";
      // echo $parse_path . "<br>";
      if ($row['urlmobile'] != NULL) {
        $parseM = parse_url($row["urlmobile"], PHP_URL_HOST);
        if ($parseM == $parse) {
          $parse_final = $parseM;
        } else if ($parseU1 == $parse) {
          $parse_final = $parseU1;
        } else {
          if ($parse == $parseU2) {
            $parseU2 = parse_url($row["url2"], PHP_URL_HOST);
            $parse_final = $parseU2;
          } else {
            // echo "not right";
          }
        }
      } else if ($row['url2'] != NULL) {
        $parseU2 = parse_url($row["url2"], PHP_URL_HOST);
        if ($parseU2 == $parse) {
          $parse_final = $parseU2;
        } else {
          if ($parse == $parseU1) {
            $parse_final = $parseU1;
          } else {
            // echo "not right";
          }
        }
      } else {
        if ($parse == $parseU1) {
          $parse_final = $parseU1;
        } else {
          // echo "not right";
        }
      }
    }
  } else {
    // echo "0 results";
  }
  // echo $parse_final;
  $oo = 0;
  $pattern = array("/uk/", "/gb/", "/en_gb/", "/en-gb/", "/GB/", "/en_gbp/", "/en_GB/");
  for ($x = 0; $x < sizeof($pattern); $x++) {
    $oo = preg_match($pattern[$x], $parse_path);
    if ($oo == 1) {
      $parse1 = "okay";
      $parse2 = "okay";
      break;
    }
  }
  $reg = "~.*([^\.]+)(co\.uk)$~";
  if ($oo == 0 && preg_match("~\.co\.uk~", $parse_final) == 0) {
    // echo "wrong url";
  } else{ 
    // echo "correct url";



  $sql = "SELECT * FROM conversionrate WHERE conversionrateID = (SELECT max(conversionrateID) from conversionrate)";
  $result = $conn->query($sql);
  $convrate = 0;
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      // echo "Id: " . $row["conversionrateID"] . " - rate: " . $row["conversionrate"] .  "<br>";
      $convrate = $row["conversionrate"];
    }
  }
  $brandshippingconv = $brandshipping * $convrate;
  $convertedfinal = $qty * $convrate * $price;
  // echo $convertedfinal;
  $sql = "SELECT * FROM shipping WHERE shippingID = $shipping";
  $result = $conn->query($sql);
  $shipping_norm = 0;
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      // echo "Id: " . $row["shippingID"] . " - desc: " . $row["description"] .  "<br>";
      $shipping_norm = $row["amount"] * $qty;
    }
  }
  // echo $shipping_norm;
  $pricetotal = 0;
  $pricetotal = $convertedfinal + $brandshippingconv + $shipping_norm;
  // echo "<br>final price " . $pricetotal;
  // array("brandID" => 41, "shipping" => 50, "url" => "url1", "size" => 23, "colour" => "red", "quantity" => 3, "pricePounds" => "pricePounds", "totalRupees" => 2300, "request" => "specialrequest", "brandshippingRupees" => 10, "totalshippingRupees" => 5000)
  $temp_array = array("brandID" => $brandID, "shipping" => $shipping, "url" => $url, "size" => $size, "colour" => $color, "quantity" => $qty, "pricePounds" => $price, "totalRupees" => $convertedfinal, "request" => $request, "brandshippingRupees" => $brandshippingconv, "totalshippingRupees" => $shipping_norm);
  array_push($_SESSION['cart'], $temp_array);
  $keys = array_keys($_SESSION['cart']);
  $max = sizeof($_SESSION['cart']);

  $myjson= json_encode([$_SESSION['cart']]);
  echo $myjson;
//   for ($i = 0; $i < $max; $i++) {
//     echo $keys[$i] . "{<br>";
//     foreach ($_SESSION['cart'][$keys[$i]] as $key => $value) {
//       echo $key . " : " . $value . "<br>";
//     }
//     echo "}<br>";
//   }
}
  }
}

?>
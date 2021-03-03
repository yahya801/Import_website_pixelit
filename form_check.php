<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$conn = OpenCon();




if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
      echo "Connection established";
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

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "BrandId: " . $row["brandID"]. " - URL: " . $row["url"].  "<br>";
      $parse = parse_url($url, PHP_URL_HOST);
      $parse_path =  parse_url($url, PHP_URL_PATH);
      $parseU1 = parse_url($row["url"], PHP_URL_HOST);
      $parse_final = "";
      echo $parse. "<br>";
      echo $parse_path. "<br>";
      if ($row['urlmobile'] != NULL){
        $parseM = parse_url($row["urlmobile"], PHP_URL_HOST);
        if($parseM == $parse){
          $parse_final = $parseM;
        } 
        else if ($parseU1 == $parse)
        {
          $parse_final = $parseU1;
        } else {
          if ($parse == $parseU2){
          $parseU2 = parse_url($row["url2"], PHP_URL_HOST);
          $parse_final = $parseU2;}
          else {
            echo "not right";
          }
        }
      }
      else if ($row['url2'] != NULL) 
      {
        $parseU2 = parse_url($row["url2"], PHP_URL_HOST);
        if ($parseU2 == $parse) {
          $parse_final = $parseU2;
        }
        else {
          if ($parse == $parseU1){
          $parse_final = $parseU1;}
          else {
            echo "not right";
          }
        }
      } 
      else 
      {
        if ($parse == $parseU1){
        $parse_final = $parseU1;
        }
        else {
          echo "not right";
        }
      }
    }
  } else {
    echo "0 results";
  }
  echo $parse_final;
  $oo = 0;
  $pattern = array("/uk/", "/gb/", "/en_gb/", "/en-gb/", "/GB/", "/en_gbp/","/en_GB/");
  for ($x = 0; $x < sizeof($pattern); $x++) {
    $oo = preg_match($pattern[$x], $parse_path);
    if ($oo == 1) {
        $parse1 = "okay";
        $parse2 = "okay";
        break;
    }    
}
$reg = "~.*([^\.]+)(co\.uk)$~";
if ($oo == 0 && preg_match("~\.co\.uk~", $parse_final) == 0){
  echo "wrong url";
}
else echo "correct url";
echo $oo;


}
?> 
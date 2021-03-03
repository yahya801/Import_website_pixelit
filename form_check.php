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
      echo "BrandId: " . $row["brandID"]. " - Brandname: " . $row["brandname"].  "<br>";
    }
  } else {
    echo "0 results";
  }

}
?> 
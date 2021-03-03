<?php
$conn = "";
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "teletpeh_bringitin";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 


 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
      echo "Connection established";
  }

  $sql = "SELECT * FROM Brand";
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
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
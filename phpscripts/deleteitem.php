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
      // echo "Connection established";
    }
    $sql = "UPDATE cart
    SET status = '0'
    WHERE cartID = $cartid";
    $result = $conn->query($sql);
    // echo "jjjj";

    if (mysqli_query($conn, $sql)) {
        echo "Item Updated";
        
      } else {
        echo "Could not Update";
      }
    // while($row = mysqli_fetch_array($result)) {
    //     echo $row['cartID'];
    //     echo "</br>";
    


    // }
    

  //closing table tag

  CloseCon($conn);


}
?>
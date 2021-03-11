<?php 
session_start();
include 'db_connection.php';
$sessionID = $_SESSION['sessionID'];
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $conn = OpenCon();

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } else {
      // echo "Connection established";
    }
    $sql = "SELECT * FROM cart WHERE sessionID = '" .$sessionID ."' and status = '1'";
    $result = $conn->query($sql);
    // echo "jjjj";

    if (mysqli_query($conn, $sql)) {
        echo "Records update successfully.";
      } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
      }
    while($row = mysqli_fetch_array($result)) {
        echo $row['cartID'];
        echo "</br>";
    


    }


}

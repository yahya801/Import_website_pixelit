<?php
$conn = "";
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "teletpeh_bringitin";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 


 return $conn;
}
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
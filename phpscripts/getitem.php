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

    // if (mysqli_query($conn, $sql)) {
    //     // echo "Item Get.";
        
    //   } else {
    //     // echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    //   }
    // while($row = mysqli_fetch_array($result)) {
    //     echo $row['cartID'];
    //     echo "</br>";
    


    // }
   
echo "<tr class='firstrow'> <td>Brand</td><td>Price</td><td>Quantity</td><td>UK to PK</td><td>Brand Delivery</td><td>Total</td><td></td></tr>";

$row_cnt = mysqli_num_rows($result);
if($row_cnt > 0){
while($row = mysqli_fetch_array($result))
{
  $total = $row['airshipping'] + $row['producttotal'] +$row['airshipping'];
  $img = $row['brandID']; 
  $image = "<img src='assets/images/brands/$img.png'>";
// we are running a while loop to print all the rows in a table
echo '<tr class="cart-item">'; // printing table row
echo '<td style="vertical-align: middle">';
echo '<img height="100px"'.$image  ;
echo "</td><td style='vertical-align: middle'>".$row['producttotal']."</td>";
echo '<td style="vertical-align: middle">'.$row['quantity'].'</td>';
echo '<td style="vertical-align: middle">'.$row['airshipping'].'</td>';
echo '<td style="vertical-align: middle">'.$row['brandshipping'].'</td>'; // we are looping all data to be printed till last row in the table
echo '<td style="vertical-align: middle">'.$total.'</td>';
echo "<td class='product-remove'> <i onclick='productdelete(".$row['cartID'].")' class='fa fa-close' style='font-size:24px'></i></td>";
echo'</tr>'; // closing table row
}
}
else{
  echo " <tr id='emptycart'; ><td colspan='6' style='text-align: center; background-color: white; color: black;'>No Items in Cart</td></tr>";

}
CloseCon($conn);

  //closing table tag

  

}
?>
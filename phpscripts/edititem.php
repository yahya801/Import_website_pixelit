<?php
session_start();
include 'db_connection.php';
$sessionID = $_SESSION['sessionID'];
// echo $sessionID;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = OpenCon();
    $cartid = $_POST["edit"];
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // echo "Connection established";
    }
    $sql = "SELECT * FROM cart where cartID = $cartid";
    $size = "";
    $color = "";
    $qty = 0;
    $price = 0;
    $brand = 0;
    $shipping = 0;
    $requests = "";
    $url = "";
    $result = $conn->query($sql);
    if (mysqli_query($conn, $sql)) {
        while ($row = $result->fetch_assoc()) {
            $brand = $row["brandID"];
            $size = $row["size"];
            $color = $row["color"];
            $qty = $row["quantity"];
            $price = $row["priceinpound"];
            $requests = $row["requests"];
            $url = $row["url"];
            $shipping = $row["shippingID"];
        }
    } else {
        echo "Could not retrieve";
    }
    // echo $brand. "</br>" . $size . "</br>" .$color. "</br>" . $qty . "</br>".$price. "</br>" . $requests . "</br>".$url. "</br>" . $shipping . "</br>";
    $post_data = array(
        'brandID' => $brand,
        'size' => $size,
        'color' => $color,
        'qty' => $qty,
        'price' => $price,
        'requests' => $requests,
        'url' => $url,
        'shippingID' => $shipping
    );
    // $myObj->brandID = 1;
    // $myObj->size = $size;
    // $myObj->color = $color;
    // $myObj->qty = $qty;
    // $myObj->price = $price;
    // $myObj->requests = $requests;
    // $myObj->url = $url;
    // $myObj->shippingID = $shipping;
    // $myJSON = json_encode($myObj);
    echo json_encode($post_data);
    CloseCon($conn);
} else {
    echo "fail";
}

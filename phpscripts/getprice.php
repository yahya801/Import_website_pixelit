<?php
session_start();
include 'db_connection.php';
$sessionID = $_SESSION['sessionID'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = OpenCon();
    $service_value = $_POST["service_percent"];
    $service_perc = 0;
    if ($service_value == 110) {
        $service_perc = 0.15;
        $sql = "UPDATE cart
        SET paymentmethodID = '0'
        WHERE sessionID = '" . $sessionID . "' and status = '1'        ";
        $result = $conn->query($sql);
        
    }
     else {
        $service_perc = 0.05;
        $sql = "UPDATE cart
        SET paymentmethodID = '1'
        WHERE sessionID = '" . $sessionID . "' and status = '1'        ";
        $result = $conn->query($sql);
    }
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // echo "Connection established";
    }
    $sql = "SELECT * FROM cart WHERE sessionID = '" . $sessionID . "' and status = '1'";
    $result = $conn->query($sql);

    $row_cnt = mysqli_num_rows($result);
    if ($row_cnt > 0) {
        $prod_total = $shipping = $service = 0;
        $brand_delivery = 0;
        while ($row = mysqli_fetch_array($result)) {
            $prod_total += $row['producttotal'];
            $shipping += $row['airshipping'];
            $brand_delivery += $row['brandshipping'];
        }
        $total = $prod_total + $shipping + $brand_delivery;
        $service = $total * $service_perc;
        echo "<tr id='product-charges'>";
        echo "<td style='color: black' width='75%'>Product Prices</td>";
        echo "<td id='product_ruppee' style='color: black;'>Rs: " . $prod_total . "</td></tr>";
        echo "<tr id='custom-charges'>";
        echo "<td style='color: black;'>+ UK to PK (Air Shipping Fee/Custom Duties/Local Delivery in Pakistan)</td>";
        echo "<td id='custom_ruppee' style='color: black;'>Rs: " . $shipping . "</td></tr>";
        echo "<tr id='brand-charges'>";
        echo "<td style='color: black;'>+ Brand Delivery Charges</td>";
        echo "<td id='brand_ruppee' style='color: black;'>Rs: " . $brand_delivery . "</td></tr>";
        echo "<tr id='service-charges'>";
        echo "<td style='color: black;'>+ Service Charges (" . ($service_perc * 100) . "%)</td>";
        echo "<td id='service_ruppee' style='color: black;'>Rs: " . $service . "</td></tr>";
    } else {
        echo "<tr id='product-charges'>";
        echo "<td style='color: black' width='75%'>Product Prices</td>";
        echo "<td id='product_ruppee' style='color: black;'>Rs: 0</td></tr>";
        echo "<tr id='custom-charges'>";
        echo "<td style='color: black;'>+ UK to PK (Air Shipping Fee/Custom Duties/Local Delivery in Pakistan)</td>";
        echo "<td id='custom_ruppee' style='color: black;'>Rs: 0</td></tr>";
        echo "<tr id='brand-charges'>";
        echo "<td style='color: black;'>+ Brand Delivery Charges</td>";
        echo "<td id='brand_ruppee' style='color: black;'>Rs: 0</td></tr>";
        echo "<tr id='service-charges'>";
        echo "<td style='color: black;'>+ Service Charges</td>";
        echo "<td id='service_ruppee' id='serviceprice' style='color: black;'>Rs: 0</td></tr>";
    }

    CloseCon($conn);
}


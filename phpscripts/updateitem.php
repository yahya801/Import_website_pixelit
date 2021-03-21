<?php
session_start();
include 'db_connection.php';
$sessionID = $_SESSION['sessionID'];
// echo $sessionID;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = OpenCon();
    $cartid = $_POST["cartID"];
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // echo "Connection established";
    }
    if (empty($_POST["url"]) || empty($_POST["brand"])) {
        // echo "error";
    } else {
        $url = $_POST["url"];
        $brand = $_POST["brand"];
        $shipping = $_POST["shipping"];
        $qty = $_POST["qty"];
        $size = $_POST["size"];
        $color = $_POST["color"];
        $price = $_POST["price"];
        $request = $_POST["request"];

        if ($size == NULL) {
            $size = "";
        }
        if ($request == NULL) {
            $request = '';
        }
        if ($color == NULL) {
            $color = '';
        }

        if ($brand == 69) {
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
            $sql = "UPDATE `cart` SET `size`='" . $size . "',`color`='" . $color . "',`quantity`=$qty,`priceinpound`=$price,`producttotal`=$convertedfinal,`brandID`=$brand,`shippingID`=$shipping,`requests`='" . $request . "',`url`='" . $url . "',`brandshipping`=0,`airshipping`=$shipping_norm,`sessionID`='" . $sessionID . "',`status`='1' WHERE cartID = $cartid";
            // $result = $conn->query($sql);

            if (mysqli_query($conn, $sql)) {
                echo "Records inserted successfully.";
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
        } else {
            $sql = "SELECT * FROM brand WHERE brandID = $brand";
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
            $parse_path2 = "";
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    // echo "BrandId: " . $row["brandID"] . " - URL: " . $row["url"] .  "<br>";
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
                    $parse = parse_url($url, PHP_URL_HOST);
                    $parse_path =  parse_url($url, PHP_URL_PATH);
                    $parseU1 = parse_url($row["url"], PHP_URL_HOST);
                    $parse_final = "";
                    $parse_path2 = parse_url($row["url"], PHP_URL_PATH);
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
                                $url_check = "incorrect URL";
                                echo $url_check;
                                exit();
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
                                $url_check = "incorrect URL";
                                echo $url_check;
                                exit();
                            }
                        }
                    } else {
                        if ($parse == $parseU1) {
                            $parse_final = $parseU1;
                        } else {
                            $url_check = "incorrect URL";
                            echo $url_check;
                            exit();
                        }
                    }
                }
            } else {
                // echo "0 results";
            }
            if (empty($parse_path2)) {
            } else {
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
            }
            $parse_final2 = parse_url($url, PHP_URL_HOST);
            $subdomain = 'www.';
            $host = str_ireplace($subdomain, '', $parse_final);
            $tld1 = strstr($host, '.');
            $host = str_ireplace($subdomain, '', $parse_final2);
            $tld2 = strstr($host, '.');


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
            $safe_url = mysqli_real_escape_string($conn, $url);
            $pricetotal = 0;
            $pricetotal = $convertedfinal + $brandshippingconv + $shipping_norm;

            $sql = "SELECT * FROM cart WHERE brandID = $brand and sessionID = '" . $sessionID . "' and status = 1 and cartID != $cartid";
            $result = $conn->query($sql);
            $tprice = 0;
            $count = 0;
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    // echo "Id: " . $row["shippingID"] . " - desc: " . $row["description"] .  "<br>";
                    $tprice = $tprice + ($row["priceinpound"] * $row["quantity"]);
                    $count = $count + 1;
                }

                $tprice = $tprice + ($price * $qty);
                $adjustedbrandshipping = 0;
                if ($brandfree == NULL) {
                    if ($brandcharge == NULL) {
                        $adjustedbrandshipping = 0;
                    } else {
                        $adjustedbrandshipping = $brandcharge;
                    }
                } else {
                    if ($brandcharge == NULL) {
                        $adjustedbrandshipping = 0;
                    } else {
                        if ($tprice >= $brandfree) {
                            $adjustedbrandshipping = 0;
                        } else {
                            $adjustedbrandshipping = $brandcharge;
                        }
                    }
                }
                $adjustedbrandshipping = $adjustedbrandshipping * $convrate;
                $sql = "UPDATE cart
          SET brandshipping = $adjustedbrandshipping
          WHERE cartID = (
              SELECT cartID FROM cart WHERE brandID = $brand and sessionID = '" . $sessionID . "' and status = 1 and cartID != $cartid
          LIMIT 1
              )
          ";
                if (mysqli_query($conn, $sql)) {
                    echo "Records update successfully.";
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
                $sql = "UPDATE `cart` SET `size`='" . $size . "',`color`='" . $color . "',`quantity`=$qty,`priceinpound`=$price,`producttotal`=$convertedfinal,`brandID`=$brand,`shippingID`=$shipping,`requests`='" . $request . "',`url`='" . $url . "',`brandshipping`=0,`airshipping`=$shipping_norm,`sessionID`='" . $sessionID . "',`status`='1' WHERE cartID = $cartid";
                if (mysqli_query($conn, $sql)) {
                    echo "Records updated successfully.";
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
            } else {
                $sql = "UPDATE `cart` SET `size`='" . $size . "',`color`='" . $color . "',`quantity`=$qty,`priceinpound`=$price,`producttotal`=$convertedfinal,`brandID`=$brand,`shippingID`=$shipping,`requests`='" . $request . "',`url`='" . $url . "',`brandshipping`=$brandshippingconv,`airshipping`=$shipping_norm,`sessionID`='" . $sessionID . "',`status`='1' WHERE cartID = $cartid";
                // $result = $conn->query($sql);

                if (mysqli_query($conn, $sql)) {
                    echo "Records updated successfully.";
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
            }
        }
    }
    CloseCon($conn);
} else {
    echo "fail";
}

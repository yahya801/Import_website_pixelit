<?php
session_start();
// echo $_SESSION["color"];
$name = "";
$url_check = "";
$brand = "";

$url = "";
$parse = $parse2 = $shipping = $qty = $size = $color = $price = $request =  "";
$DC = array(760, 1140, 3330, 4280, 760, 1900, 950, 4750, 670, 1430, 2140, 2850, 5700, 8550);
$url_uk_domain = array("https://www.adidas.co.uk/", "https://www.amazon.co.uk/", "https://www.clarks.co.uk/", "https://www.gap.co.uk/", "https://www.next.co.uk/", "https://www.ralphlauren.co.uk/", "https://www.reebok.co.uk/", "https://www.zalando.co.uk/", "https://www.underarmour.co.uk/en-gb/");
$url_global_domain = array("https://www.asos.com/", "https://www.boohoo.com/", "https://www.debenhams.com/", "https://www.dunelondon.com/", "https://www.marksandspencer.com/", "https://www.riverisland.com/", "https://www.sportsdirect.com/", "https://www.topshop.com/", "https://www.boots.com/mothercare");
$url_uk_market = array("https://www.aldoshoes.com/uk/en_UK", "https://www.armani.com/gb/armanicom/", "https://www.bershka.com/gb/", "https://www.gucci.com/uk/en_gb/", "https://www2.hm.com/en_gb/index.html", "https://www.harrods.com/en-gb", "https://www.lacoste.com/gb/", "https://shop.mango.com/gb", "https://www.massimodutti.com/gb/", "https://www.nastygal.com/gb/sitemap");
$url_uk_market2 = array("https://www.nike.com/gb/", "https://www.selfridges.com/GB/en/", "https://www.tedbaker.com/uk", "https://www.tkmaxx.com/uk/en/", "https://www.urbanoutfitters.com/en-gb/", "https://www.victoriassecret.com/gb/", "https://www.weekday.com/en_gbp/index.html", "https://www.zara.com/uk/","https://hudabeauty.com/en_GB/home");
$url_zara_mobile = "https://m.zara.com/uk/";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["url"]) || empty($_POST["brand"])) {
        $url_check = "Url  or brand name has error";
    } else {
        $url = $_POST["url"];
        $brand = $_POST["brand"];
        $shipping = $_POST["shipping"];
        $qty = $_POST["qty"];
        $size = $_POST["size"];
        $color = $_POST["color"];
        $price = $_POST["price"];
        $request = $_POST["request"];
        // echo $price;
        if ($brand == 15 || $shipping == 16) {
            $parse = "not okay";
            $parse2 = "okay";
        } else if ($brand > 20 && $brand <= 29) {
            $brand_mod =  $brand % 10 - 1;
            $parse = parse_url($url_uk_domain[$brand_mod], PHP_URL_HOST);
            $parse2 = parse_url($url, PHP_URL_HOST);
            // echo $parse;
            // echo $parse2;
        } else if ($brand > 30 && $brand <= 39) {
            $brand_mod =  $brand % 10 - 1;
            $parse = parse_url($url_global_domain[$brand_mod], PHP_URL_HOST);
            $parse2 = parse_url($url, PHP_URL_HOST);
            // echo $parse;
            // echo $parse2;
        } else if ($brand > 40 && $brand <= 50) {
            $brand_mod =  $brand % 10 - 1;
            $parse = parse_url($url_uk_market[$brand_mod], PHP_URL_HOST);
            $parse2 =  parse_url($url, PHP_URL_HOST);
            $parse_uk = parse_url($url_uk_market[$brand_mod], PHP_URL_PATH);

            $parse2_uk =  parse_url($url, PHP_URL_PATH);
            $pattern = array("/uk/", "/gb/", "/en_gb/", "/en-gb/", "/GB/", "/en_gbp/","en_GB ");
            if ($parse == $parse2) {
                for ($x = 0; $x < sizeof($pattern); $x++) {
                    $oo = preg_match($pattern[$x], $parse2_uk);
                    if ($oo == 1) {
                        $parse = "okay";
                        $parse2 = "okay";
                    }
                }
            }
        } else if ($brand > 50 && $brand <= 59) {
            $brand_mod =  $brand % 10 - 1;
            // if ($brand_mod == 7) {
            //     echo parse_url($url_zara_mobile, PHP_URL_PATH);
            // }

            $parse = parse_url($url_uk_market2[$brand_mod], PHP_URL_HOST);
            $parse2 =  parse_url($url, PHP_URL_HOST);
            $parse3 = parse_url($url_zara_mobile, PHP_URL_HOST);

            // $parse_uk = parse_url($url_uk_market2[$brand_mod], PHP_URL_PATH);
            $parse2_uk =  parse_url($url, PHP_URL_PATH);;
            $pattern = array("/uk/", "/gb/", "/en_gb/", "/en-gb/", "/GB/", "/en_gbp/");

            if ($parse == $parse2) {
                for ($x = 0; $x < sizeof($pattern); $x++) {
                    $oo = preg_match($pattern[$x], $parse2_uk);
                    if ($oo == 1) {
                        $parse = "okay";
                        $parse2 = "okay";
                    }
                }
            } elseif ($parse2 == $parse3) {
                for ($x = 0; $x < sizeof($pattern); $x++) {
                    $oo = preg_match($pattern[$x], $parse2_uk);
                    if ($oo == 1) {
                        $parse = "okay";
                        $parse2 = "okay";
                    }
                }
            } else if ($brand == 69) {
                $parse = "okay";
                $parse2 = "okay";
            }
        }

        if ($parse == $parse2) {
            $url_check = "Okay";
            $shipping_mod =  $shipping % 10 - 1;
            if ($shipping > 50 && $shipping < 60) {
                $shipping = $DC[$shipping_mod];
            } elseif ($shipping >= 60 && $shipping <= 64) {
                $shipping = $DC[$shipping_mod + 10];
            }
            if ($size == null) {
                $size = "NA";
            }
            if ($color == null) {
                $color = "NA";
            }
            if ($request == null) {
                $request = "NA";
            }
            $price = convertCurrency($price);
            echo json_encode([
                "parsed" => $url_check,
                "urlcheck" => $url_check,
                "brand" => $brand,
                "shipping" => $shipping,
                "quantity" => $qty,
                "price" => $price,
                "size" => $size,
                "color" => $color,
                "url" => $url,
                "request" => $request
            ]);
        } else {
            $url_check = "URL has an issue";
            echo json_encode([
                "parsed" => $url_check,
                "brand" => $brand,
                "urlcheck" => $url_check
            ]);
        }
    }
}




function convertCurrency($price)
{
    //   $url = "https://free.currconv.com/api/v7/convert?q=GBP_PKR&compact=ultra&apiKey=05f038474855c3fcfc6c";  
    //   $data = file_get_contents($url);  
    //   $conversion = json_decode($data,true);
    $converted = $_SESSION["conversion"] * $price;
    $round = ceil($converted / 10) * 10;
    //   echo $round;
    return $round;
}

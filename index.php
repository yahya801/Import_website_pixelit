<!DOCTYPE html>
<html class="no-js" lang="zxx">




<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Import Master </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS
        ============================================ -->
    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css"> -->

    <!-- Font Family CSS -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/cerebrisans.css"> -->

    <!-- FontAwesome CSS -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/fontawesome-all.min.css"> -->

    <!-- Swiper slider CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/swiper.min.css"> -->

    <!-- animate-text CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate-text.css"> -->

    <!-- Animate CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.min.css"> -->

    <!-- Light gallery CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css"> -->

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <?php
    // Start the session
    $url = "https://free.currconv.com/api/v7/convert?q=GBP_PKR&compact=ultra&apiKey=05f038474855c3fcfc6c";
    $data = file_get_contents($url);
    $conversion = json_decode($data, true);
    // Set session variables
    // $_SESSION["color"]= "blue";
    // $_SESSION["animal"]= "dog";
    $_SESSION["conversion"] = $conversion['GBP_PKR'];
    echo $conversion['GBP_PKR'];
    ?>

    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>


    <!--====================  header area ====================-->
    <div class="header-area header-area--default">
        <!-- Header Bottom Wrap Start -->
        <div class="header-bottom-wrap header-sticky">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header default-menu-style position-relative">

                            <!-- brand logo -->
                            <div class="header__logo">
                                <a href="index.php">
                                    <img src="assets/images/logo/logo-darknew.png" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!-- header midle box  -->
                            <div class="header-midle-box">


                            </div>

                            <!-- header right box -->
                            <div class="header-right-box">
                                <div class="header-right-inner" id="hidden-icon-wrapper">

                                    <div class="header-bottom-wrap d-md-block d-none">
                                        <div class="header-bottom-inner">
                                            <div class="header-bottom-left-wrap">
                                                <!-- navigation menu -->
                                                <div class="header__navigation d-none d-xl-block">
                                                    <nav class="navigation-menu primary--menu">
                                                        <ul>
                                                            <li>
                                                                <a href="index.html"><span>Home</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="aboutus.html"><span>About us</span></a>

                                                            </li>
                                                            <li>
                                                                <a href="faqs.html"><span>FAQS</span></a>

                                                            </li>
                                                            <li>
                                                                <a href="contactus.html"><span>Contact us</span></a>
                                                                <!-- mega menu -->
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- mobile menu -->
                                    <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                        <i></i>
                                    </div>
                                    <!-- hidden icons menu -->
                                    <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                        <a href="javascript:void(0)">
                                            <i class="far fa-ellipsis-h-alt"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Bottom Wrap End -->
            <div id="alert" class="alert" style="display: none;width: auto;color:white;background-color: #086AD8; height: auto;">
            <span class="closebtn" style="height:10px" onclick="this.parentElement.style.display='none';">&times;</span>
            The form has an issue with the URL or Brandname
          </div>
          <div id="shippingform" class="alert" style="display: none;width: auto;color:white;background-color: #086AD8; height: auto;">
            <span class="closebtn" style="height:10px" onclick="this.parentElement.style.display='none';">&times;</span>
            The form has an issue with the Email or Name
          </div>
        </div>
       
        <!--====================  End of header area  ====================-->

        <div id="main-wrapper">
            <div class="site-wrapper-reveal">
                <!--============ Infotechno Hero Start ============-->
                <div class="infotechno-hero infotechno-bg">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!--baseline-->
                            <div class="col-lg-6 col-md-6">
                                <div class="infotechno-hero-text  wow move-up">

                                    <h1 class="font-weight--reguler mb-15" style="font-size:67px">Orignal Brand <br>At Your <span class="text-color-primary">  Door</span>    </h1>
                                    <p>A fresh approach to shopping experience. </p>
                                  
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="infotechno-hero-inner-images">
                                    <div class="infotechno-inner-one">
                                        <img class="img-fluid" src="assets/images/hero/home-infotechno-main-slider-slide-01-image-01.png" alt="">
                                    </div>
                                    <div class="infotechno-inner-two  wow move-up">
                                        <img class="img-fluid" src="assets/images/hero/home-infotechno-main-slider-slide-01-image-02.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--============ Infotechno Hero End ============-->
                <!--====================  brand logo slider area ====================-->
                <div class="brand-logo-slider-area section-space--ptb_60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- brand logo slider -->
                                <div class="brand-logo-slider__container-area">
                                    <div class="swiper-container brand-logo-slider__container">
                                        <div class="swiper-wrapper brand-logo-slider__one">
                                            <div class="swiper-slide brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="assets/images/brands/44.png" class="img-fluid" alt="">
                                                    </div>
                                                    <!-- <div class="brand-logo__image-hover">
                                                    <img src="assets/images/brand/mitech-client-logo-01-hover.png"
                                                        class="img-fluid" alt="">
                                                </div> -->
                                                </a>
                                            </div>
                                            <div class="swiper-slide brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="assets/images/brands/45.png" class="img-fluid" alt="">
                                                    </div>
                                                    <!-- <div class="brand-logo__image-hover">
                                                    <img src="assets/images/brand/mitech-client-logo-02-hover.png"
                                                        class="img-fluid" alt="">
                                                </div> -->
                                                </a>
                                            </div>
                                            <div class="swiper-slide brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="assets/images/brands/58.png" class="img-fluid" alt="">
                                                    </div>
                                                    <!-- <div class="brand-logo__image-hover">
                                                    <img src="assets/images/brand/mitech-client-logo-03-hover.png"
                                                        class="img-fluid" alt="">
                                                </div> -->
                                                </a>
                                            </div>
                                            <div class="swiper-slide brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="assets/images/brands/35.png" class="img-fluid" alt="">
                                                    </div>
                                                    <!-- <div class="brand-logo__image-hover">
                                                    <img src="assets/images/brand/mitech-client-logo-04-hover.png"
                                                        class="img-fluid" alt="">
                                                </div> -->
                                                </a>
                                            </div>
                                            <div class="swiper-slide brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="assets/images/brands/36.png" class="img-fluid" alt="">
                                                    </div>
                                                    <!-- <div class="brand-logo__image-hover">
                                                    <img src="assets/images/brand/mitech-client-logo-05-hover.png"
                                                        class="img-fluid" alt="">
                                                </div> -->
                                                </a>
                                            </div>
                                            <div class="swiper-slide brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="assets/images/brands/25.png" class="img-fluid" alt="">
                                                    </div>
                                                    <!-- <div class="brand-logo__image-hover">
                                                    <img src="assets/images/brand/mitech-client-logo-06-hover.png"
                                                        class="img-fluid" alt="">
                                                </div> -->
                                                </a>
                                            </div>
                                            <div class="swiper-slide brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="assets/images/brands/41.png" class="img-fluid" alt="">
                                                    </div>
                                                    <!-- <div class="brand-logo__image-hover">
                                                    <img src="assets/images/brand/mitech-client-logo-07-hover.png"
                                                        class="img-fluid" alt="">
                                                </div> -->
                                                </a>
                                            </div>
                                            <div class="swiper-slide brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="assets/images/brands/48.png" class="img-fluid" alt="">
                                                    </div>
                                                    <!-- <div class="brand-logo__image-hover">
                                                    <img src="assets/images/brand/mitech-client-logo-08-hover.png"
                                                        class="img-fluid" alt="">
                                                </div> -->
                                                </a>
                                            </div>
                                            <div class="swiper-slide brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="assets/images/brands/22.png" class="img-fluid" alt="">
                                                    </div>
                                                    <!--      <div class="brand-logo__image-hover">
                                                    <img src="assets/images/brand/mitech-client-logo-09-hover.png"
                                                        class="img-fluid" alt="">
                                                </div> -->
                                                </a>
                                            </div>
                                            <div class="swiper-slide brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="assets/images/brands/51.png" class="img-fluid" alt="">
                                                    </div>
                                                    <!-- <div class="brand-logo__image-hover">
                                                    <img src="assets/images/brand/mitech-client-logo-09-hover.png"
                                                        class="img-fluid" alt="">
                                                </div> -->
                                                </a>
                                            </div>
                                            <div class="swiper-slide brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="assets/images/brands/42.png" class="img-fluid" alt="">
                                                    </div>
                                                    <!-- <div class="brand-logo__image-hover">
                                                    <img src="assets/images/brand/mitech-client-logo-09-hover.png"
                                                        class="img-fluid" alt="">
                                                </div> -->
                                                </a>
                                            </div>
                                            <div class="swiper-slide brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="assets/images/brands/27.png" class="img-fluid" alt="">
                                                    </div>
                                                    <!-- <div class="brand-logo__image-hover">
                                                    <img src="assets/images/brand/mitech-client-logo-09-hover.png"
                                                        class="img-fluid" alt="">
                                                </div> -->
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====================  End of brand logo slider area  ====================-->



                <!-- ============ Our Experience Wrapper Start =============== -->
                <div class="section-space--ptb_60 infotechno-section-bg-01">

                    <div class="our-experience-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="section-title small-mb__40 tablet-mb__40">

                                        <h3 style="padding-bottom: 5%" class="heading">Order Imported Products at
                                            <span class="text-color-primary">your
                                                doorstep</span></h3>

                                        <div class="ht-list style-auto-numbered-02">
                                            <div class="list-item">
                                                <div class="link">
                                                    <div class="list-header">
                                                        <div class="marker">
                                                            01
                                                        </div>
                                                        <div class="title-wrap">
                                                            <h6 class="title">Choose product</h6>
                                                            <p> Visit the website of the brand and copy the link of the
                                                                products you wish to buy.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="link">
                                                    <div class="list-header">
                                                        <div class="marker">
                                                            02
                                                        </div>
                                                        <div class="title-wrap">
                                                            <h6 class="title">Fill form </h6>
                                                            <p> Paste the product link and fill rest of the booking form
                                                                for the details
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <div class="link">
                                                    <div class="list-header">
                                                        <div class="marker"> 03</div>
                                                        <div class="title-wrap">
                                                            <h6 class="title">Place order
                                                            </h6>
                                                            <p> Place order, sit back and relax while we get your order
                                                                shipped securely to you.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 ml-auto" style="margin-top: auto;margin-bottom: auto;">

                                    <div class="video-interview section-space--mt_40 video-popup">
                                        <a href="https://www.youtube.com/watch?v=9No-FiEInLA" height="500" width="300" class="video-link mt-30">
                                            <div class="single-popup-wrap">
                                                <img class="img-fluid border-radus-5" src="assets/images/bg/faqs-video-poster.jpg" alt="">
                                                <div class="ht-popup-video video-button">
                                                    <div class="video-mark">
                                                        <div class="wave-pulse wave-pulse-1"></div>
                                                        <div class="wave-pulse wave-pulse-2"></div>
                                                    </div>
                                                    <div class="video-button__two">
                                                        <div class="video-play">
                                                            <span class="video-play-icon"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <!-- ============ Our Experience Wrapper End =============== -->


                <!--===========  Projects wrapper Start =============-->
                <div class="projects-wrapper projectinfotechno-bg section-space--ptb_60" id="scrollform">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12">
                                <!-- section-title-wrap Start -->
                                <div class="section-title-wrap text-center section-space--mb_40">

                                    <h3 class="heading">Proud projects that<span class="text-color-primary"> make us
                                            stand
                                            out</span></h3>
                                </div>
                                <!-- section-title-wrap Start -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <form id="myform" class="form-register">
                                    <div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <select id="brand" class="form-control" data-container-class="input-lg" data-search="true">
                                                        <option value="15">Select a Brand</option>
                                                        <option value="69"> <strong>-- ANY OTHER BRAND -- </strong>
                                                        </option>
                                                        <option value="21"> ADIDAS</option>
                                                        <option value="41">ALDO</option>
                                                        <option value="22">Amazon</option>
                                                        <option value="42">Armani UK</option>
                                                        <option value="31">ASOS</option>
                                                        <option value="43">Bershka</option>
                                                        <option value="32">BOOHOO</option>
                                                        <option value="23">Clarks</option>
                                                        <option value="33">Debenhams</option>
                                                        <option value="34">DuneLondon</option>
                                                        <option value="24">GAP</option>
                                                        <option value="44">GUCCI</option>
                                                        <option value="45">H&M</option>
                                                        <option value="46">Harrods</option>
                                                        <option value="47">Lacoste</option>
                                                        <option value="35">M&S</option>
                                                        <option value="48">MANGO</option>
                                                        <option value="49">Massimo Dutti</option>
                                                        <option value="39">MotherCare</option>
                                                        <option value="50">NastyGal</option>
                                                        <option value="25">NEXT</option>
                                                        <option value="51">Nike</option>
                                                        <option value="26">Ralph Lauren</option>
                                                        <option value="27">Reebok</option>
                                                        <option value="36">RiverIsland</option>
                                                        <option value="52">SelfRidges</option>
                                                        <option value="37">SportsDirect</option>
                                                        <option value="53">TedBaker</option>
                                                        <option value="54">TkMaxx</option>
                                                        <option value="38">TOPSHOP</option>
                                                        <option value="29">UNDER ARMOUR</option>
                                                        <option value="55">Urban Outfitters</option>
                                                        <option value="56">Victoria's Secret</option>
                                                        <option value="57">Weekday</option>
                                                        <option value="28">ZALANDO</option>
                                                        <option value="58">ZARA</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="prepend-icon">
                                                        <select id="shipping" class="form-control" data-container-class="input-lg" data-search="true">
                                                            <option value="16">Select Shipping</option>
                                                            <option value="51"> Rs800 each
                                                                Shirt/Top/Undergarment/Jewellery/Accessory</option>
                                                            <option value="52"> Rs1200 each Trouser/Jeans/Sweater/Jumper
                                                            </option>
                                                            <option value="53"> Rs3500 each Jacket/Blazer/Hoodie - Light
                                                                weight</option>
                                                            <option value="54"> Rs4500 each Long Coat/Jacket</option>
                                                            <option value="55"> Rs800 each Footwear(Kids) /
                                                                Slippers(Adults)</option>
                                                            <option value="56"> Rs2000 each
                                                                Footwear(Adults)/Handbag/Purse</option>
                                                            <option value="57"> Rs1000 each Small Book -
                                                                Paperback/SoftCover</option>
                                                            <option value="58"> Rs5000 each Book - Hardcover/CoffeeTable
                                                            </option>
                                                            <option value="59"> Rs700 each Mobile Cover</option>
                                                            <option value="60"> Rs1500 each Medicine/Small Cosmetics
                                                            </option>
                                                            <option value="61"> Rs2250 each Watch/Sunglasses</option>
                                                            <option value="62"> Rs3000 each Miscellaneous - Small
                                                            </option>
                                                            <option value="63"> Rs6000 each Miscellaneous - Medium
                                                            </option>
                                                            <option value="64"> Rs9000 each Miscellaneous - Large
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="url" class="form-control input-lg" placeholder="Paste products link form brand's website" required>
                                            <!-- <span class="error" id="urlerror">*</span> -->

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">

                                                <input min="1" max="10" id="qty" type="number" class="form-control input-lg" placeholder="Qty" required>

                                            </div>
                                            <div class="col-sm-3">
                                                <input id="size" type="text" class="form-control input-lg" placeholder="Size">
                                            </div>

                                            <div class="col-sm-3">
                                                <input id="color" type="text" class="form-control input-lg " placeholder="Color">
                                            </div>
                                            <div class="col-sm-3">
                                                <input id="price" type="text" class="form-control input-lg" placeholder="£" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 2%">
                                        <textarea placeholder="Any Special Requests" id="request" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <div style="margin-top: 2%">

                                        <button type="submit" style="background-color: #086AD8 !important;" id="submit-form" class="btn btn-lg btn-important btn-primary btn-block" style="width: 40%">Generate Invoice</button>
                                    </div>
                            </div>
                            <div>

                            </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  Projects wrapper End =============-->

        <!--====================  testimonial section ====================-->
        <div class="testimonial-slider-area section-space--ptb_60 bg-gray-3">
            <div class="container" id="invoicebox">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrap text-center section-space--mb_60">

                            <h3 class="heading">CheckOut</span></h3>
                        </div>
                        <!-- <div class="panel" id="invoice"> -->
                        <div class="tab">
                            <div>
                                <!-- <label>Select Shipping: </label> -->
                                <select id="delivery" class="shipping_select" onchange="changeshipping()" ;>
                                    <option value="110">10% on Cash on Delivery</option>
                                    <option value="100">0% on Credit Card</option>
                                </select>
                            </div>
                            <table id="producttable" class="table table-cart">
                                <tbody>
                                    <tr class="firstrow">
                                        <td>Brand</td>
                                        <!-- <td >URL</td> -->
                                        <td>Price</td>
                                        <td>Quantity</td>
                                        <td>Shipping</td>
                                        <td>Total</td>
                                        <td></td>
                                    </tr>
                                    <tr id="emptycart">
                                        <td colspan="6" style="text-align: center;">
                                            No Items in Cart
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div style="width: 100%">
                                <div class="price" style="width: 100%; display: table;">
                                    <div style="width: 100%">
                                        <table id="checkout" class="table2" style="float:right; width:20%;">
                                            <tr id="service-charges">
                                                <td style='color: black;'>Service Charges</td>
                                                <td style='color: black;'> Rs: 0</td>
                                            </tr>
                                            <tr id="total-charges">
                                                <td style='color: black;'> Total Charges</td>
                                                <td style='color: black;'>Rs: 0</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- <div class="invoicebuttons">
                                <button id="addmore" onclick='gotoinvoice()'>Add more</button>
                                <button>Proceed to Checkout</button>
                              </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <!-- formmm register -->
                            <div class="m-b-100">
                                <h2> Shipping Details</h2>
                                <form id="shippingdetails" method="POST" class="form-register">


                                    <div class="row">
                                        <!-- <div class="form-group"> -->
                                        <div class="col-sm-6" style="margin-bottom: 2%;">
                                            <input id="firstname" type="text" class="form-control input-lg" placeholder="First Name" required>
                                        </div>
                                        <div class="col-sm-6" style="margin-bottom: 2%;">
                                            <input id="lastname" type="text" class="form-control input-lg" placeholder="Last Name" required>
                                        </div>
                                        <!-- </div  > -->
                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group"> -->
                                        <div class="col-sm-6" style="margin-bottom: 2%;">
                                            <input id="email" type="email" class="form-control input-lg" placeholder="Email" required>
                                        </div>
                                        <div class="col-sm-6" style="margin-bottom: 2%;">
                                            <input id="phoneno" type="tel" class="form-control input-lg" placeholder="03xxxxxxxxx" required>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group"> -->
                                        <div class="col-sm-6" style="margin-bottom: 2%;">

                                            <select id="country" class="form-control" data-container-class="input-lg" data-search="true">
                                                <option value="" disabled selected>Select Country</option>
                                                <option value="PK">Pakistan</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6" style="margin-bottom: 2%;">
                                            <select name="Location" id="city" class="form-control" data-container-class="input-lg" data-search="true" ںrequired>
                                                <option value="" disabled selected>Select The City</option>
                                                <option value="Islamabad">Islamabad</option>
                                                <option value="" disabled>Punjab Cities</option>
                                                <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                                                <option value="Ahmadpur East">Ahmadpur East</option>
                                                <option value="Ali Khan Abad">Ali Khan Abad</option>
                                                <option value="Alipur">Alipur</option>
                                                <option value="Arifwala">Arifwala</option>
                                                <option value="Attock">Attock</option>
                                                <option value="Bhera">Bhera</option>
                                                <option value="Bhalwal">Bhalwal</option>
                                                <option value="Bahawalnagar">Bahawalnagar</option>
                                                <option value="Bahawalpur">Bahawalpur</option>
                                                <option value="Bhakkar">Bhakkar</option>
                                                <option value="Burewala">Burewala</option>
                                                <option value="Chillianwala">Chillianwala</option>
                                                <option value="Chakwal">Chakwal</option>
                                                <option value="Chichawatni">Chichawatni</option>
                                                <option value="Chiniot">Chiniot</option>
                                                <option value="Chishtian">Chishtian</option>
                                                <option value="Daska">Daska</option>
                                                <option value="Darya Khan">Darya Khan</option>
                                                <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                                <option value="Dhaular">Dhaular</option>
                                                <option value="Dina">Dina</option>
                                                <option value="Dinga">Dinga</option>
                                                <option value="Dipalpur">Dipalpur</option>
                                                <option value="Faisalabad">Faisalabad</option>
                                                <option value="Ferozewala">Ferozewala</option>
                                                <option value="Fateh Jhang">Fateh Jang</option>
                                                <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                                <option value="Gojra">Gojra</option>
                                                <option value="Gujranwala">Gujranwala</option>
                                                <option value="Gujrat">Gujrat</option>
                                                <option value="Gujar Khan">Gujar Khan</option>
                                                <option value="Hafizabad">Hafizabad</option>
                                                <option value="Haroonabad">Haroonabad</option>
                                                <option value="Hasilpur">Hasilpur</option>
                                                <option value="Haveli Lakha">Haveli Lakha</option>
                                                <option value="Jatoi">Jatoi</option>
                                                <option value="Jalalpur">Jalalpur</option>
                                                <option value="Jattan">Jattan</option>
                                                <option value="Jampur">Jampur</option>
                                                <option value="Jaranwala">Jaranwala</option>
                                                <option value="Jhang">Jhang</option>
                                                <option value="Jhelum">Jhelum</option>
                                                <option value="Kalabagh">Kalabagh</option>
                                                <option value="Karor Lal Esan">Karor Lal Esan</option>
                                                <option value="Kasur">Kasur</option>
                                                <option value="Kamalia">Kamalia</option>
                                                <option value="Kamoke">Kamoke</option>
                                                <option value="Khanewal">Khanewal</option>
                                                <option value="Khanpur">Khanpur</option>
                                                <option value="Kharian">Kharian</option>
                                                <option value="Khushab">Khushab</option>
                                                <option value="Kot Addu">Kot Addu</option>
                                                <option value="Jauharabad">Jauharabad</option>
                                                <option value="Lahore">Lahore</option>
                                                <option value="Lalamusa">Lalamusa</option>
                                                <option value="Layyah">Layyah</option>
                                                <option value="Liaquat Pur">Liaquat Pur</option>
                                                <option value="Lodhran">Lodhran</option>
                                                <option value="Malakwal">Malakwal</option>
                                                <option value="Mamoori">Mamoori</option>
                                                <option value="Mailsi">Mailsi</option>
                                                <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                                <option value="Mian Channu">Mian Channu</option>
                                                <option value="Mianwali">Mianwali</option>
                                                <option value="Multan">Multan</option>
                                                <option value="Murree">Murree</option>
                                                <option value="Muridke">Muridke</option>
                                                <option value="Mianwali Bangla">Mianwali Bangla</option>
                                                <option value="Muzaffargarh">Muzaffargarh</option>
                                                <option value="Narowal">Narowal</option>
                                                <option value="Nankana Sahib">Nankana Sahib</option>
                                                <option value="Okara">Okara</option>
                                                <option value="Renala Khurd">Renala Khurd</option>
                                                <option value="Pakpattan">Pakpattan</option>
                                                <option value="Pattoki">Pattoki</option>
                                                <option value="Pir Mahal">Pir Mahal</option>
                                                <option value="Qaimpur">Qaimpur</option>
                                                <option value="Qila Didar Singh">Qila Didar Singh</option>
                                                <option value="Rabwah">Rabwah</option>
                                                <option value="Raiwind">Raiwind</option>
                                                <option value="Rajanpur">Rajanpur</option>
                                                <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                                <option value="Rawalpindi">Rawalpindi</option>
                                                <option value="Sadiqabad">Sadiqabad</option>
                                                <option value="Safdarabad">Safdarabad</option>
                                                <option value="Sahiwal">Sahiwal</option>
                                                <option value="Sangla Hill">Sangla Hill</option>
                                                <option value="Sarai Alamgir">Sarai Alamgir</option>
                                                <option value="Sargodha">Sargodha</option>
                                                <option value="Shakargarh">Shakargarh</option>
                                                <option value="Sheikhupura">Sheikhupura</option>
                                                <option value="Sialkot">Sialkot</option>
                                                <option value="Sohawa">Sohawa</option>
                                                <option value="Soianwala">Soianwala</option>
                                                <option value="Siranwali">Siranwali</option>
                                                <option value="Talagang">Talagang</option>
                                                <option value="Taxila">Taxila</option>
                                                <option value="Toba Tek Singh">Toba Tek Singh</option>
                                                <option value="Vehari">Vehari</option>
                                                <option value="Wah Cantonment">Wah Cantonment</option>
                                                <option value="Wazirabad">Wazirabad</option>
                                                <option value="" disabled>Sindh Cities</option>
                                                <option value="Badin">Badin</option>
                                                <option value="Bhirkan">Bhirkan</option>
                                                <option value="Rajo Khanani">Rajo Khanani</option>
                                                <option value="Chak">Chak</option>
                                                <option value="Dadu">Dadu</option>
                                                <option value="Digri">Digri</option>
                                                <option value="Diplo">Diplo</option>
                                                <option value="Dokri">Dokri</option>
                                                <option value="Ghotki">Ghotki</option>
                                                <option value="Haala">Haala</option>
                                                <option value="Hyderabad">Hyderabad</option>
                                                <option value="Islamkot">Islamkot</option>
                                                <option value="Jacobabad">Jacobabad</option>
                                                <option value="Jamshoro">Jamshoro</option>
                                                <option value="Jungshahi">Jungshahi</option>
                                                <option value="Kandhkot">Kandhkot</option>
                                                <option value="Kandiaro">Kandiaro</option>
                                                <option value="Karachi">Karachi</option>
                                                <option value="Kashmore">Kashmore</option>
                                                <option value="Keti Bandar">Keti Bandar</option>
                                                <option value="Khairpur">Khairpur</option>
                                                <option value="Kotri">Kotri</option>
                                                <option value="Larkana">Larkana</option>
                                                <option value="Matiari">Matiari</option>
                                                <option value="Mehar">Mehar</option>
                                                <option value="Mirpur Khas">Mirpur Khas</option>
                                                <option value="Mithani">Mithani</option>
                                                <option value="Mithi">Mithi</option>
                                                <option value="Mehrabpur">Mehrabpur</option>
                                                <option value="Moro">Moro</option>
                                                <option value="Nagarparkar">Nagarparkar</option>
                                                <option value="Naudero">Naudero</option>
                                                <option value="Naushahro Feroze">Naushahro Feroze</option>
                                                <option value="Naushara">Naushara</option>
                                                <option value="Nawabshah">Nawabshah</option>
                                                <option value="Nazimabad">Nazimabad</option>
                                                <option value="Qambar">Qambar</option>
                                                <option value="Qasimabad">Qasimabad</option>
                                                <option value="Ranipur">Ranipur</option>
                                                <option value="Ratodero">Ratodero</option>
                                                <option value="Rohri">Rohri</option>
                                                <option value="Sakrand">Sakrand</option>
                                                <option value="Sanghar">Sanghar</option>
                                                <option value="Shahbandar">Shahbandar</option>
                                                <option value="Shahdadkot">Shahdadkot</option>
                                                <option value="Shahdadpur">Shahdadpur</option>
                                                <option value="Shahpur Chakar">Shahpur Chakar</option>
                                                <option value="Shikarpaur">Shikarpaur</option>
                                                <option value="Sukkur">Sukkur</option>
                                                <option value="Tangwani">Tangwani</option>
                                                <option value="Tando Adam Khan">Tando Adam Khan</option>
                                                <option value="Tando Allahyar">Tando Allahyar</option>
                                                <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                                <option value="Thatta">Thatta</option>
                                                <option value="Umerkot">Umerkot</option>
                                                <option value="Warah">Warah</option>
                                                <option value="" disabled>Khyber Cities</option>
                                                <option value="Abbottabad">Abbottabad</option>
                                                <option value="Adezai">Adezai</option>
                                                <option value="Alpuri">Alpuri</option>
                                                <option value="Akora Khattak">Akora Khattak</option>
                                                <option value="Ayubia">Ayubia</option>
                                                <option value="Banda Daud Shah">Banda Daud Shah</option>
                                                <option value="Bannu">Bannu</option>
                                                <option value="Batkhela">Batkhela</option>
                                                <option value="Battagram">Battagram</option>
                                                <option value="Birote">Birote</option>
                                                <option value="Chakdara">Chakdara</option>
                                                <option value="Charsadda">Charsadda</option>
                                                <option value="Chitral">Chitral</option>
                                                <option value="Daggar">Daggar</option>
                                                <option value="Dargai">Dargai</option>
                                                <option value="Darya Khan">Darya Khan</option>
                                                <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                                <option value="Doaba">Doaba</option>
                                                <option value="Dir">Dir</option>
                                                <option value="Drosh">Drosh</option>
                                                <option value="Hangu">Hangu</option>
                                                <option value="Haripur">Haripur</option>
                                                <option value="Karak">Karak</option>
                                                <option value="Kohat">Kohat</option>
                                                <option value="Kulachi">Kulachi</option>
                                                <option value="Lakki Marwat">Lakki Marwat</option>
                                                <option value="Latamber">Latamber</option>
                                                <option value="Madyan">Madyan</option>
                                                <option value="Mansehra">Mansehra</option>
                                                <option value="Mardan">Mardan</option>
                                                <option value="Mastuj">Mastuj</option>
                                                <option value="Mingora">Mingora</option>
                                                <option value="Nowshera">Nowshera</option>
                                                <option value="Paharpur">Paharpur</option>
                                                <option value="Pabbi">Pabbi</option>
                                                <option value="Peshawar">Peshawar</option>
                                                <option value="Saidu Sharif">Saidu Sharif</option>
                                                <option value="Shorkot">Shorkot</option>
                                                <option value="Shewa Adda">Shewa Adda</option>
                                                <option value="Swabi">Swabi</option>
                                                <option value="Swat">Swat</option>
                                                <option value="Tangi">Tangi</option>
                                                <option value="Tank">Tank</option>
                                                <option value="Thall">Thall</option>
                                                <option value="Timergara">Timergara</option>
                                                <option value="Tordher">Tordher</option>
                                                <option value="" disabled>Balochistan Cities</option>
                                                <option value="Awaran">Awaran</option>
                                                <option value="Barkhan">Barkhan</option>
                                                <option value="Chagai">Chagai</option>
                                                <option value="Dera Bugti">Dera Bugti</option>
                                                <option value="Gwadar">Gwadar</option>
                                                <option value="Harnai">Harnai</option>
                                                <option value="Jafarabad">Jafarabad</option>
                                                <option value="Jhal Magsi">Jhal Magsi</option>
                                                <option value="Kacchi">Kacchi</option>
                                                <option value="Kalat">Kalat</option>
                                                <option value="Kech">Kech</option>
                                                <option value="Kharan">Kharan</option>
                                                <option value="Khuzdar">Khuzdar</option>
                                                <option value="Killa Abdullah">Killa Abdullah</option>
                                                <option value="Killa Saifullah">Killa Saifullah</option>
                                                <option value="Kohlu">Kohlu</option>
                                                <option value="Lasbela">Lasbela</option>
                                                <option value="Lehri">Lehri</option>
                                                <option value="Loralai">Loralai</option>
                                                <option value="Mastung">Mastung</option>
                                                <option value="Musakhel">Musakhel</option>
                                                <option value="Nasirabad">Nasirabad</option>
                                                <option value="Nushki">Nushki</option>
                                                <option value="Panjgur">Panjgur</option>
                                                <option value="Pishin Valley">Pishin Valley</option>
                                                <option value="Quetta">Quetta</option>
                                                <option value="Sherani">Sherani</option>
                                                <option value="Sibi">Sibi</option>
                                                <option value="Sohbatpur">Sohbatpur</option>
                                                <option value="Washuk">Washuk</option>
                                                <option value="Zhob">Zhob</option>
                                                <option value="Ziarat">Ziarat</option>
                                            </select>
                                        </div>
                                        <!-- </div> -->
                                    </div>


                                    <div class="row">
                                        <!-- <div class="form-group"> -->
                                        <div class="col-sm-12" style="margin-bottom: 2%;margin-top:2%;">
                                            <input id="address1" type="text" class="form-control input-lg" placeholder="Street Address 1" required>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="row">
                                        <!-- <div class="form-group"> -->
                                        <div class="col-sm-12" style="margin-bottom: 2%;margin-top:2%;">
                                            <input id="address2" type="text" class="form-control input-lg" placeholder="Street Address 2" required>
                                        </div>
                                        <!-- </div> -->
                                    </div>

                                </form>
                            </div>

                        </div>
                        <div class="tab">
                            <!-- <div id="myModal" class="modal fade"> -->
                            <div class="modal-dialog modal-confirm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="icon-box">
                                        <i class="fas fa-check"></i>
                                        </div>
                                        <h4 class="modal-title w-100">Awesome!</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-center">Your booking has been confirmed. Check your email for
                                            detials.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success btn-block" style="color:white;background-color: #086AD8;" data-dismiss="modal">OK</button>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                        <div class="rowrow-cart" style="width: 100%; display: block">
                            <div class="invoicebuttons">
                                <button id="addmore" class="ht-btn ht-btn-sm" onclick='gotoinvoice()'>Add more</button>
                                <button type="button" class="ht-btn ht-btn-sm" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" class="ht-btn ht-btn-sm" id="nextBtn" onclick="nextPrev(1)">Proceed to
                                    Checkout</button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                           
                        </div>
                        <!-- </div> -->

                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of testimonial section  ====================-->


        <!--====================  Blog Section Start ====================-->

    </div>


    <!--====================  footer area ====================-->
    <div class="footer-area-wrapper bg-gray">
        <div class="footer-area section-space--ptb_60">
            <div class="container">
                <div class="row footer-widget-wrapper">
                    <div class="col-lg-10 col-md-6 col-sm-6 footer-widget">
                        <div class="footer-widget__logo mb-30">
                            <img src="assets/images/logo/dark-logo-160x48.png" class="img-fluid" alt="">
                        </div>
                        <ul class="footer-widget__list">
                            <li>58 Howard Street #2 San Francisco, CA 941</li>
                            <li><a href="mailto:contact@aeroland.com" class="hover-style-link">contact@aeroland.com</a>
                            </li>
                            <li><a href="tel:123344556" class="hover-style-link text-black font-weight--bold">(+68)1221
                                    09876</a>
                            </li>
                            <li><a href="https://hasthemes.com/" class="hover-style-link text-color-primary">www.importmaster.com</a></li>
                        </ul>
                    </div>


                    <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                        <h6 class="footer-widget__title mb-20">Support</h6>
                        <ul class="footer-widget__list">
                            <li><a href="#" class="hover-style-link">Forum Support</a></li>
                            <li><a href="#" class="hover-style-link">Help & FAQ</a></li>
                            <li><a href="#" class="hover-style-link">Contact Us</a></li>
                            <li><a href="#" class="hover-style-link">Pricing and plans</a></li>
                            <li><a href="#" class="hover-style-link">Cookies Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-copyright-area section-space--pb_30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-left">
                          <span class="copyright-text">&copy; 2020 ImportMaster. <a href="https://hasthemes.com/">All Rights Reserved.</a></span>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <ul class="list ht-social-networks solid-rounded-icon">
                            </li>
                            <li class="item">
                                <a href="https://facebook.com/" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                    <i class="fab fa-facebook-f link-icon"></i>
                                </a>
                            </li>
                            <li class="item">
                                <a href="https://instagram.com/" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                    <i class="fab fa-instagram link-icon"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of footer area  ====================-->








    </div>

    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo-darknew.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-right">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li>
                            <a href="index.php"><span>Home</span></a>
                        </li>
                        <li>
                            <a href="aboutus.html"><span>About us</span></a>

                        </li>
                        <li>
                            <a href="faqs.html"><span>FAQS</span></a>

                        </li>
                        <li>
                            <a href="contactus.html"><span>Contact us</span></a>
                            <!-- mega menu -->
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->







    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ml-auto col-4">
                        <!-- search content -->
                        <div class="search-content text-right">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->

    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <!-- <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script> -->

    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- wow JS -->
    <!-- <script src="assets/js/plugins/wow.min.js"></script> -->

    <!-- Swiper Slider JS -->
    <!-- <script src="assets/js/plugins/swiper.min.js"></script> -->

    <!-- Light gallery JS -->
    <!-- <script src="assets/js/plugins/lightgallery.min.js"></script> -->

    <!-- Waypoints JS -->
    <!-- <script src="assets/js/plugins/waypoints.min.js"></script> -->

    <!-- Counter down JS -->
    <!-- <script src="assets/js/plugins/countdown.min.js"></script> -->

    <!-- Isotope JS -->
    <!-- <script src="assets/js/plugins/isotope.min.js"></script> -->

    <!-- Masonry JS -->
    <!-- <script src="assets/js/plugins/masonry.min.js"></script> -->

    <!-- ImagesLoaded JS -->
    <!-- <script src="assets/js/plugins/images-loaded.min.js"></script> -->

    <!-- Wavify JS -->
    <!-- <script src="assets/js/plugins/wavify.js"></script> -->

    <!-- jQuery Wavify JS -->
    <!-- <script src="assets/js/plugins/jquery.wavify.js"></script> -->

    <!-- circle progress JS -->
    <!-- <script src="assets/js/plugins/circle-progress.min.js"></script> -->

    <!-- counterup JS -->
    <!-- <script src="assets/js/plugins/counterup.min.js"></script> -->


    <!-- animation text JS -->
    <!-- <script src="assets/js/plugins/animation-text.min.js"></script> -->

    <!-- Vivus JS -->
    <!-- <script src="assets/js/plugins/vivus.min.js"></script> -->

    <!-- Some plugins JS -->
    <!-- <script src="assets/js/plugins/some-plugins.js"></script> -->


    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->


    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="./assets/js/functions.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <script>
        var item_brand = [];
        var item_price = [];
        var item_qty = [];
        var item_size = [];
        var item_url = [];
        var item_shipping = [];
        var item_color = [];
        var item_request = [];
        var grand_total = 0;
        var total = 0;
        var shipping_total = 0;
        var price_total = 0;
        var total_price = 0;
        var service_charges = 0;
        var item_no = 0;
        var shipping_value = 110;

        function incHeight() {
            var el = document.getElementById("invoice");
            var height = el.offsetHeight;
            var newHeight = height + 200;
            el.style.height = newHeight + "px";
        }
        var form = document.getElementById("myform");
        form.addEventListener("submit", check);

        function check2() {
            console.log("jjjj");
            // return false;





        }

        function check() {
            event.preventDefault();
            var data = new FormData();
            // var brand = document.getElementById("brand").value
            data.append("brand", document.getElementById("brand").value);
            data.append("url", document.getElementById("url").value);
            data.append("shipping", document.getElementById("shipping").value);
            data.append("qty", document.getElementById("qty").value);
            data.append("size", document.getElementById("size").value);
            data.append("color", document.getElementById("color").value);
            data.append("price", document.getElementById("price").value);
            data.append("request", document.getElementById("request").value);
            console.log(data, "data");
              var x = document.getElementById("alert");
              if (x.style.display === "block") {
                x.style.display = "none";
              }
            var xhr = new XMLHttpRequest();
            console.log("hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh");
            xhr.open("POST", "form.php");
            xhr.onload = function() {
                // console.log(this.response)
                console.log("jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj");
                console.log(data, "data2");
                console.log(this.response);
                var formdata = JSON.parse(this.response);
                if (formdata.urlcheck != "Okay") {
                    //   console.log(formdata);
                      var x = document.getElementById("alert");
                      if (x.style.display === "none") {
                        x.style.display = "block";
                      } else {
                        x.style.display = "none";
                      }
                } else {
                      var x = document.getElementById("alert");
                      if (x.style.display === "block") {
                        x.style.display = "none";
                      }

                    item_brand.push(formdata.brand);
                    item_shipping.push(formdata.shipping);
                    item_url.push(formdata.url);
                    item_price.push(formdata.price);
                    item_color.push(formdata.color);
                    item_size.push(formdata.size);
                    item_qty.push(formdata.quantity);
                    item_request.push(formdata.request);
                    item_no = item_brand.length;

                    if (formdata.brand != 69) {
                        var myobj = document.getElementById("emptycart");
                        if (myobj) {
                            myobj.remove();
                        }
                        $("#producttable").append(
                            "<tr class='cart-item'>" +
                            "<td style='vertical-align: middle'><img height='100px' src='assets/images/brands/" +
                            formdata.brand +
                            ".png' ></img>  </td>" +
                            // "<td style='vertical-align: middle'>" + formdata.url  + "</td>"+
                            "<td style='vertical-align: middle;'> Rs: " +
                            formatNumber(formdata.price) +
                            "</td>" +
                            "<td style='vertical-align: middle'>" +
                            formdata.quantity +
                            "</td>" +
                            "<td style='vertical-align: middle'>  Rs: " +
                            formatNumber(formdata.shipping) +
                            "</td>" +
                            "<td style='vertical-align: middle'> Rs: " +
                            formatNumber(formdata.price * formdata.quantity + formdata.shipping) +
                            "</td>" +
                            "<td class='product-remove'> <i onclick='productdelete(this)' class='fa fa-close' style='font-size:24px'></i></td>" +
                            "</tr>"
                        );
                        showTab(currentTab);
                        // console.log(item_brand)
                        console.log(formdata);
                        var elem = document.getElementById("invoicebox");
                        elem.scrollIntoView();
                        document.getElementById("myform").reset();
                        calculateprice();
                    }
                }
            };

            xhr.send(data);

            // (C) PREVENT HTML FORM SUBMIT
            return false;
        }

        function calculateprice() {
            shipping_total = price_total = 0;
            for (var i = 0; i < item_shipping.length; i++) {
                // console.log(i)
                shipping_total = shipping_total + item_shipping[i];
                price_total = price_total + item_qty[i] * item_price[i];
            }

            total_price = parseInt(shipping_total) + parseInt(price_total);
            console.log(total_price, "total");
            // grand_total += parseInt(total_price)
            // console.log(item_shipping)
            console.log(total_price, "shipping");
            shipping_value = document.getElementById("delivery").value;
            console.log(document.getElementById("delivery").value);
            changeshipping();
        }

        function productdelete(ctl) {
            // console.log(ctl.rowIndex)

            $("#producttable")
                .find("tr")
                .click(function() {
                    console.log($(this).index());
                    index = $(this).index() - 1;
                    console.log(index);
                    $(ctl).parents("tr").remove();
                    if (index > -1) {
                        item_brand.splice(index, 1);
                        item_price.splice(index, 1);
                        item_qty.splice(index, 1);
                        item_size.splice(index, 1);
                        item_url.splice(index, 1);
                        item_shipping.splice(index, 1);
                        item_color.splice(index, 1);
                        item_request.splice(index, 1);
                        item_no = item_brand.length;
                    }
                    calculateprice();
                    showTab(currentTab);
                    // console.log(item_brand)
                });
        }

        function changeshipping() {
            // console.log("jjjj")
            shipping_value = document.getElementById("delivery").value;
            if (document.getElementById("delivery").value == 110) {
                // grand_total = parseInt(total_price)
                service_charges = total_price * 0.1;
                grand_total = parseInt(total_price) + parseInt(service_charges);
            } else {
                grand_total = parseInt(total_price);
                service_charges = 0;
            }
            var myobj = document.getElementById("service-charges");
            myobj.remove();
            var obj = document.getElementById("total-charges");
            obj.remove();
            $("#checkout").append(
                "  <tr id='service-charges'>" +
                "<td  style='color: black;'>Service Charges</td>" +
                "<td  style='color: black;'> Rs: " +
                formatNumber(service_charges) +
                "</td>" +
                "</tr>"
            );
            $("#checkout").append(
                "  <tr id='total-charges'>" +
                "<td  style='color: black;'>Total Charges</td>" +
                "<td  style='color: black;'> Rs: " +
                formatNumber(grand_total) +
                "</td>" +
                "</tr>"
            );
            // $("#service").append("<h4 style='color: black;'id='service-charges'> Service Charges: Rs " + service_charges + "</h4>")
            // $("#total").append("<h4 style='color: black;' id='total-charges'> Total Charges: Rs " + grand_total + "</h4>")
        }

        function gotoinvoice() {
            var elem = document.getElementById("scrollform");
            elem.scrollIntoView();
        }


        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab);

        function showTab(n) {

            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            var z = document.getElementById("emptycart")
            // console.log(z)
            var y = document.getElementById("producttable").rows.length
            if (y == 1) {
                $("#producttable").append(" <tr id='emptycart'; >" +
                    "<td colspan='6' style='text-align: center; background-color: white; color: black;'>" +
                    "No Items in Cart</td></tr>");
            }
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("addmore").style.display = "inline";
                document.getElementById("prevBtn").style.display = "none";
                document.getElementById("nextBtn").innerHTML = "Next";
                // document.getElementById("nextBtn").onclick = function() {
                //   validate_shipping()
                // };
                if (z) {
                    document.getElementById("nextBtn").disabled = true;
                } else {
                    document.getElementById("nextBtn").disabled = false;
                }
            }
            if (n == 1) {
                document.getElementById("addmore").style.display = "none";
                
                    document.getElementById("prevBtn").style.display = "inline";
                    document.getElementById("nextBtn").innerHTML = "Procedd to Payment";
                    // document.getElementById("prevBtn").style.display = "inline";
                }
            

            if (n == 2) {
                document.getElementById("addmore").style.display = "none";
                document.getElementById("nextBtn").style.display = "none";
                document.getElementById("prevBtn").style.display = "none";
            }
         
            // else if (shipping_value == 110) {
            //   document.getElementById("addmore").style.display = "none";
            //   document.getElementById("prevBtn").style.display = "inline";
            // }
            //  else if (shipping_value == 100) {
            //   nextPrev(2)
            //   document.getElementById("nextBtn").innerHTML = "Submit";
            //   document.getElementById("prevBtn").style.display = "inline";
            // }
            // if (n == (x.length - 1)) {
            // document.getElementById("nextBtn").style.display = "none";
            // document.getElementById("prevBtn").style.display = "none";
            // }
            // } else {
            //   // document.getElementById("nextBtn").innerHTML = "Next";
            // }
            fixStepIndicator(n)
        }

        function validate_shipping() {
            var fname = document.getElementById("firstname").value
            var lname = document.getElementById("lastname").value
            var email = document.getElementById("email").value
            var phone_number = document.getElementById("phoneno").value
            var country = document.getElementById("country").value
            var city = document.getElementById("city").value
            var address1 = document.getElementById("address1").value
            var address2 = document.getElementById("address2").value
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            const phone = /^\d{11}$/
            if (fname == "" || lname == "" || email == "" || phone_number == "" || country == "" || city == "" || address1 == "") {
                var x = document.getElementById("shippingform");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
                return false
            } else if (re.test(email) && (phone.test(phone_number))) {


                var data1 = new FormData();
                data1.append("fname", fname)
                data1.append("lname", lname)
                data1.append("email", email)
                data1.append("phoneno", phone_number)
                data1.append("address1", address1)
                data1.append("append2", address2)
                document.getElementById("shippingdetails").onsubmit
                var xhd = new XMLHttpRequest();
                xhd.open("POST", "shipping.php");
                xhd.send(data1);
                xhd.onload = function() {
                    var formdata = JSON.parse(this.response)
                }
            } else {
                console.log("email or phone not valid")
                var x = document.getElementById("shippingform");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
                return false
            }

        }

        function nextPrev(n) {

            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            // if (n == 1) return false;
            // Hide the current tab:
            if (currentTab == 1) {
                var y = document.getElementById("shippingform");
                if (y.style.display === "block") {
                    y.style.display = "none";
                }
                if (n == 1) {
                    if (validate_shipping() == false) {
                        console.log("exit")
                        return
                    } 
                }
            }
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                // document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }

        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        }
    </script>
</body>


<!-- Mirrored from demo.hasthemes.com/mitech-preview/index-infotechno.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Nov 2020 07:20:10 GMT -->

</html>
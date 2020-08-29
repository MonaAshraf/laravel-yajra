


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('zvendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('zfonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('zfonts/themify/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('zfonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('zfonts/elegant-font/html-css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('zvendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('zvendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('zvendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('zvendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('zvendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('zvendor/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('zvendor/lightbox2/css/lightbox.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('zcss/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('zcss/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('zcss/main.css') }}">
    <link rel="stylesheet" href="{{ asset('zcss/overwrite.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('zcss/rtl.css') }}">

</head>

<body class="animsition">
     <header class="header1">
        <div class="container-menu-header">

            <div class="wrap_header"> <a href="zhome.html" class="logo"> <img src="{{ asset('zimages/logo2.png') }}" alt="IMG-LOGO">
                </a>
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li class="sale-noti"> <a href="zhome.html">الرئيسية</a></li>
                            <li> <a href="product.html">المنتجات</a>
                            </li>
                            <li> <a href="design.html">التصاميم</a>

                            </li>
                            <li> <a href="my-ideas.html"> أفكارى </a></li>
                            <li> <a href="about.html">من نحن </a></li>
                            <li> <a href="contact.html">اتصل بنا</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-icons">

                    <div class="header-wrapicon2">

                        <a class="header-icon1 js-show-header-dropdown sign-in" href="login.html"><i class="fa fa-user" aria-hidden="true"></i> تسجيل الدخول </a>


                        <!--
                        <div class="header-cart header-dropdown header-cart-login">
                            <ul class="header-cart-wrapitem login">


                                <li class="header-cart-item">
                                    <a href="Order.html"> My orders </a>
                                </li>
                                <li class="header-cart-item">
                                    <a href="account-settings.html"> Account Settings </a>
                                </li>
                                <li class="header-cart-item">
                                    <a href="#">sign out </a>
                                </li>
                            </ul>


                        </div>
-->
                    </div>



                    <span class="linedivide1"></span>
                    <div class="header-wrapicon2">

                        <a class="header-icon1 js-show-header-dropdown" href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>

                        <span class="header-icons-noti">0</span>

                    </div>
                    <a href="../en/zhome.html" class="btn btn-lang" > EN </a>

                </div>
            </div>
        </div>
        <div class="wrap_header_mobile">
            <a href="zhome.html" class="logo-mobile"> <img src="{{ asset('zimages/logo2.png') }}" alt="IMG-LOGO"> </a>
            <div class="btn-show-menu">
                <div class="header-icons-mobile">
                    <a href="login.html" class="header-wrapicon1 dis-block">
                        <img src="{{ asset('zimages/icons/icon-header-01.png') }}" class="header-icon1" alt="ICON">
                    </a>
                    <span class="linedivide2"></span>
                    <div class="header-wrapicon2">

                        <a class="header-icon1 js-show-header-dropdown" href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>

                        <span class="header-icons-noti">0</span>

                    </div>
                </div>
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span></div>
            </div>
        </div>
        <div class="wrap-side-menu">
            <nav class="side-menu">
                <ul class="main-menu">
                    <li class="item-menu-mobile"> <a href="zhome.html">Home</a></li>


                    <li class="item-menu-mobile"> <a href="product.html">products</a>

                    </li>
                    <li class="item-menu-mobile"><a href="design.html">Designs</a>
                    </li>
                    <li class="item-menu-mobile"> <a href="my-ideas.html">MY Ideas</a></li>
                    <li class="item-menu-mobile"> <a href="about.html">About</a></li>
                    <li class="item-menu-mobile"> <a href="contact.html">Contact</a></li>

                </ul>
            </nav>
        </div>
    </header>


    <!--
  <div id="arrow-down">
    <i class="fa  fa-angle-right"></i>
  </div>
-->



    <section class="slide1  p-b-35" dir="ltr">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1" style="background-image: url(zimages/header.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-245 p-b-100">
                        <h2 class="caption2-slide1 xl-text1 t-center m-b-37 " data-appear="lightSpeedIn">
                            مرحبا بكم فى زاخر
                    </h2> <span class="caption1-slide1 m-text1 t-center m-b-15" data-appear="fadeInDown"> We are pleased to welcome you to our website. </span>
                        <div class="wrap-btn-slide1 w-size1 " data-appear="zoomIn"> <a href="product.html" class="flex-c-m size2 bg4 bo-rad-3 hov1 m-text3 trans-0-4 btn-primary"> Explore </a></div>
                    </div>
                </div>
                <div class="item-slick1 item2-slick1" style="background-image: url(zimages/header2.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-245 p-b-100">
                        <h2 class="caption2-slide1 xl-text1 t-center m-b-37 " data-appear="lightSpeedIn"> Design
                            Home</h2> <span class="caption1-slide1 m-text1 t-center m-b-15" data-appear="rollIn"> Get
                            Inspired. Shop Products. </span>
                        <div class="wrap-btn-slide1 w-size1  " data-appear="slideInUp"> <a href="product.html" class="flex-c-m size2 bg4 bo-rad-3 hov1 m-text3 trans-0-4 btn-primary"> Shop Now </a></div>
                    </div>
                </div>
                <div class="item-slick1 item3-slick1" style="background-image: url(zimages/header3.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-245 p-b-100">
                        <h2 class="caption2-slide1 xl-text1 t-center m-b-37 " data-appear="rotateInUpRight"> All
                            under one roof</h2> <span class="caption1-slide1 m-text1 t-center m-b-15" data-appear="rotateInDownLeft"> Welcome to Zakher Homes </span>
                        <div class="wrap-btn-slide1 w-size1  " data-appear="rotateIn"> <a href="product.html" class="flex-c-m size2 bg4 bo-rad-3 hov1 m-text3 trans-0-4 btn-primary"> Explore </a></div>
                    </div>
                </div>
                <div class="item-slick1 item3-slick1" style="background-image: url(zimages/header8.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-245 p-b-100">
                        <h2 class="caption2-slide1 xl-text1 t-center m-b-37 " data-appear="rotateInUpRight"> Modern
                            design patterns</h2> <span class="caption1-slide1 m-text1 t-center m-b-15" data-appear="rotateInDownLeft"> Exclusively made for you </span>
                        <div class="wrap-btn-slide1 w-size1  " data-appear="rotateIn"> <a href="product.html" class="flex-c-m size2 bg4 bo-rad-3 hov1 m-text3 trans-0-4 btn-primary"> Explore </a></div>
                    </div>
                </div>
                <div class="item-slick1 item3-slick1" style="background-image: url(zimages/header6.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-245 p-b-100 bo14">
                        <h2 class="caption2-slide1 xl-text1 t-center  m-b-37" data-appear="rotateInUpRight">
                            Eco-friendly garden designs</h2> <span class="caption1-slide1 m-text1 t-center m-b-15" data-appear="rotateInDownLeft"> Click below to get stunned </span>
                        <div class="wrap-btn-slide1 w-size1  " data-appear="rotateIn"> <a href="product.html" class="flex-c-m size2 bg4 bo-rad-3 hov1 m-text3 trans-0-4 btn-primary"> Explore </a></div>
                    </div>
                </div>
                <div class="item-slick1 item3-slick1" style="background-image: url(images/header4.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-245 p-b-100">
                        <h2 class="caption2-slide1 xl-text1 t-center  m-b-37" data-appear="rotateInUpRight"> Design
                            your dream home</h2> <span class="caption1-slide1 m-text1 t-center m-b-15" data-appear="rotateInDownLeft"> We are here to help you! </span>
                        <div class="wrap-btn-slide1 w-size1  " data-appear="rotateIn"> <a href="product.html" class="flex-c-m size2 bg4 bo-rad-3 hov1 m-text3 trans-0-4 btn-primary"> Explore </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Content page -->

    <section class="newproduct bgwhite p-t-35 p-b-35">
        <div class="container">
  <div class="row p-b-30">
                <div class="col-md-12  ">

                    <h3 class="title-sec"> products </h3>
                </div>
            </div>
            <div class="wrap-slick2">
                <div class="slick2">



                    <div class="item-slick2 p-l-15 p-r-15 text-center catg-block">
                       <a class="" href="product-sub.html">
                        <!-- Block2 -->
                        <div class=" product-one">
                            <div class="">
                                <img src="{{ asset('zimages/0%20(2).webp')}}" alt="IMG-PRODUCT" class="img-fluid">
                            </div>
                            <div class=" product-one-name ">
                                <p>
                                    Art

                                </p>

                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="item-slick2 p-l-15 p-r-15 text-center catg-block">
                         <a class="" href="product.html">
                        <!-- Block2 -->
                        <div class=" product-one">
                            <div class="">
                                <img src="{{ asset('zimages/0%20(8).webp') }}" alt="IMG-PRODUCT" class="img-fluid">
                            </div>
                            <div class=" product-one-name ">
                                <p>
                                    Bath

                                </p>

                            </div>
                        </div>
                    </a>
                    </div>
                      <div class="item-slick2 p-l-15 p-r-15 text-center catg-block">
                     <a class="" href="product.html">
                        <!-- Block2 -->
                        <div class=" product-one">
                            <div class="">
                                <img src="{{ asset('zimages/1%20(22).webp') }}" alt="IMG-PRODUCT" class="img-fluid">
                            </div>
                            <div class=" product-one-name ">
                                <p>
                                    Bed
                                </p>

                            </div>
                        </div>
                    </a>
                    </div>
             <div class="item-slick2 p-l-15 p-r-15 text-center catg-block">
                         <a class="" href="product.html">
                        <!-- Block2 -->
                        <div class=" product-one">
                            <div class="">
                                <img src="{{ asset('zimages/0%20(8).webp') }}" alt="IMG-PRODUCT" class="img-fluid">
                            </div>
                            <div class=" product-one-name ">
                                <p>
                                    Building

                                </p>

                            </div>
                        </div>
                    </a>
                    </div>
             <div class="item-slick2 p-l-15 p-r-15 text-center catg-block">
                         <a class="" href="product.html">
                        <!-- Block2 -->
                        <div class=" product-one">
                            <div class="">
                                <img src="{{ asset('zimages/0%20(8).webp') }}" alt="IMG-PRODUCT" class="img-fluid">
                            </div>
                            <div class=" product-one-name ">
                                <p>
                                    Dining

                                </p>

                            </div>
                        </div>
                    </a>
                    </div>
             <div class="item-slick2 p-l-15 p-r-15 text-center catg-block">
                         <a class="" href="product.html">
                        <!-- Block2 -->
                        <div class=" product-one">
                            <div class="">
                                <img src="{{ asset('zimages/0%20(8).webp') }}" alt="IMG-PRODUCT" class="img-fluid">
                            </div>
                            <div class=" product-one-name ">
                                <p>
                                    Garden

                                </p>

                            </div>
                        </div>
                    </a>
                    </div>
             <div class="item-slick2 p-l-15 p-r-15 text-center catg-block">
                         <a class="" href="product.html">
                        <!-- Block2 -->
                        <div class=" product-one">
                            <div class="">
                                <img src="{{ asset('zimages/0%20(8).webp') }}" alt="IMG-PRODUCT" class="img-fluid">
                            </div>
                            <div class=" product-one-name ">
                                <p>
                                    Lighting

                                </p>

                            </div>
                        </div>
                    </a>
                    </div>
             <div class="item-slick2 p-l-15 p-r-15 text-center catg-block">
                         <a class="" href="product.html">
                        <!-- Block2 -->
                        <div class=" product-one">
                            <div class="">
                                <img src="{{ asset('zimages/0%20(8).webp') }}" alt="IMG-PRODUCT" class="img-fluid">
                            </div>
                            <div class=" product-one-name ">
                                <p>
                                    Vase

                                </p>

                            </div>
                        </div>
                    </a>
                    </div>
             <div class="item-slick2 p-l-15 p-r-15 text-center catg-block">
                         <a class="" href="product.html">
                        <!-- Block2 -->
                        <div class=" product-one">
                            <div class="">
                                <img src="{{ asset('zimages/0%20(8).webp') }}" alt="IMG-PRODUCT" class="img-fluid">
                            </div>
                            <div class=" product-one-name ">
                                <p>
                                    More

                                </p>

                            </div>
                        </div>
                    </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="newproduct bgwhite p-t-35 p-b-35">
        <div class="container">
            <div class="col-md-12 p-0">
            <h3 class="title-sec"> Discover designs </h3>
            </div>
            <div class="wrap-slick1st">
                <div class="slick1st">
                   <div class="item-slick2 p-l-15 p-r-15 text-center">
                         <a href="product.html">

                        <div class="block-slide " href="product.html">
                            <img src="{{ asset('zimages/5-2.jpg') }}" alt="IMG-PRODUCT" class="mx-auto d-block">

                        <a href="product.html">Furniture </a>
                             </div>
                        </a>
                    </div>
                          <div class="item-slick2 p-l-15 p-r-15 text-center">
                         <a href="product.html">

                        <div class="block-slide " href="product.html">
                            <img src="{{ asset('zimages/22.webp') }}" alt="IMG-PRODUCT" class="mx-auto d-block">

                        <a href="product.html">Furniture </a>
                             </div>
                        </a>
                    </div>
                          <div class="item-slick2 p-l-15 p-r-15 text-center">
                         <a href="product.html">

                        <div class="block-slide " href="product.html">
                            <img src="{{ asset('zimages/0%20(8).webp') }}" alt="IMG-PRODUCT" class="mx-auto d-block">

                        <a href="product.html">Furniture </a>
                             </div>
                        </a>
                    </div>
                          <div class="item-slick2 p-l-15 p-r-15 text-center">
                         <a href="product.html">

                        <div class="block-slide " href="product.html">
                            <img src="{{ asset('zimages/0%20(8).webp') }}" alt="IMG-PRODUCT" class="mx-auto d-block">

                        <a href="product.html">Furniture </a>
                             </div>
                        </a>
                    </div>
                          <div class="item-slick2 p-l-15 p-r-15 text-center">
                         <a href="product.html">

                        <div class="block-slide " href="product.html">
                            <img src="{{ asset('zimages/0%20(8).webp') }}" alt="IMG-PRODUCT" class="mx-auto d-block">

                        <a href="product.html">Furniture </a>
                             </div>
                        </a>
                    </div>
                          <div class="item-slick2 p-l-15 p-r-15 text-center">
                         <a href="product.html">

                        <div class="block-slide " href="product.html">
                            <img src="{{ asset('zimages/0%20(8).webp') }}" alt="IMG-PRODUCT" class="mx-auto d-block">

                        <a href="product.html">Furniture </a>
                             </div>
                        </a>
                    </div>
                          <div class="item-slick2 p-l-15 p-r-15 text-center">
                         <a href="product.html">

                        <div class="block-slide " href="product.html">
                            <img src="{{ asset('zimages/0%20(8).webp') }}" alt="IMG-PRODUCT" class="mx-auto d-block">

                        <a href="product.html">Furniture </a>
                             </div>
                        </a>
                    </div>
                         <div class="item-slick2 p-l-15 p-r-15 text-center">
                         <a href="product.html">

                        <div class="block-slide " href="product.html">
                            <img src="{{ asset('zimages/0%20(8).webp') }}" alt="IMG-PRODUCT" class="mx-auto d-block">

                        <a href="product.html">Furniture </a>
                             </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="banner2 bg5 p-t-35 p-b-35">
        <div class="container">

            <div class="row">
                <div class="col-sm-6 col-md-4  ">
                    <div class="block3"> <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom"> <img src="{{ asset('zimages/1.jpg') }}" alt="IMG-BLOG"> </a>
                        <div class="block3-txt p-t-14">
                            <h4 class="p-b-2"> <a href="blog-detail.html" class="m-text16 cool-link"> Welcome to Zakher Homes Forum! </a></h4>
                            <p class="s-text8 p-t-16"> Now is the time to enable real transformation! See why you should join a #ZakherHomesForum in a city near you!</p> <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4  ">
                    <div class="block3"> <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom pos-relative "> <img src="{{ asset('zimages/5-2.jpg') }}" alt="IMG-BLOG"> </a>
                        <div class="block3-txt p-t-14">
                            <h4 class="p-b-2"> <a href="blog-detail.html" class="m-text16 cool-link"> Making the impossible into reality.</a></h4>
                            <p class="s-text8 p-t-16"> Discover how 7 technology leaders work together to make the impossible into reality.</p> <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4  ">
                    <div class="block3"> <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom"> <img src="{{ asset('zimages/6.jpg') }}" alt="IMG-BLOG"> </a>
                        <div class="block3-txt p-t-14">
                            <h4 class="p-b-2"> <a href="blog-detail.html" class="m-text16 cool-link">We create technologies that drive human progress. </a></h4>
                            <p class="s-text8 p-t-16">
                                Now is the time to enable real transformation!</p> <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <section class="banner2 bgwhite p-t-35 p-b-35">
       <div class="container">
 <div class="row">
     <div class="col-md-6">

<div class="slideshow-container">

<div class="mySlides">
    <div class="row">

        <div class="col-md-12">
             <h4 class="m-b-20 ">  Making the impossible into reality. </h4>
        <p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the  </p>
            <p>   <a class="" href="#"> read more </a></p>

        </div>


        </div>
</div>

<div class="mySlides">
     <div class="row">

        <div class="col-md-12 ">
            <h4 class="m-b-20 ">  Making the impossible into reality. </h4>
        <p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the  </p>
            <p>   <a class="" href="#"> read more </a></p>

        </div>


        </div>
</div>

<div class="mySlides">
    <div class="row">

        <div class="col-md-12 ">
             <h4 class="m-b-20 ">  Making the impossible into reality. </h4>
        <p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not . </p>


        </div>


        </div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
          </div>


       <div class="col-md-6">

        <img class="img-fluid" src="{{ asset('zimages/22.webp') }}" alt="slide" style="height: 450px;">


     </div>

           </div>
</div>
    </section>



    <section class="newproduct bgwhite p-t-35 p-b-35">
        <div class="container">
            <div class="wrap-slick7th">
                <div class="slick7th">
                    <div class="item-slick7th p-l-15 p-r-15">
                        <figure class="block-design block-slide ">
                            <img src="{{ asset('zimages/0%20(14).webp') }}" alt="IMG-PRODUCT">
                            <figcaption>
                                <h3>Small Vase</h3>

                            </figcaption>
                            <a href="product-detail.html"></a>
                        </figure>

                    </div>
                    <div class="item-slick7th p-l-15 p-r-15">
                        <figure class="block-design block-slide ">
                            <img src="{{ asset('zimages/1%20(22).webp') }}" alt="IMG-PRODUCT">
                            <figcaption>
                                <h3>Small Vase</h3>

                            </figcaption>
                            <a href="product-detail.html"></a>
                        </figure>

                    </div>
                    <div class="item-slick7th p-l-15 p-r-15">
                        <figure class="block-design block-slide ">
                            <img src="{{ asset('zimages/0%20(15).webp') }}" alt="IMG-PRODUCT">
                            <figcaption>
                                <h3>Small Vase</h3>

                            </figcaption>
                            <a href="product-detail.html"></a>
                        </figure>

                    </div>
                    <div class="item-slick7th p-l-15 p-r-15">
                        <figure class="block-design block-slide ">
                            <img src="{{ asset('zimages/0%20(16).webp') }}" alt="IMG-PRODUCT">
                            <figcaption>
                                <h3>Small Vase</h3>

                            </figcaption>
                            <a href="product-detail.html"></a>
                        </figure>

                    </div>
                    <div class="item-slick7th p-l-15 p-r-15">
                        <figure class="block-design block-slide ">
                            <img src="{{ asset('zimages/1%20(10).webp') }}" alt="IMG-PRODUCT">
                            <figcaption>
                                <h3>Small Vase</h3>

                            </figcaption>
                            <a href="product-detail.html"></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newproduct bgwhite p-t-35 p-b-35">
        <div class="container">
            <div class="wrap-slick8th">
                <div class="slick8th">
                    <div class="item-slick8th p-l-15 p-r-15">
                        <figure class="block-design block-slide ">
                            <img src="{{ asset('zimages/0%20(21).webp') }}" alt="IMG-PRODUCT">
                            <figcaption>
                                <h3>Small Vase</h3>

                            </figcaption>
                            <a href="product-detail.html"></a>
                        </figure>

                    </div>
                    <div class="item-slick8th p-l-15 p-r-15">
                        <figure class="block-design block-slide ">
                            <img src="{{ asset('zimages/0%20(22).webp') }}" alt="IMG-PRODUCT">
                            <figcaption>
                                <h3>Small Vase</h3>

                            </figcaption>
                            <a href="product-detail.html"></a>
                        </figure>

                    </div>
                    <div class="item-slick8th p-l-15 p-r-15">
                        <figure class="block-design block-slide ">
                            <img src="{{ asset('zimages/0%20(23).webp') }}" alt="IMG-PRODUCT">
                            <figcaption>
                                <h3>Small Vase</h3>

                            </figcaption>
                            <a href="product-detail.html"></a>
                        </figure>


                    </div>
                    <div class="item-slick8th p-l-15 p-r-15">
                        <figure class="block-design block-slide ">
                            <img src="{{ asset('zimages/0%20(24).webp') }}" alt="IMG-PRODUCT">
                            <figcaption>
                                <h3>Small Vase</h3>

                            </figcaption>
                            <a href="product-detail.html"></a>
                        </figure>


                    </div>
                    <div class="item-slick8th p-l-15 p-r-15">
                        <figure class="block-design block-slide ">
                            <img src="{{ asset('zimages/0%20(25).webp') }}" alt="IMG-PRODUCT">
                            <figcaption>
                                <h3>Small Vase</h3>

                            </figcaption>
                            <a href="product-detail.html"></a>
                        </figure>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer class="bg6 p-t-35 p-b-35 p-l-45 p-r-45">
        <div class="container">
            <div class="row p-b-90">
                <div class="col-md-12 text-center">

                </div>
                <div class="col-md-3  col-sm-6 p-t-20 p-l-15 p-r-15 respon3">
                    <h4 class="s-text12 p-b-30"> CONNECT WITH US</h4>
                    <div>
                        <ul class="social-icons top-i icon-circle icon-rotate list-unstyled list-inline">

                            <li> <a href="" target="_blank"> <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span class="footer-icon"> 1-800-934-1571 </span>
                                </a>
                            </li>
                            <li> <a href="" target="_blank"><i class="fa fa-facebook fa-top"></i>
                                    <span class="footer-icon">facebook </span>
                                </a>
                            </li>
                            <li> <a href="#">
                                    <i class="fa fa-twitter fa-top" target="_blank"></i>
                                    <span class="footer-icon">twitter </span>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
                <div class="col-md-3  col-sm-6 p-t-20 p-l-15 p-r-15 respon4">
                    <h4 class="s-text12 p-b-30"> COMPANY</h4>
                    <ul>


                        <li class="p-b-9"> <a href="hwo-to-buy.html" class="s-text7">About us</a></li>
                          <li class="p-b-9"> <a href="hwo-to-buy.html" class="s-text7">Partner with us</a></li>

                    </ul>
                </div>

                <div class="col-md-3 col-sm-6 p-t-20 p-l-15 p-r-15 respon4">
                    <h4 class="s-text12 p-b-30"> GET HELP</h4>
                    <ul>

                        <li class="p-b-9"> <a href="Order.html" class="s-text7"> Your Orders </a></li>


                        <li class="p-b-9"> <a href="contact.html" class="s-text7"> Contact Us </a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 p-t-20 p-l-15 p-r-15 respon4">
                    <h4 class="s-text12 p-b-30"> SHARE YOUR IDEAS</h4>
                    <p class="s-text7 font-16"> Do you have a new idea for us ? </p>
                    <a href="#" class=" s-text7 get-contact font-16">Click here.</a>
                </div>

            </div>
        </div>
    </footer>

    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </span>
    </div>


    <div class="modal  bd-product-modal" tabindex="-1" role="dialog" aria-labelledby="bd-email-modal" aria-hidden="true">
        <div class="modal-dialog size-modal ">
            <div class="modal-content rounded-0 modal-height">
                <div class="modal-header bg5">
                    <h5>
                        Products</h5>
                    <button type="button" class="close ml-auto mr-3 mt-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Product Detail -->
                    <div class="container bgwhite">
                        <div class="row">


                            <div class="col-sm-6 col-md-6 col-lg-3 p-b-25">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/0%20(8).webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Bath</h3>

                                    </figcaption>
                                    <a href="product.html"></a>
                                </figure>
                            </div>


                            <div class="col-sm-6 col-md-6 col-lg-3 p-b-25">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/0%20(2).webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Building</h3>

                                    </figcaption>
                                    <a href="product.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-b-25">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/0%20(2).webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Dining</h3>

                                    </figcaption>
                                    <a href="product2.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-b-25">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/0%20(19).webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Furniture</h3>

                                    </figcaption>
                                    <a href="product.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-b-25">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/0%20(23).webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Garden</h3>

                                    </figcaption>
                                    <a href="product2.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-b-25">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/0%20(13).webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Lighting</h3>

                                    </figcaption>
                                    <a href="product.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-b-25">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/1%20(19).webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>More</h3>

                                    </figcaption>
                                    <a href="product.html"></a>
                                </figure>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-3 p-b-25">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/4.webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Treasury</h3>

                                    </figcaption>
                                    <a href="product2.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-b-25">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/1%20(22).webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Vase</h3>

                                    </figcaption>
                                    <a href="product.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-b-25">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/1%20(21).webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Carving</h3>

                                    </figcaption>
                                    <a href="product.html"></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="modal  bd-Designs-modal" tabindex="-1" role="dialog" aria-labelledby="bd-email-modal" aria-hidden="true">
        <div class="modal-dialog size-modal lg-modal">
            <div class="modal-content rounded-0 modal-height">
                <div class="modal-header bg5">
                    <h5>
                        Designs</h5>
                    <button type="button" class="close ml-auto mr-3 mt-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- Product Detail -->
                    <div class="container bgwhite">
                        <div class="row">

                            <!--
                 <div class="col-sm-4 col-md-3 col-lg-4 col-6 p-b-25 catg-block">
                     <a class="" href="design.html">

                         <div class=" product-one">

                             <img src="images/08.webp" alt="IMG-PRODUCT" class="img-fluid" style="position: relative">


                             <p style=" position: absolute;    top: 92px;
    left: 66px;
    color: white;

    font-size: 20px;">
                                 Balcony
                             </p>


                         </div>
                     </a>
                 </div>
-->



                            <div class="col-sm-6 col-md-6 col-lg-3 p-8 ">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/11.webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Balcony</h3>

                                    </figcaption>
                                    <a href="design.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-8">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/11.webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Ceiling</h3>

                                    </figcaption>
                                    <a href="design.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-8">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/11.webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Decor</h3>

                                    </figcaption>
                                    <a href="room-detail.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-8">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/11.webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Dining</h3>

                                    </figcaption>
                                    <a href="room-detail.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-8">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/11.webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Fasad</h3>

                                    </figcaption>
                                    <a href="room-detail.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-8">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/11.webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Floor</h3>

                                    </figcaption>
                                    <a href="room-detail.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-8">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/11.webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Furniture</h3>

                                    </figcaption>
                                    <a href="room-detail.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-8">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/11.webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Garden</h3>

                                    </figcaption>
                                    <a href="room-detail.html"></a>
                                </figure>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 p-8">
                                <figure class="block-design deign-modal">
                                    <img src="{{ asset('zimages/11.webp') }}" alt="IMG-PRODUCT" class="img-fluid" />
                                    <figcaption>
                                        <h3>Lighting</h3>

                                    </figcaption>
                                    <a href="room-detail.html"></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>
    <script type="text/javascript" src="{{ asset('zvendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ secure_asset('zvendor/animsition/js/animsition.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('zvendor/bootstrap/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{ asset('zvendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('zvendor/select2/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <script type="text/javascript" src="{{ asset('zvendor/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('zjs/slick-custom.js')}}"></script>
    <script type="text/javascript" src="{{ asset('zvendor/countdowntime/countdowntime.js')}}"></script>
    <script type="text/javascript" src="{{ asset('zvendor/lightbox2/js/lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('zvendor/sweetalert/sweetalert.min.js')}}"></script>
    <script type="text/javascript">
        $('.block2-btn-addcart').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to cart !", "success");
            });
        });
        $('.block2-btn-addwishlist').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");
            });
        });
    </script>
    <script src="{{ asset('zjs/main.js')}}"></script>
    <script src="{{ asset('zjs/homeSliders.js')}}"></script>
    <script>
        $(document).ready(function() {
            function alignModal() {
                var modalDialog = $(this).find(".modal-dialog");

                // Applying the top margin on modal dialog to align it vertically center
                modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
            }
            // Align modal when it is displayed
            $(".modal").on("shown.bs.modal", alignModal);


        });
    </script>
    <!--    -->
    <script>
        $(".zoomWrapper img").click(function() {
            $(this).toggleClass("flasher");
        });
    </script>

    <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>


</body>

</html>

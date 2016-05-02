<?php

/**
 * 网站首页公共的部分
 */

?>

<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title><?php echo $this->_seoTitle?></title>
    <meta name="generator" content="LNCCMS CMS" />
    <meta name="author" content="nongcheng li" />
    <meta name="keywords" content="<?php echo $this->_seoKeywords?>">
    <meta name="description" content="<?php echo $this->_seoDescription?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- GENERAL CSS FILES -->
    <link rel="stylesheet" href="<?php echo $this->_theme->baseUrl?>/html/css/minified.css">
    <!-- // GENERAL CSS FILES -->

    <!--[if IE 8]>
    <script src="<?php echo $this->_theme->baseUrl?>/html/js/respond.min.js"></script>
    <script src="<?php echo $this->_theme->baseUrl?>/html/js/selectivizr-min.js"></script>
    <![endif]-->
    <!--
    jqery 暂时使用百度
    -->
    <script src="<?php echo $this->_theme->baseUrl?>/html/js/jquery.min.js"></script>
    <script src="<?php echo $this->_theme->baseUrl?>/html/js/modernizr.min.js"></script>
    <!-- PARTICULAR PAGES CSS FILES -->
    <link rel="stylesheet" href="<?php echo $this->_theme->baseUrl?>/html/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $this->_theme->baseUrl?>/html/css/owl.theme.css">
    <link href="<?php echo $this->_theme->baseUrl?>/html/css/flexslider.css" rel="stylesheet" />
    <!-- // PARTICULAR PAGES CSS FILES -->
    <link rel="stylesheet" href="<?php echo $this->_theme->baseUrl?>/html/css/responsive.css">
</head>
<body class="home">

<!-- PAGE WRAPPER -->
<div id="page-wrapper">

    <!-- SITE HEADER -->
    <header id="site-header" role="banner">
        <!-- HEADER TOP -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-7">
                        <!-- CONTACT INFO -->
                        <div class="contact-info">
                            <i class="iconfont-headphones round-icon"></i>
                            <strong>+444 (100) 1234</strong>
                            <span>(Mon- Fri: 09.00 - 21.00)</span>
                        </div>
                        <!-- // CONTACT INFO -->
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-5">
                        <ul class="actions unstyled clearfix">
                            <li>
                                <!-- SEARCH BOX -->
                                <div class="search-box">
                                    <form action="#" method="post">
                                        <div class="input-iconed prepend">
                                            <button class="input-icon"><i class="iconfont-search"></i></button>
                                            <label for="input-search" class="placeholder">Search here…</label>
                                            <input type="text" name="q" id="input-search" class="round-input full-width" required />
                                        </div>
                                    </form>
                                </div>
                                <!-- // SEARCH BOX -->
                            </li>
                            <li data-toggle="sub-header" data-target="#sub-social">
                                <!-- SOCIAL ICONS -->
                                <a href="javascript:void(0);" id="social-icons">
                                    <i class="iconfont-share round-icon"></i>
                                </a>

                                <div id="sub-social" class="sub-header">
                                    <ul class="social-list unstyled text-center">
                                        <li><a href="#"><i class="iconfont-facebook round-icon"></i></a></li>
                                        <li><a href="#"><i class="iconfont-twitter round-icon"></i></a></li>
                                        <li><a href="#"><i class="iconfont-google-plus round-icon"></i></a></li>
                                        <li><a href="#"><i class="iconfont-pinterest round-icon"></i></a></li>
                                        <li><a href="#"><i class="iconfont-rss round-icon"></i></a></li>
                                    </ul>
                                </div>
                                <!-- // SOCIAL ICONS -->
                            </li>
                            <li data-toggle="sub-header" data-target="#sub-cart">
                                <!-- SHOPPING CART -->
                                <a href="javascript:void(0);" id="total-cart">
                                    <i class="iconfont-shopping-cart round-icon"></i>
                                </a>

                                <div id="sub-cart" class="sub-header">
                                    <div class="cart-header">
                                        <span>Your cart is currently empty.</span>
                                        <small><a href="cart.html">(See All)</a></small>
                                    </div>
                                    <ul class="cart-items product-medialist unstyled clearfix"></ul>
                                    <div class="cart-footer">
                                        <div class="cart-total clearfix">
                                            <span class="pull-left uppercase">Total</span>
                                            <span class="pull-right total">$ 0</span>
                                        </div>
                                        <div class="text-right">
                                            <a href="cart.html" class="btn btn-default btn-round view-cart">View Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- // SHOPPING CART -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ADD TO CART MESSAGE -->
            <div class="cart-notification">
                <ul class="unstyled"></ul>
            </div>
            <!-- // ADD TO CART MESSAGE -->
        </div>
        <!-- // HEADER TOP -->
        <!-- MAIN HEADER -->
        <div class="main-header-wrapper">
            <div class="container">
                <div class="main-header">
                    <!-- SITE LOGO -->
                    <div class="logo-wrapper">
                        <a href="index-2.html" class="logo" title="GFashion - Responsive e-commerce HTML Template">
                            <img src="<?php echo $this->_theme->baseUrl?>/html/img/logo.png" alt="GFashion - Responsive e-commerce HTML Template" />
                        </a>
                    </div>
                    <!-- // SITE LOGO -->
                    <!-- SITE NAVIGATION MENU -->
                    <nav id="site-menu" role="navigation">
                        <ul class="main-menu hidden-sm hidden-xs">
                            <li class="active">
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Women</a>
                            </li>
                            <li>
                                <a href="#">Men</a>

                                <!-- MEGA MENU -->
                                <div class="mega-menu" data-col-lg="9" data-col-md="12">
                                    <div class="row">

                                        <div class="col-md-3">
                                            <h4 class="menu-title">Clothing</h4>
                                            <ul class="mega-sub">
                                                <li><a href="products.html">Casual Wear</a></li>
                                                <li><a href="products.html">Evening Wear</a></li>
                                                <li><a href="products.html">Formal Attire</a></li>
                                                <li><a href="products.html">Womens Jeans</a></li>
                                                <li><a href="products.html">Mens Jeans</a></li>
                                                <li><a href="products.html">Fall Styles</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-3">
                                            <h4 class="menu-title">Accessories</h4>
                                            <ul class="mega-sub">
                                                <li><a href="products.html">Casual Wear</a></li>
                                                <li><a href="products.html">Evening Wear</a></li>
                                                <li><a href="products.html">Formal Attire</a></li>
                                                <li><a href="products.html">Womens Jeans</a></li>
                                                <li><a href="products.html">Mens Jeans</a></li>
                                                <li><a href="products.html">Fall Styles</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-3">
                                            <h4 class="menu-title">Brands</h4>
                                            <ul class="mega-sub">
                                                <li><a href="products.html">Casual Wear</a></li>
                                                <li><a href="products.html">Evening Wear</a></li>
                                                <li><a href="products.html">Formal Attire</a></li>
                                                <li><a href="products.html">Womens Jeans</a></li>
                                                <li><a href="products.html">Mens Jeans</a></li>
                                                <li><a href="products.html">Fall Styles</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="carousel slide m-b" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src="images/men/slide1.jpg" alt="" />
                                                    </div>
                                                    <div class="item">
                                                        <img src="images/men/slide2.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="text-semibold uppercase m-b-sm">Featured Products - shared on weidea.net</h5>
                                            <p>Lorem ipsum dolor sit, consectetur adipiscing elit. Etiam neque velit, blandit sed scelerisque.</p>
                                            <a href="products.html" class="btn btn-default btn-round">Go to Shop →</a>
                                        </div>

                                    </div>
                                </div>
                                <!-- // MEGA MENU -->

                            </li>
                            <li>
                                <a href="components.html">Components</a>
                            </li>
                            <li>
                                <a href="store-locator.html">Store Locator</a>
                            </li>
                            <li>
                                <a href="contact-us.html">Contact Us</a>
                            </li>
                            <li>
                                <a href="#">Buy Me!</a>
                            </li>
                        </ul>

                        <!-- MOBILE MENU -->
                        <div id="mobile-menu" class="dl-menuwrapper visible-xs visible-sm">
                            <button class="dl-trigger"><i class="iconfont-reorder round-icon"></i></button>
                            <ul class="dl-menu">
                                <li class="active">
                                    <a href="javsacript:void(0);">Home</a>
                                </li>
                                <li>
                                    <a href="javsacript:void(0);">Women</a>
                                </li>
                                <li>
                                    <a href="javsacript:void(0);">Men</a>

                                    <ul class="dl-submenu">
                                        <li>
                                            <a href="products.html">Clothing</a>
                                            <ul class="dl-submenu">
                                                <li><a href="products.html">Casual Wear</a></li>
                                                <li><a href="products.html">Evening Wear</a></li>
                                                <li><a href="products.html">Formal Attire</a></li>
                                                <li><a href="products.html">Womens Jeans</a></li>
                                                <li><a href="products.html">Mens Jeans</a></li>
                                                <li><a href="products.html">Fall Styles</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="products.html">Accessories</a>
                                            <ul class="dl-submenu">
                                                <li><a href="products.html">Casual Wear</a></li>
                                                <li><a href="products.html">Evening Wear</a></li>
                                                <li><a href="products.html">Formal Attire</a></li>
                                                <li><a href="products.html">Womens Jeans</a></li>
                                                <li><a href="products.html">Mens Jeans</a></li>
                                                <li><a href="products.html">Fall Styles</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="products.html">Brands</a>
                                            <ul class="dl-submenu">
                                                <li><a href="products.html">Casual Wear</a></li>
                                                <li><a href="products.html">Evening Wear</a></li>
                                                <li><a href="products.html">Formal Attire</a></li>
                                                <li><a href="products.html">Womens Jeans</a></li>
                                                <li><a href="products.html">Mens Jeans</a></li>
                                                <li><a href="products.html">Fall Styles</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- // MOBILE MENU -->

                    </nav>
                    <!-- // SITE NAVIGATION MENU -->
                </div>
            </div>
        </div>
        <!-- // MAIN HEADER -->
    </header>
    <!-- // SITE HEADER -->

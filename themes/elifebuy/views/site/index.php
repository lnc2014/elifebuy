<?php
/**
 * Author:LNC
 * Description: 网站首页
 * Date: 2016/4/29 0029
 * Time: 下午 2:39
 */
$this->renderPartial('/common/header');
$this->renderPartial('/common/banners',array('banners' => $banners));
?>

<!-- SITE MAIN CONTENT -->
<main id="main-content" role="main">

    <!-- PROMO BOXES -->
    <section class="section promos">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="promo accent-background first-child first-row animated" data-animation="fadeInLeft">
                        <div class="inner text-center">
                            <h1 class="uppercase text-semibold">
                                <a href="#">
                                    <span class="inverse-color">Sale</span> Up to 35% <span class="inverse-color">OFF</span>
                                </a>
                            </h1>
                            <h5 class="uppercase">Summer collection 2013</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="promo inverse-background first-row animated" data-animation="fadeInDown" style="background: url('<?php echo $this->_theme->baseUrl?>/html/images/demo/P2200214.jpg') no-repeat; background-size: 100%;">
                        <div class="inner text-center np">
                            <div class="ribbon">
                                <h6 class="nmb">New Arrivals</h6>
                                <h5 class="text-semibold uppercase nmb">Leather Fashion</h5>
                                <div class="space10"></div>
                                <a href="products.html" class="with-icon prepend-icon"><i class="iconfont-caret-right"></i><span> Shop Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="promo inverse-background first-row animated" data-animation="fadeInRight">
                        <div class="inner text-center">
                            <h1 class="uppercase text-bold">
                                <a href="#">
                                    Free <span class="inverse-color">Shipping</span>
                                </a>
                            </h1>
                            <h5 class="uppercase">On oder over $2,000</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- // PROMO BOXES -->

    <!-- FEATURED PRODUCTS -->
    <section class="section featured visible-items-4">
        <div class="container">
            <div class="row">
                <header class="section-header clearfix col-sm-offset-3 col-sm-6">
                    <h3 class="section-title">分类的名字</h3>
                    <p class="section-teaser">分类的简介</p>
                </header>

                <div class="clearfix"></div>

                <!-- BEGIN CAROUSEL -->
                <div id="featured-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">

                    <div class="owl-controls clickable top">
                        <div class="owl-buttons">
                            <div class="owl-prev"><i class="iconfont-angle-left"></i></div>
                            <div class="owl-next"><i class="iconfont-angle-right"></i></div>
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme" data-visible-items="4" data-navigation="true" data-lazyload="true">
<!--                        产品-->
                        <div class="product" data-product-id="1">
                            <div class="entry-media">
                                <img data-src="images/women/basic/848051-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <div class="circle ribbon ribbon-sale">Sale</div>
                                        </li>
                                        <li>
                                            <a href="images/women/basic/848051-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="4.5" step="0.5" id="backing1" />
                                        <div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <s class="entry-discount">$ 350.00</s>
                                    <strong class="accent-color price">$ 250.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="2">
                            <div class="entry-media">
                                <img data-src="images/women/basic/688086-0286_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <a href="images/women/basic/688086-0286_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="4" step="0.5" id="backing2" />
                                        <div class="rateit" data-rateit-backingfld="#backing2" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 350.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="3">
                            <div class="entry-media">
                                <img data-src="images/women/basic/848099-0067_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <div class="circle ribbon ribbon-new">New</div>
                                        </li>
                                        <li>
                                            <a href="images/women/basic/848099-0067_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="3.5" step="0.5" id="backing3" />
                                        <div class="rateit" data-rateit-backingfld="#backing3" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 450.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="4">
                            <div class="entry-media">
                                <img data-src="images/women/basic/589550-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <a href="images/women/basic/589550-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="5" step="0.5" id="backing4" />
                                        <div class="rateit" data-rateit-backingfld="#backing4" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 350.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="5">
                            <div class="entry-media">
                                <img data-src="images/women/legging/104331-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <div class="circle ribbon ribbon-sale">Sale</div>
                                        </li>
                                        <li>
                                            <a href="images/women/legging/104331-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="4.5" step="0.5" id="backing5" />
                                        <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <s class="entry-discount">$ 350.00</s>
                                    <strong class="accent-color price">$ 250.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="6">
                            <div class="entry-media">
                                <img data-src="images/women/legging/714384-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <a href="images/women/legging/714384-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="4" step="0.5" id="backing6" />
                                        <div class="rateit" data-rateit-backingfld="#backing6" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 350.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="7">
                            <div class="entry-media">
                                <img data-src="images/women/dress/256479-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <div class="circle ribbon ribbon-new">New</div>
                                        </li>
                                        <li>
                                            <a href="images/women/dress/256479-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="3.5" step="0.5" id="backing7" />
                                        <div class="rateit" data-rateit-backingfld="#backing7" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 450.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="8">
                            <div class="entry-media">
                                <img data-src="images/women/dress/278638-0083_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <a href="images/women/dress/278638-0083_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="5" step="0.5" id="backing8" />
                                        <div class="rateit" data-rateit-backingfld="#backing8" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 350.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- // END CAROUSEL -->

            </div>
        </div>
    </section>
    <!-- // FEATURED PRODUCTS -->

    <!-- NEW ARRIVAL PRODUCTS -->
    <section class="section new-arrivals visible-items-5">
        <div class="container">
            <div class="row">
                <header class="section-header clearfix col-sm-offset-3 col-sm-6">
                    <h3 class="section-title">New arrivals</h3>
                    <p class="section-teaser">Lorem ipsum dolor sit amet, consectetur adipiscing elit ac lobortis lacus</p>
                </header>

                <div class="clearfix"></div>

                <!-- BEGIN CAROUSEL -->
                <div id="new-arrivals-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">

                    <div class="owl-controls clickable outside">
                        <div class="owl-buttons">
                            <div class="owl-prev"><i class="iconfont-angle-left"></i></div>
                            <div class="owl-next"><i class="iconfont-angle-right"></i></div>
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme" data-visible-items="5" data-navigation="true" data-lazyload="true">
                        <div class="product" data-product-id="9">
                            <div class="entry-media">
                                <img data-src="images/men/jacket/271865-0286_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <div class="circle ribbon ribbon-sale">Sale</div>
                                        </li>
                                        <li>
                                            <a href="images/men/jacket/271865-0286_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="4.5" step="0.5" id="backing9" />
                                        <div class="rateit" data-rateit-backingfld="#backing9" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <s class="entry-discount">$ 350.00</s>
                                    <strong class="accent-color price">$ 250.00</strong>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="10">
                            <div class="entry-media">
                                <img data-src="images/men/jacket/634082-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <a href="images/men/jacket/634082-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="4" step="0.5" id="backing10" />
                                        <div class="rateit" data-rateit-backingfld="#backing10" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 350.00</strong>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="11">
                            <div class="entry-media">
                                <img data-src="images/men/jacket/217365-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <div class="circle ribbon ribbon-new">New</div>
                                        </li>
                                        <li>
                                            <a href="images/men/jacket/217365-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="3.5" step="0.5" id="backing11" />
                                        <div class="rateit" data-rateit-backingfld="#backing11" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 450.00</strong>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="12">
                            <div class="entry-media">
                                <img data-src="images/men/blazer/105797-1056_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <a href="images/men/blazer/105797-1056_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="5" step="0.5" id="backing12" />
                                        <div class="rateit" data-rateit-backingfld="#backing12" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 350.00</strong>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="13">
                            <div class="entry-media">
                                <img data-src="images/men/jumper/271866-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <div class="circle ribbon ribbon-sale">Sale</div>
                                        </li>
                                        <li>
                                            <a href="images/men/jumper/271866-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="4.5" step="0.5" id="backing13" />
                                        <div class="rateit" data-rateit-backingfld="#backing13" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <s class="entry-discount">$ 350.00</s>
                                    <strong class="accent-color price">$ 250.00</strong>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="14">
                            <div class="entry-media">
                                <img data-src="images/men/shirt/803500-6989_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <a href="images/men/shirt/803500-6989_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="4" step="0.5" id="backing14" />
                                        <div class="rateit" data-rateit-backingfld="#backing14" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 350.00</strong>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="15">
                            <div class="entry-media">
                                <img data-src="images/men/shirt/217360-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <div class="circle ribbon ribbon-new">New</div>
                                        </li>
                                        <li>
                                            <a href="images/men/shirt/217360-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="3.5" step="0.5" id="backing15" />
                                        <div class="rateit" data-rateit-backingfld="#backing15" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 450.00</strong>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="16">
                            <div class="entry-media">
                                <img data-src="images/men/accessories/000095-0014_2_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <a href="images/men/accessories/000095-0014_2.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="5" step="0.5" id="backing16" />
                                        <div class="rateit" data-rateit-backingfld="#backing16" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 350.00</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- // END CAROUSEL -->

            </div>
        </div>
    </section>
    <!-- // NEW ARRIVAL PRODUCTS -->
    <section class="section featured visible-items-4">
        <div class="container">
            <div class="row">
                <header class="section-header clearfix col-sm-offset-3 col-sm-6">
                    <h3 class="section-title">分类的名字</h3>
                    <p class="section-teaser">分类的简介</p>
                </header>

                <div class="clearfix"></div>

                <!-- BEGIN CAROUSEL -->
                <div id="featured-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">

                    <div class="owl-controls clickable top">
                        <div class="owl-buttons">
                            <div class="owl-prev"><i class="iconfont-angle-left"></i></div>
                            <div class="owl-next"><i class="iconfont-angle-right"></i></div>
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme" data-visible-items="4" data-navigation="true" data-lazyload="true">
                        <!--                        产品-->
                        <div class="product" data-product-id="1">
                            <div class="entry-media">
                                <img data-src="images/women/basic/848051-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <div class="circle ribbon ribbon-sale">Sale</div>
                                        </li>
                                        <li>
                                            <a href="images/women/basic/848051-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="4.5" step="0.5" id="backing1" />
                                        <div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <s class="entry-discount">$ 350.00</s>
                                    <strong class="accent-color price">$ 250.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="2">
                            <div class="entry-media">
                                <img data-src="images/women/basic/688086-0286_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <a href="images/women/basic/688086-0286_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="4" step="0.5" id="backing2" />
                                        <div class="rateit" data-rateit-backingfld="#backing2" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 350.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="3">
                            <div class="entry-media">
                                <img data-src="images/women/basic/848099-0067_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <div class="circle ribbon ribbon-new">New</div>
                                        </li>
                                        <li>
                                            <a href="images/women/basic/848099-0067_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="3.5" step="0.5" id="backing3" />
                                        <div class="rateit" data-rateit-backingfld="#backing3" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 450.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="4">
                            <div class="entry-media">
                                <img data-src="images/women/basic/589550-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <a href="images/women/basic/589550-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="5" step="0.5" id="backing4" />
                                        <div class="rateit" data-rateit-backingfld="#backing4" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 350.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="5">
                            <div class="entry-media">
                                <img data-src="images/women/legging/104331-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <div class="circle ribbon ribbon-sale">Sale</div>
                                        </li>
                                        <li>
                                            <a href="images/women/legging/104331-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="4.5" step="0.5" id="backing5" />
                                        <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <s class="entry-discount">$ 350.00</s>
                                    <strong class="accent-color price">$ 250.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="6">
                            <div class="entry-media">
                                <img data-src="images/women/legging/714384-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <a href="images/women/legging/714384-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="4" step="0.5" id="backing6" />
                                        <div class="rateit" data-rateit-backingfld="#backing6" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 350.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="7">
                            <div class="entry-media">
                                <img data-src="images/women/dress/256479-0014_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <div class="circle ribbon ribbon-new">New</div>
                                        </li>
                                        <li>
                                            <a href="images/women/dress/256479-0014_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="3.5" step="0.5" id="backing7" />
                                        <div class="rateit" data-rateit-backingfld="#backing7" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 450.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                        <div class="product" data-product-id="8">
                            <div class="entry-media">
                                <img data-src="images/women/dress/278638-0083_1_t.jpg" alt="" class="lazyOwl thumb" />
                                <div class="hover">
                                    <a href="product.html" class="entry-url"></a>
                                    <ul class="icons unstyled">
                                        <li>
                                            <a href="images/women/dress/278638-0083_1.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                    <div class="rate-bar">
                                        <input type="range" value="5" step="0.5" id="backing8" />
                                        <div class="rateit" data-rateit-backingfld="#backing8" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-main">
                                <h5 class="entry-title">
                                    <a href="#">Inceptos orci hac libero</a>
                                </h5>
                                <div class="entry-price">
                                    <strong class="price">$ 350.00</strong>
                                </div>
                                <div class="entry-links clearfix">
                                    <a href="#" class="pull-left m-r">+ Add to Wishlist</a>
                                    <a href="#" class="pull-right">+ Add to Compare</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- // END CAROUSEL -->

            </div>
        </div>
    </section>
    <!-- // FEATURED PRODUCTS -->

</main>
<!-- // SITE MAIN CONTENT -->

<?php
$this->renderPartial('/common/footer');
?>



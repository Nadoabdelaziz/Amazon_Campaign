<?php

include 'head.php';

include('simple_html_dom.php');

$parm='air+fryer&sprefix=air%2Caps%2C199&ref=nb_sb_ss_ts-doa-p_2_3';

$html=file_get_html('https://www.amazon.com/s?k='.$parm);

$results=$html->find('div.s-result-item',3);

$products = array(array());

$products_img = array(array());
$products_prices = array();



for ($i=0; $i < 9 ; $i++) { 
    $results=$html->find('div.s-result-item',$i+3);
    for ($j=0; $j < 5; $j++) { 
        $products[$i][$j]= $results->find('a.s-underline-text',$j);
        $products_img[$i][$j]= $results->find('div.s-product-image-container',$j);

        # code...
    }
}
// var_dump($products[0][2]->innertext);

?>



<body class="page-template page-template-page-templates page-template-template-chat-table-switcher page-template-page-templatestemplate-chat-table-switcher-php page page-id-2639 wp-custom-logo wp-embed-responsive">

    <div class="site" id="page">
        <!-- ******************* The Navbar Area ******************* -->
        <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
            <a class="skip-link sr-only sr-only-focusable" href="#content">Skip to content</a>
            <div class="container">
                <div class="row">
                    <div class="col-8 col-lg-3 header-left">
                        <!-- Your site title as branding in the menu -->
                        <a href="index.html" class="navbar-brand custom-logo-link" rel="home"><img src="wp-content/uploads/images/comparewarrior.png" style="margin-top:10px" class="img-fluid" alt="Wealth Advisor PPC" /></a><!-- end custom logo -->
                    </div>
                    <div class="col-4 col-lg-9 header-right">
                        <div class="header-right-icons text-right">
                            <aside id="media_image-2" class="widget widget_media_image"><img width="1" height="1" src="wp-content/uploads/2019/02/SSL.svg" class="image wp-image-76  attachment-medium size-medium" alt="" style="max-width: 100%; height: auto;" /></aside>
                        </div>
                    </div>
                </div>
            </div><!-- .container -->
        </div><!-- #wrapper-navbar end -->
        <style>
            footer#colophon { /* display: none;*/
            }

            .home-review .banner-inner {
                padding-bottom: 0px !important;
            }

            .home-banner.home-review {
                height: 1000px;
            }
        </style>
        <section class="home-banner " style="background: url('wp-content/uploads/2020/03/banner-img.jpg');">
            <div class="custom-container">
                <div class="banner-inner">
                    <h2>Top 10 Best Air Fryers Of 2022</h2>
                </div>
            </div>
        </section>
        <section class="content-section 2639">
            <div class="custom-container">
                <div class="content-inner">
                    <div class="top-content">
                        <h3> We Did The Hard Work. Do You Don't Have To</h3>
                        <p>
                            Join the millions that have trusted CompareWarrior.com to help them make smarter buying decisions. Let our independent expert reviews and data-driven shopping recommendations help you find the air purifier that's right for you.
                        </p>
                    </div>


                    <div class="table-outer second_table">
                        <div class="top-bond-inner-plugin five_column">
                            <div class="best_onli_psyc_sec_plugin"></div>
                            <div id="comparision_table_up_plugin" class="compar_tbl_sec_up">
                                <div class="compar_tbl_body_plugin">

                                    <?php
                                    // for ($i=0; $i <10 ; $i++) { 
                                        # code...
                                    ?>
                                    <!-- 1st -->
                                    <?php for ($i=0; $i < count($products); $i++) { 
                                                        # code...
                                                     ?>
                                    <div class="compar_tbl_row_plugin" id="zonguru">
                                        <div class="compar_tbl_website_img_sec_plugin">
                                            <div class="images-out-plugin">
                                                <?= $products_img[$i][0] ?>
                                        </div>
                                        </div>
                                        <div class="user_features_box_plugin">
                                            <p style="text-align:left">

                                                <ul>

                                                    
                                                    <li>
                                                        <?= $products[$i][0]->innertext ?>
                                                    </li>
                                                  

                                                    

                                                    <li>
                                                        COSORI
                                                    </li>

                                                </ul>
                                        </div>
                                        <div class="user_features_box2">
                                            <span><samp>9.6</samp></span>
                                            <div class="stars_plugin"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
                                            <p style="font-size:19px;font-weight:700;margin-top:10px;color:#111 !important">
                                                Excellent
                                            </p>
                                            <p style="font-size:14px;font-weight:700">
                                                20,214 Purchases
                                            </p>
                                        </div>
                                        <div class="chat_now_box_plugin">
                                            <a class="btn-style" title="" id="adword_url_sid" href="" target="_blank">
                                                View Product
                                            </a>


                                            <a id="adword_url_sid" href="" style="margin-top:10px;font-size:16px;" class="small_text" target="_blank">
                                                Buy it on Amazon
                                            </a>

                                        </div>
                                    </div>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                        <script>
                            jQuery(document).ready(function () {
                                jQuery(".chat_now_box_plugin .customlink").click(function () {
                                    var data_url = jQuery(this).attr("data-url");
                                    gtag_report_conversion(data_url);
                                });
                            });
                        </script>
                    </div>
                    <div class="top-content op-content3">
                        <h3>How The Products are Rated</h3>
                        <p>Our recommendations are based on expert comparisons between available products in each product category. For air purifiers, we chose the topics that we think matter most to our users, and provide consise, clear comparisons of the features that matter. Our rankings change day-to-day based on our proprietary algorithms, that crunch data to identify top-performing products and tailor recommendations to exactly what our readers are looking for.</p>
                        <p>"Amazon, Amazon Prime, the Amazon logo and Amazon Prime logo are trademarks of Amazon.com, Inc. or its affiliates".</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- ******************* The Footer Full-width Widget Area ******************* -->
        <div class="wrapper" id="wrapper-footer-full">
            <div class="custom-container">
                <div class="content-inner">
                    <div id="nav_menu-2" class="footer-widget ">
                        <div class="menu-footer-menu-container">
                            <ul id="menu-footer-menu" class="menu">
                                <li id="menu-item-8085" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8085"><a href="https://comparewarrior.com/#about">About</a></li>
                                <li id="menu-item-8082" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-8082"><a href="https://comparewarrior.com/privacy.html">Privacy Policy</a></li>
                                <li id="menu-item-8185" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8185"><a href="https://comparewarrior.com/#contact">Contact Us</a></li>
                                <li id="menu-item-8185" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8185"><a href="https://comparewarrior.com/advertising-disclosure">Advertising Disclosure</a></li>
                            </ul>
                        </div>
                    </div><!-- .footer-widget --><div id="text-3" class="footer-widget ">
                        <div class="textwidget">
                            <p></p>
                        </div>
                    </div><!-- .footer-widget --><div id="text-2" class="footer-widget ">

                    </div><!-- .footer-widget -->
                </div>
            </div>
        </div><!-- #wrapper-footer-full -->
    </div><!-- #page we need this extra closing tag here -->






</body>
</html>

<script>
    
    var urls=document.getElementsByClassName("a-link-normal s-underline-text s-underline-link-text s-link-style a-text-normal");
    
    for (var i = 0; i < urls.length; i++) {
        var x = urls[i].href;
        var str = urls[i].href.replace("http://localhost:8080","https://www.amazon.com");
        var content = urls[i].textContent = "Available At Amazon";
        urls[i].href = str;

    }

    
</script>

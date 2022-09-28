

@include('partials.head');

@include('partials.simple_html_dom');


<?php

if(isset($cat)){
    $parm=$cat->description;
    $html=file_get_html('https://www.amazon.com/'.$parm);
}

else{
    $html=file_get_html('https://www.amazon.com/s?k=air%20fryer&ref=glow_cls&refresh=1&sprefix=air%2Caps%2C199');

}
// $parm=$cat->description;


$results=$html->find('div.s-result-item',3);

$products = array(array());

$products_img = array(array());
$products_links = array(array());
$products_prices= array(array());

$products_ratings=array(array());

$products_numbers = array(array());

$colors =array(array());


for ($i=0; $i < 4 ; $i++) { 
    $results=$html->find('div.s-result-item',$i+3);
    for ($j=0; $j < 5; $j++) { 
        $products[$i][$j]= $results->find('a.s-underline-text',$j);
        $products_img[$i][$j]= $results->find('div.s-product-image-container',$j);
        $products_links[$i][$j]= $results->find('h2.a-size-mini',$j);
        $products_prices[$i][$j]= $results->find('span.a-offscreen',$j);
        $products_ratings[$i][$j]= $results->find('a.a-popover-trigger',$j); 
        $products_numbers[$i][$j] =$results->find('span.a-size-base',$j); 
        $colors[$i][$j] = $results->find('div.a-spacing-top-mini',$j); 

        # code...
    }
}


for ($i=4; $i < 5 ; $i++) { 
    $results=$html->find('div.s-result-item',$i+4);
    for ($j=0; $j < 5; $j++) { 
        $products[$i][$j]= $results->find('a.s-underline-text',$j);
        $products_img[$i][$j]= $results->find('div.s-product-image-container',$j);
        $products_links[$i][$j]= $results->find('h2.a-size-mini',$j);
        $products_prices[$i][$j]= $results->find('span.a-offscreen',$j);

        $products_ratings[$i][$j]= $results->find('a.a-popover-trigger',$j); 
        $products_numbers[$i][$j] =$results->find('span.a-size-base',$j); 
        $colors[$i][$j] = $results->find('div.a-spacing-top-mini',$j); 

        # code...
    }
}

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
            span.a-size-base.s-underline-text{
                display: initial;
            }
            span.a-size-base.a-color-secondary{
                display:block;
            }
            a.a-link-normal.s-underline-text.s-underline-link-text.s-link-style.a-text-normal.btn-style{
                font-size:x-large;
            }
        </style>

        <section class="home-banner " style="background: url('wp-content/uploads/2020/03/banner-img.jpg');">
            <div class="custom-container">
                <div class="banner-inner">
                    <h2 style="color:black">Top 10 Best {{$cat->name}} Of 2022</h2>
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
                                            

                                                
                                            <?php
                                            if(isset($colors[$i][0])){
                                            ?>
                                                <li>
                                                    <?= $colors[$i][0] ?>
                                                </li>
                                            <?php
                                            }       
                                                ?>    

                                            </ul>
                                    </div>
                                    <div class="user_features_box2">
                                        <span style="font-size: revert;"><samp><?= $products_ratings[$i][0] ?></samp></span>
                                        <div class="stars_plugin"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
                                        <p style="font-size:19px;font-weight:700;margin-top:10px;color:#111 !important">
                                            <?= $products_prices[$i][0] ?>
                                        </p>
                                        <p style="font-size:14px;font-weight:700">
                                        <?= $products_numbers[$i][0] ?> Purchases
                                        </p>
                                    </div>
                                    <div class="chat_now_box_plugin">
                                            <?= $products_links[$i][0] ?>


                                        <a class="idisa" href="" style="margin-top:10px;font-size:16px;" class="small_text" target="_blank">
                                            Buy it on Amazon
                                        </a>

                                    </div>
                                </div>
                                    <?php } ?>
                                </div>                            </div>
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




        
        <script>
            
            var urls=document.getElementsByClassName("a-link-normal s-underline-text s-underline-link-text s-link-style a-text-normal");

            var urls2=document.getElementsByClassName("a-link-normal s-underline-text s-underline-link-text");

            var ahrefs=document.getElementsByClassName("idisa");

            var rates=document.getElementsByClassName("a-icon-alt");


            
            for (var i = 0; i < urls.length; i++) {
                urls[i].classList.add("btn-style");

                var x = urls[i].href;
                var y = urls2[i].href;

                var str = urls[i].href.replace("http://127.0.0.1:8001","https://www.amazon.com");
                var str2 = urls2[i].href.replace("http://127.0.0.1:8001","https://www.amazon.com");

                var content = urls[i].textContent = "View Product";

                urls[i].href = str;
                urls2[i].href = str2;


                ahrefs[i].href=str;

                var newstr = rates[i].textContent.replace("out of","/");

                var newstr2 = newstr.replace("stars","");


                rates[i].textContent = newstr2;

            }
            
        </script>

<style>
    @media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{   }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
    }

    #main_nav{
        justify-content: center;

    }

    .nav-item{
        padding-right: 50px;

    }

    .nav-link{
        color: white;
        font-family: serif;
        font-size: x-large;


    }

    .navbar-nav{
        padding: 11px;

    }
</style>



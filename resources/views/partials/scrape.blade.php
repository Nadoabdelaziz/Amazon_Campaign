@include('partials.head');

@include('partials.simple_html_dom');






<body
    class="page-template page-template-page-templates page-template-template-chat-table-switcher page-template-page-templatestemplate-chat-table-switcher-php page page-id-2639 wp-custom-logo wp-embed-responsive">

    <div class="site" id="page">

        <section class="home-banner " style="background: url('/img/banner-img.jpg');">
            <div class="custom-container">
                <div class="banner-inner">
                    <h2>Top 5 Best {{$cat->name}} Of 2022</h2>
                </div>
            </div>
        </section>
        <section class="content-section 2639">
            <div class="custom-container">
                <div class="content-inner">
                    <div class="top-content">
                        <h3> We Did The Hard Work. So You Don't Have To</h3>
                        <p>
                            Join the millions that have trusted CompareWarrior.com to help them make smarter buying
                            decisions. Let our independent expert reviews and data-driven shopping recommendations help
                            you find the air purifier that's right for you.
                        </p>
                    </div>

                    <div class="table-outer second_table">
                        <div class="top-bond-inner-plugin five_column">
                            <div class="best_onli_psyc_sec_plugin"></div>
                            <div id="comparision_table_up_plugin" class="compar_tbl_sec_up">
                                <div class="compar_tbl_body_plugin">
                                    <!-- 1st -->
                                    @foreach($data as $air)
                                    <div class="compar_tbl_row_plugin" id="zonguru">
                                        <div class="compar_tbl_website_img_sec_plugin">
                                            <div class="images-out-plugin">
                                                <div
                                                    class="s-product-image-container aok-relative s-image-overlay-grey s-text-center s-padding-left-small s-padding-right-small puis-spacing-small s-height-equalized">
                                                    <span data-component-type="s-product-image" class="rush-component">
                                                        <a class="a-link-normal s-no-outline" href="<?= $air->link ?>">
                                                            <div class="a-section aok-relative s-image-square-aspect">
                                                                <img width="200" height="250" class="s-image"
                                                                    src="<?= $air->img ?>" data-image-index="3"
                                                                    data-image-load=""
                                                                    data-image-latency="s-product-image"
                                                                    data-image-source-density="1">
                                                            </div>
                                                        </a>
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="user_features_box_plugin">
                                            <p style="text-align:left">

                                            <ul>
                                                <li>
                                                    <span class="a-size-base-plus a-color-base a-text-normal">
                                                        {{$air->title}}

                                                    </span>

                                                </li>

                                                <?php
                                            if(isset($air->color)){
                                            ?>
                                                <li>
                                                    <div class="a-section a-spacing-none a-spacing-top-mini">
                                                        <div class="a-row a-size-base a-color-secondary">
                                                            <span
                                                                class="a-size-base a-color-secondary"><?= $air->color ?></span>
                                                            <br>
                                                            <span class="a-letter-space"></span>

                                                            <div id="all-offers-display" class="a-section aok-hidden">
                                                                <div id="all-offers-display-spinner"
                                                                    class="a-spinner-wrapper aok-hidden">
                                                                    <span class="a-spinner a-spinner-medium"></span>
                                                                </div>
                                                            </div>

                                                            <span class="a-declarative"
                                                                data-action="close-all-offers-display"
                                                                data-csa-c-type="widget"
                                                                data-csa-c-func-deps="aui-da-close-all-offers-display"
                                                                data-close-all-offers-display="{}">
                                                                <div id="aod-background"
                                                                    class="a-section aok-hidden aod-darken-background">
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php
                                            }       
                                                ?>

                                            </ul>
                                        </div>


                                        <div class="user_features_box2">
                                            <span style="font-size: revert;"><samp><a href="javascript:void(0)"
                                                        role="button" class="a-popover-trigger a-declarative"><i
                                                            class="a-icon a-icon-star-small a-star-small-4-5 aok-align-bottom">
                                                            <span class="a-icon-alt"><?= $air->rating ?> </span></i><i
                                                            class="a-icon a-icon-popover"></i></a></samp></span>
                                            <div class="stars_plugin"><i class="fa fa-star" aria-hidden="true"></i><i
                                                    class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                                    aria-hidden="true"></i><i class="fa fa-star"
                                                    aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <p
                                                style="font-size:19px;font-weight:700;margin-top:10px;color:#111 !important">
                                                <span class="a-offscreen"> Excellent
                                                    <?php 
                                                // $air->price

                                                 ?>
                                                </span>
                                            </p>
                                            <p style="font-size:14px;font-weight:700">
                                                <span class="a-size-base s-underline-text"><?= $air->mumber ?></span>
                                                Purchases
                                            </p>
                                        </div>


                                        <div class="chat_now_box_plugin">
                                            <h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-3">
                                                <a class="a-link-normal s-underline-text s-underline-link-text s-link-style a-text-normal btn-style"
                                                    href="<?= $air->link ?>">View Product</a>
                                            </h2>

                                            <a class="idisa" href="<?= $air->link ?>"
                                                style="margin-top:10px;font-weight: 600;font-size:16px;"
                                                target="_blank">
                                                Buy it on Amazon
                                            </a>

                                        </div>

                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <script>
                        jQuery(document).ready(function() {
                            jQuery(".chat_now_box_plugin .customlink").click(function() {
                                var data_url = jQuery(this).attr("data-url");
                                gtag_report_conversion(data_url);
                            });
                        });
                        </script>
                    </div>
                    <div class="top-content op-content3">
                        <h3>How The Products are Rated</h3>
                        <p>Our recommendations are based on expert comparisons between available products in each
                            product category. For air purifiers, we chose the topics that we think matter most to our
                            users, and provide consise, clear comparisons of the features that matter. Our rankings
                            change day-to-day based on our proprietary algorithms, that crunch data to identify
                            top-performing products and tailor recommendations to exactly what our readers are looking
                            for.</p>
                        <p>"Amazon, Amazon Prime, the Amazon logo and Amazon Prime logo are trademarks of Amazon.com,
                            Inc. or its affiliates".</p>
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
                                <li id="menu-item-8085"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8085"><a
                                        href="https://comparewarrior.com/#about">About</a></li>
                                <li id="menu-item-8082"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-8082">
                                    <a href="https://comparewarrior.com/privacy.html">Privacy Policy</a></li>
                                <li id="menu-item-8185"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8185"><a
                                        href="https://comparewarrior.com/#contact">Contact Us</a></li>
                                <li id="menu-item-8185"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8185"><a
                                        href="https://comparewarrior.com/advertising-disclosure">Advertising
                                        Disclosure</a></li>
                            </ul>
                        </div>
                    </div><!-- .footer-widget -->
                    <div id="text-3" class="footer-widget ">
                        <div class="textwidget">
                            <p></p>
                        </div>
                    </div><!-- .footer-widget -->
                    <div id="text-2" class="footer-widget ">

                    </div><!-- .footer-widget -->
                </div>
            </div>
        </div><!-- #wrapper-footer-full -->
    </div><!-- #page we need this extra closing tag here -->




    <style>
    .a-icon-alt {
        font-size: x-large;
        font-weight: 800;
    }

    .a-text-normal {
        font-size: initial;
        font-weight: 600;
    }

    @media all and (min-width: 992px) {
        .navbar .nav-item .dropdown-menu {
            display: none;
        }

        .navbar .nav-item:hover .nav-link {}

        .navbar .nav-item:hover .dropdown-menu {
            display: block;
        }

        .navbar .nav-item .dropdown-menu {
            margin-top: 0;
        }
    }

    #main_nav {
        justify-content: center;

    }

    .nav-item {
        padding-right: 50px;

    }

    .nav-link {
        color: white;
        font-family: serif;
        font-size: x-large;


    }

    .navbar-nav {
        padding: 11px;

    }
    </style>
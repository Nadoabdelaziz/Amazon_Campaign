
@include('partials.head');

@include('partials.simple_html_dom');

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
 <div class="container-fluid">
  <!-- <a class="navbar-brand" href="#">Brand</a> -->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">
	<ul class="navbar-nav">
        @foreach($categories as $cat)
		<li class="nav-item">
            <a class="nav-link" href="#">{{$cat->name}} </a> 
        </li>
		@endforeach
	</ul>
  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>

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


        @foreach($categories as $cat)
            @include('partials.scrape')
        @endforeach
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

<style>
    @media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{   }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
}

.navbar{
    margin: 80px;
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


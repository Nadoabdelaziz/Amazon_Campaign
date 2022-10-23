@include('partials.head');

@include('partials.simple_html_dom');


<?php


$parm='air%20fryer&ref=glow_cls&refresh=1&sprefix=air%2Caps%2C199';

$html=file_get_html('https://buyersguide.org/office-chairs/t/best');

for ($i=0; $i < 10 ; $i++) { 

$results=$html->find('div.item-card',$i);

$result_m[$i] = $results->find('div.detail_text',1);

$title[$i] = $results->find('strong',1);

$img[$i] = $results->find('img',3);


print_r($title[$i]);
// echo $result_m[$i]."\n";

// echo $title[$i]."\n";

}

// echo $result_m[1]."\n";

?>




<body
    class="page-template page-template-page-templates page-template-template-chat-table-switcher page-template-page-templatestemplate-chat-table-switcher-php page page-id-2639 wp-custom-logo wp-embed-responsive">

    <!DOCTYPE html>





    <style>
    .button-logo {
        display: none;
    }

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


    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>
    window.addEventListener("load", () => {

        img = $('img.lazyload');
        for (let i = 0; i < 10; i++) {
            img[i].src = String(img[i].getAttribute("data-src"));

        }
    });

    var link = document.getElementById('link');

    // alert(link.innerText);
    var urls = document.getElementsByClassName(
        "a-link-normal s-underline-text s-underline-link-text s-link-style a-text-normal");

    for (var i = 0; i < urls.length; i++) {
        var x = urls[i].href;
        var str = urls[i].href.replace("http://127.0.0.1:8001/", "https://www.amazon.com/");
        var content = urls[i].textContent = "Available At Amazon";
        urls[i].href = str;
    }
    </script>
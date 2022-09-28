<?php

$parm=$cat->description;

$html=file_get_html('https://www.amazon.com/'.$parm);

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

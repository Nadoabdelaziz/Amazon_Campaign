<?php
include('simple_html_dom.php');

$parm='air+fryer&sprefix=air%2Caps%2C199&ref=nb_sb_ss_ts-doa-p_2_3';

$html=file_get_html('https://www.amazon.com/s?k='.$parm);

$results=$html->find('div.s-result-item',3);

$products = array(array());

$products_img = array(array());
$products_prices = array();




for ($i=0; $i < 10 ; $i++) { 
    $results=$html->find('div.s-result-item',$i+3);
    // $img_results=$html->find('div.s-product-image-container',$i+3);

    for ($j=0; $j < 5; $j++) { 
        $products[$i][$j]= $results->find('a.s-underline-text',$j);
        $products_img[$i][$j]= $results->find('div.s-product-image-container',$j);
        # code...
    }
}
// $newresults=$results->find('a.s-underline-text',0);

// $results=$html->find('a.s-underline-text',0);

// $products = array();
// foreach($results->find('.s-result-item') as $element)
//     array_push($products, $element->innertext);

// // var_dump($products);
// // $output = $results->find('.a-size-medium',0);

// // $output = $results->innertext;
var_dump($products_img[0][0]->innertext);



?>



<style>
    
</style>

<script>
    
    var urls=document.getElementsByClassName("a-link-normal s-underline-text s-underline-link-text s-link-style a-text-normal");
    
    for (var i = 0; i < urls.length; i++) {
        var x = urls[i].href;
        var str = urls[i].href.replace("http://localhost:8080","https://www.amazon.com");
        var content = urls[i].textContent = "Available At Amazon";
        urls[i].href = str;

    }

    
</script>




@include('partials.head');

@include('partials.simple_html_dom');



<?php

// $modules=array();
// // db connection
// $servername = "localhost";
// $username = "nada_zizo";
// $password = "Abcd2468@";
// $dbname = "amazon";


// // Create connection
// $conn = new mysqli($servername, $username, $password,$dbname);

// $sql = "SELECT title FROM modules";

// $result = $conn->query($sql);


// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo $row["title"]. "<br>";
//       array_push($modules,$row["title"]);
//     }
//   }
// else {
//     echo "0 results";
// }


$parm='s?i=hpc-intl-ship&bbn=16225010011&rh=n%3A10079992011%2Cn%3A13213824011%2Cn%3A13213826011&dc&ds=v1%3AEE8c2tYSufD6KzWqtsguRQTNlNntK%2FwQchGwo4aLM04&qid=1664374451&rnid=13213824011&ref=sr_nr_n_5';

$html=file_get_html('https://www.amazon.com/'.$parm);

$results=$html->find('div.s-result-item',3);

$products = array(array());

$products_img = array(array());
$products_links = array(array());

$products_prices = array(array());

$products_ratings=array(array());

$shipments = array(array());

$colors = array(array());




for ($i=0; $i < 10 ; $i++) { 
        $results=$html->find('div.s-result-item',$i+3);
    // $img_results=$html->find('div.s-product-image-container',$i+3);

    for ($j=0; $j < 5; $j++) { 

        $products[$i][$j]= $results->find('a.s-underline-text',$j);
        $products_img[$i][$j]= $results->find('div.s-product-image-container',$j);
        $products_links[$i][$j]= $results->find('h2.a-size-mini',$j);

        $products_prices[$i][$j]= $results->find('span.a-offscreen',$j);

        $products_ratings[$i][$j]= $results->find('a.a-popover-trigger',$j); 

        $shipments[$i][$j] =$results->find('span.a-size-base',$j); 

        $colors[$i][$j] = $results->find('div.a-spacing-top-mini',$j); 
        

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

var_dump($results->innertext);
// var_dump($colors[0][0]->innertext);


// echo $categories;

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


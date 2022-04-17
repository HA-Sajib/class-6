<!-- Assignment - 1 -->
<?php

$purchased_products = array(
                            array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
                            array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),
                            array('name' => 'orange',  'qty' => 7,    'total_price' => 600),

);

$qqty = array_column($purchased_products,'qty');
$total_qty = array_sum($qqty);
echo "product quantity is : " .$total_qty."<br>";

$products_price = array_column($purchased_products,'total_price');
$products_price_sum = array_sum($products_price);
echo "total amount is : " .$products_price_sum;

// Another way to doing Assignment - 1:
// $i = 0;
// foreach($purchased_products as $key => $vaalue){
//     $i+=$vaalue['qty'];
// }
// echo "Product quantity is : ".$i."<br>";

// $ii = 0;
// foreach($purchased_products as $key => $value){
//     $ii+=$value['total_price'];
// }
// echo "Total amount is : " .$ii;


?>


<!-- Assignment - 2 -->
<?php
$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 

$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];
// print_r (array_merge($first_email_array,$second_email_array));
$a = array_unique(array_merge($first_email_array,$second_email_array));
echo "<pre>";
print_r($a);
echo "</pre>";
?>



<!-- Assignment - 3 -->
<?php

$citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );
echo "<pre>";
print_r(array_chunk($citylist, 4));
echo "</pre>";

?>
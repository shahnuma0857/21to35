<?php
$fruits=array("Mango"=>50,"Apple"=>100,"Banana"=>20);

asort($fruits); // sort by value
print_r($fruits);

ksort($fruits); // sort by key
print_r($fruits);
?>
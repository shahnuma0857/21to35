<?php
//Display array in reverse order.
$a=array(10,20,30,40,50,60);
for($i=5; $i>0; $i--){
    echo"$a[$i]";
    echo"<br>";
}

print_r(array_reverse($a));
?>
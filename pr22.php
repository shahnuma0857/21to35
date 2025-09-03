<?php
//create and print the index array of size 10 using for each loop.
for($i=0; $i<10; $i++){
$a[$i] = ($i+1);
}
foreach($a as $v){
    echo"$v";
    echo"<br>";
}

?>
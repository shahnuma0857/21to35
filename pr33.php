<?php
//cheak if key exists(array_key_exists)
$marks=array("shahnuma"=>80,"janvi"=>70);
if(array_key_exists("janvi",$marks))
    echo"key exists";
else
    echo"not exists";

?>
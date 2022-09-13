<?php

$a = isset($_POST['a']);
$b = isset($_POST['b']);
$c = isset($_POST['c']);

if($b != 0){
    echo (pow($a,3) + ($b*$c) - ($a/$b));

}else{
    echo "Error in second input";
}


?>

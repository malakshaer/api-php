<?php

var_number($_POST['number']);
array (
0 => $a = isset($_POST['nb1']),
1 => $b = isset($_POST['nb2']),
2 => $c = isset($_POST['nb3']),
)
if($b != 0){
    $res = $a^3 + $b*$c - $a/$b;
}else{
    echo "Error second number must not be zero";
}


$result =[
    "res" => $res
];
echo json_encode($result);

?>

<?php

$a = isset($_POST['a']);
$b = isset($_POST['b']);
$c = isset($_POST['c']);

if($b != 0){
    $res = pow($a,3) + ($b*3) - ($a/$b);

}else{
    echo "Error in second input";
}

$result =[
    "result" => $res
];

echo json_encode($result);

?>

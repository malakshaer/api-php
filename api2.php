<?php

$a = isset($_POST['a']);
$b = isset($_POST['b']);
$c = isset($_POST['c']);

if(isset($_POST['b']) != 0){
    $res = pow($a,3) + ($b*3) - ($a/$b);

}else{
    echo "Error";
}

$result =[
    "result" => $res
];

echo json_encode($result);

?>

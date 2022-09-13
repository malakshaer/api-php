<?php
$str = isset($_GET["str"]); 
$rev = strrev(isset($_GET["str"]));


if($rev==$str){
    $res = "is palindrome";
}else{
    $res = "is not palindrome";
}

$result =[
    "res" => $res
];
echo json_encode($result);

?>

<?php
$a = isset($_POST['char1']);
$b = isset($_POST['char2']);
$c = isset($_POST['char3']);

$res = $a^3 + $b*$c - $a;

$result =[
    "res" => $res
];
echo json_encode($result);

?>

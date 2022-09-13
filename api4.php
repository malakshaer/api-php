<?php
$date = isset($_GET['date']);
$now = new DateTime();
$future_date = new DateTime($date);

$interval = $future_date->diff($now);

echo $interval->format("%a days, %h hours, %i minutes, %s seconds");

?>

<?php

date_default_timezone_set("Asia/Kolkata");

$date = $_POST['date'];
$time = $_POST['time'];
// echo $date;
// echo $time

$a = $date.''.$time;
// echo $a;

$birth_date = new DateTime($a);
$current_date = new DateTime();
// var_dump ($birth_date);
// var_dump ($current_date);

$diff = $birth_date->diff($current_date);

$result_date = $diff->y .' Years ' .$diff->m .' Months ' .$diff->d . " Day's " ;
$result_time = $diff->h. ' Hours ' .$diff->i . ' Minutes ' .$diff->s . ' Seconds '; 

echo $result_date;
echo $result_time;

?>
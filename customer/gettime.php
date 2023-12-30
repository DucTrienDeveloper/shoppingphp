<?php
// date_default_timezone_set('time_zone');
date_default_timezone_set('Asia/Ho_Chi_Minh'); // timezone Việt Nam
// Danh sách time_zone
$time = date('d/m/Y H:i:s');
echo $time;
$time = time();
echo "<br/>";
echo "timestamp" .$time;    
// $timezone = DateTimeZone::listIdentifiers() ;
// echo $timezone;
// foreach ($timezone as $item){
//     echo $item . '<br/>';
// }
// ?>
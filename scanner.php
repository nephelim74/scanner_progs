<?php
// Define the target IP address and port range
$ip="localhost";
$start_port = 1;
$end_port = 1024;
$timeout = 0.01;
// warning about begin scan
print("Начинаем сканирование");
// Loop through the port range and check each one
for ($port = $start_port; $port <= $end_port; $port++) {
 $connection = @fsockopen($ip, $port, $errno, $errstr, $timeout);
 if (is_resource($connection)) {
 echo "Port $port is open\n";
 fclose($connection);
 }
}
?>

<?php
// INPUT the target IP address and port range
$ip= readline('Введите ip адрес: ');
$start_port = readline('Введите начальный порт: ');
$end_port = readline('Введите конечный порт: ');
$timeout = 0.01;
// Loop through the port range and check each one
for ($port = $start_port; $port <= $end_port; $port++) {
 $connection = @fsockopen($ip, $port, $errno, $errstr, $timeout);
 if (is_resource($connection)) {
 echo "Port $port is open\n";
 fclose($connection);
 }
}
?>

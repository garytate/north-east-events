<?php

$config = include(__DIR__ . '/../config.php');
$serverName = $config['host'];
$serverUser = $config['user'];
$serverPass = $config['pass'];
$serverDB   = $config['data'];

$mysqli = mysqli_connect($serverName, $serverUser, $serverPass, $serverDB) or die("rip"); 

return $mysqli;

?>

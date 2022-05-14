<?php

echo "MySql 연결 테스트<br>";
 
//$con = mysqli_connect('3.36.219.35', 'root', 'apmsetup', 'met_prototype');

$connection = ssh2_connect('https://3.36.219.35', 22); 
ssh2_auth_password($connection, 'root', 'apmsetup');
$tunnel = ssh2_tunnel($connection, '127.0.0.1', 3306);
$db = new mysqli_connect('127.0.0.1', 'root', 'apmsetup', 'met_prototype', 3306, $tunnel)    or die ('Fail: ' . mysql_error());  
?>
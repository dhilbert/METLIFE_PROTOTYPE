<?php

/*
$real_sock = mysqli_connect($real_hostname, $real_username, $real_password, $real_name, '3306');
$real_db = mysqli_select_db($real_sock, $real_name) or die ("데이터베이스 서버에 연결할 수 없습니다.");
mysqli_set_charset($real_sock, 'utf8'); 




$connection = ssh2_connect('3.36.219.35', 22); 

ssh2_auth_password($connection, 'ubuntu', '');
$tunnel = ssh2_tunnel($connection, '127.0.0.1', 3307);
$db = new mysqli_connect('127.0.0.1', 'root', 'autoset', 
                         'autoset', 3307, $tunnel)
    or die ('Fail: ' . mysql_error());  
*/
shell_exec("ssh -fNg -L 3307:$real_hostname:3306 user@remote_host");
$conection = new mysqli($real_hostname, $real_username, $real_password, $real_name, 3307);












echo "MySql 연결 테스트<br>";
 
$con = mysqli_connect('3.36.219.35', 'root', 'apmsetup', 'met_prototype');
 
if($con){
    echo "connect : 성공<br>";
}
else{
    echo "disconnect : 실패<br>";
}
 
$sql = 'SELECT VERSION()';
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);
echo $data['VERSION()'];
?>
<?php
$real_hostname="3.36.219.35";
$real_username="cfgaussroot";
//$real_username="gaussadmin";
$real_password="autoset";

$real_name="met_prototype";

$real_sock = mysqli_connect($real_hostname, $real_username, $real_password, $real_name);
$real_db = mysqli_select_db($real_sock, $real_name) or die ("데이터베이스 서버에 연결할 수 없습니다.");
mysqli_set_charset($real_sock, 'utf8'); 


?>
<?php
include_once('../lib/dbcon.php');



$mb_inx = isset($_GET['mb_inx']) ? $_GET['mb_inx'] : '제목 없음';
echo $mb_inx%10 ;




$check_0 = ($mb_inx-$mb_inx%10)/10;
$check_1 = $mb_inx%10;



$want_text = array("","저장이 완료되었습니니다","수정이 완료되었습니니다");

$want_link = array("","/METLIFE_PROTOTYPE/admin/02.main.php","수정이 완료되었습니니다");




echo "<script>
	alert('".$want_text[$check_1]."');
	parent.location.replace('".$want_link[$check_0]."');
</script> ";




?>

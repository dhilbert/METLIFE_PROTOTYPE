<?php
include_once('../lib/dbcon.php');


$now_time =  date("Y-m-d H:i:s");
$mb_show = isset($_GET['mb_show']) ? $_GET['mb_show'] : '제목 없음';
$mb_inx = isset($_GET['mb_inx']) ? $_GET['mb_inx'] : '제목 없음';

if($mb_show==1){
	$tr_mb_show = 0;
	$texts = '비전시 처리 되었습니다.';
}
else{
	$tr_mb_show = 1;
	$texts = '전시 처리 되었습니다.';

}

$sql	= "
  update main_banner set 
    mb_show = '".$tr_mb_show."'
	where mb_inx = '".$mb_inx."'


  ";
$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));





echo "<script>
	alert('".$texts."');
	parent.location.replace('/METLIFE_PROTOTYPE/admin/main.php');
</script> ";




?>

<?php
include_once('../lib/dbcon.php');


$now_time =  date("Y-m-d H:i:s");
$mb_inx = isset($_GET['mb_inx']) ? $_GET['mb_inx'] : '제목 없음';
$mb_text = isset($_GET['mb_text']) ? $_GET['mb_text'] : '제목 없음';
$mb_contentskind = isset($_GET['mb_contentskind']) ? $_GET['mb_contentskind'] : '제목 없음';
$mb_order = isset($_GET['mb_order']) ? $_GET['mb_order'] : '제목 없음';
$mb_showtext = isset($_GET['mb_showtext']) ? $_GET['mb_showtext'] : '제목 없음';
$mb_showtext_sub = isset($_GET['mb_showtext_sub']) ? $_GET['mb_showtext_sub'] : '제목 없음';
$mb_link = isset($_GET['mb_link']) ? $_GET['mb_link'] : '제목 없음';
$mb_ctaname = isset($_GET['mb_ctaname']) ? $_GET['mb_ctaname'] : '제목 없음';
$upfile1 = isset($_GET['upfile1']) ? $_GET['upfile1'] : '제목 없음';
$upfile2 = isset($_GET['upfile2']) ? $_GET['upfile2'] : '제목 없음';
$mb_show = isset($_GET['mb_show']) ? $_GET['mb_show'] : '0';
$mb_u = isset($_GET['mb_u']) ? $_GET['mb_u'] : '제목 없음';

$namsesss = array('김주연','현단비');
$rand = rand(0, 1);
$mb_adminname = $namsesss[$rand] ;


if($mb_contentskind==2){
	$temp_mb_contentskind =1;
}
else{
	$temp_mb_contentskind=$mb_contentskind;
}

$mb_pc_file =$temp_mb_contentskind+100;

$mb_mo_file =$mb_pc_file;









$sql	= "
  update main_contents set 
    mb_text = '".replace_text($mb_text)."',
	mb_order = '".replace_text($mb_order)."',
	mb_contentskind = '".replace_text($mb_contentskind)."',
	mb_showtext = '".replace_text($mb_showtext)."',
	mb_showtext_sub = '".replace_text($mb_showtext_sub)."',
	mb_link = '".replace_text($mb_link)."',
	mb_ctaname = '".replace_text($mb_ctaname)."',
	mb_pc_file = '".$mb_pc_file.".jpg',
	mb_mo_file = '".$mb_mo_file.".jpg',
	mb_show ='". $mb_show."',
	mb_adminname = '".$mb_adminname."',
	mb_u = '".$mb_u."',
	mb_update =now()
	where mb_inx ='".$mb_inx."'

  ";
  echo $sql;
  $res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));

echo "<script>
	alert('업데이트성공');
	parent.location.replace('/METLIFE_PROTOTYPE/admin/01.main.php');
</script> ";



?>



<?php
include_once('../lib/dbcon.php');






$sql	= "truncate `main_banner`;    ";
$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));



$sql = "select  * from main_banner_origin";
$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
while($info	 = mysqli_fetch_array($res)){



	$sqls	= "
	insert main_banner set 
		mb_text = '".mylove_jy($info['mb_text'])."',
		mb_kind = '".mylove_jy($info['mb_kind'])."',
		mb_order = '".mylove_jy($info['mb_order'])."',
		mb_showtext = '".mylove_jy($info['mb_showtext'])."',
		mb_link = '".mylove_jy($info['mb_link'])."',
		mb_ctaname = '".mylove_jy($info['mb_ctaname'])."',
		mb_pc_file = '".mylove_jy($info['mb_pc_file'])."',
		mb_mo_file = '".mylove_jy($info['mb_mo_file'])."',
		mb_show = '".mylove_jy($info['mb_show'])."',
		mb_adminname = '".mylove_jy($info['mb_adminname'])."',
		mb_regtime = '".$info['mb_regtime']."',
		mb_update = '".$info['mb_update']."';
		
  
	";
	
  $resss	=  mysqli_query($real_sock,$sqls) or die(mysqli_error($real_sock));

}





echo "<script>
	alert('초기화 성공');
	parent.location.replace('/METLIFE_PROTOTYPE/admin/main.php');
</script> ";









/*


$now_time =  date("Y-m-d H:i:s");
$mb_text = isset($_POST['mb_text']) ? $_POST['mb_text'] : '제목 없음';

$mb_kind = isset($_POST['mb_kind']) ? $_POST['mb_kind'] : '제목 없음';

$mb_order = isset($_POST['mb_order']) ? $_POST['mb_order'] : '제목 없음';

$mb_showtext = isset($_POST['mb_showtext']) ? $_POST['mb_showtext'] : '제목 없음';

$mb_link = isset($_POST['mb_link']) ? $_POST['mb_link'] : '제목 없음';

$mb_ctaname = isset($_POST['mb_ctaname']) ? $_POST['mb_ctaname'] : '제목 없음';

$upfile1 = isset($_POST['upfile1']) ? $_POST['upfile1'] : '제목 없음';

$upfile2 = isset($_POST['upfile2']) ? $_POST['upfile2'] : '제목 없음';
$mb_show = isset($_POST['mb_show']) ? $_POST['mb_show'] : '제목 없음';


$mb_adminname = isset($_POST['mb_adminname']) ? $_POST['mb_adminname'] : '제목 없음';
$mb_regtime = isset($_POST['mb_regtime']) ? $_POST['mb_regtime'] : '제목 없음';






$namsesss = array('김주연','현단비');
$rand = rand(0, 1);
$mb_adminname = $namsesss[$rand] ;

$mb_pc_file =rand(1,11);
$mb_mo_file =$mb_pc_file;





$sql	= "
  insert main_banner set 
  mb_text = '".mylove_jy($mb_text)."',
	mb_kind = '".mylove_jy($mb_kind)."',
	mb_order = '".mylove_jy($mb_order)."',
	mb_showtext = '".mylove_jy($mb_showtext)."',
	mb_link = '".mylove_jy($mb_link)."',
	mb_ctaname = '".mylove_jy($mb_ctaname)."',
	mb_pc_file = '".$mb_pc_file.".jpg',
	mb_mo_file = '".$mb_mo_file.".jpg',
	mb_show ='". $mb_show."',
	mb_adminname = '".$mb_adminname."',
	mb_regtime =now(),
  mb_update =now()

  ";
$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));




*/

?>

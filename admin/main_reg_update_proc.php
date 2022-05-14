<?php
include_once('../lib/dbcon.php');


$now_time =  date("Y-m-d H:i:s");
$mb_inx = isset($_POST['mb_inx']) ? $_POST['mb_inx'] : '제목 없음';
$mb_text = isset($_POST['mb_text']) ? $_POST['mb_text'] : '제목 없음';

$mb_kind = isset($_POST['mb_kind']) ? $_POST['mb_kind'] : '제목 없음';

$mb_order = isset($_POST['mb_order']) ? $_POST['mb_order'] : '제목 없음';

$mb_showtext = isset($_POST['mb_showtext']) ? $_POST['mb_showtext'] : '제목 없음';

$mb_link = isset($_POST['mb_link']) ? $_POST['mb_link'] : '제목 없음';

$mb_ctaname = isset($_POST['mb_ctaname']) ? $_POST['mb_ctaname'] : '제목 없음';

$upfile1 = isset($_POST['upfile1']) ? $_POST['upfile1'] : '제목 없음';

$upfile2 = isset($_POST['upfile2']) ? $_POST['upfile2'] : '제목 없음';
$mb_show = isset($_POST['mb_show']) ? $_POST['mb_show'] : '제목 없음';

/*
$mb_adminname = isset($_POST['mb_adminname']) ? $_POST['mb_adminname'] : '제목 없음';
$mb_regtime = isset($_POST['mb_regtime']) ? $_POST['mb_regtime'] : '제목 없음';
*/


if(isset($_FILES['upfile1']) && $_FILES['upfile1']['name'] != "") {

    $file = $_FILES['upfile1'];

    $upload_directory = 'img/';
    $ext_str = "jpg";
    $allowed_extensions = explode(',', $ext_str);
    $max_file_size = 5242880;
    $ext = substr($file['name'], strrpos($file['name'], '.') + 1);
    if(!in_array($ext, $allowed_extensions)) {
        echo "이미지 파일만 가능";
    }

    $path = md5(microtime()) . '.' . $ext;
    move_uploaded_file($file['tmp_name'], $upload_directory.$path);
} else {

    echo "<h3>파일이 업로드 되지 않았습니다.</h3>";
    echo '<a href="javascript:history.go(-1);">이전 페이지</a>';
}
$mb_pc_file = $path;

if(isset($_FILES['upfile2']) && $_FILES['upfile2']['name'] != "") {

    $file = $_FILES['upfile2'];

    $upload_directory = 'img/';
    $ext_str = "jpg";
    $allowed_extensions = explode(',', $ext_str);
    $max_file_size = 5242880;
    $ext = substr($file['name'], strrpos($file['name'], '.') + 1);
    if(!in_array($ext, $allowed_extensions)) {
       

		echo "<script>
		alert('이미지 파일중 jpg만 가능');
		parent.location.replace('/METLIFE_PROTOTYPE/admin/main_reg.php');
		</script> ";
    }

    $path = md5(microtime()) . '.' . $ext;
    move_uploaded_file($file['tmp_name'], $upload_directory.$path);
} else {
	echo "<script>
	alert('이미지 파일중 jpg만 가능');
	parent.location.replace('/METLIFE_PROTOTYPE/admin/main_reg.php');
	</script> ";
}
$mb_mo_file = $path;



$namsesss = array('윤희동','김주연','현단비');
$rand = rand(0, 2);
$mb_adminname = $namsesss[$rand] ;


$sql	= "
  update main_banner set 
	mb_text = '".$mb_text."',
	mb_kind = '".$mb_kind."',
	mb_order = '".$mb_order."',
	mb_showtext = '".$mb_showtext."',
	mb_link = '".$mb_link."',
	mb_ctaname = '".$mb_ctaname."',
	mb_pc_file = '".$mb_pc_file."',
	mb_mo_file = '".$mb_mo_file."',
	mb_show ='". $mb_show."',
	mb_adminname = '".$mb_adminname."',
	mb_regtime =now()
  where mb_inx ='".$mb_inx."'
  ";
$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));


echo "<script>
	alert('업데이트성공');
	parent.location.replace('/METLIFE_PROTOTYPE/admin/main.php');
</script> ";




?>



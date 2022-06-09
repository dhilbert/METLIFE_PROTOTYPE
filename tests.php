<?php 
    
  include_once('lib/dbcon.php');
?>

<table border=1>


<?php 
 $sql = "
 
SELECT a.ARTICL_NO,a.ARTICL_SJ,a.ARTICL_TY,a.REGIST_DT,
  
  
  
b.STRE_COURS,b.STRE_FILE_NM
      FROM MLT_ARTICL AS a	 
          JOIN 	MLT_FILE_M AS b
  ON a.IMAGE_FILE_GROUP_NO = b.FILE_GROUP_NO
  WHERE  a.ARTICL_SE = 'news'
  AND a.STTUS_NO = 1
  ORDER BY a.ARTICL_NO DESC
";
$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
while($info	 = mysqli_fetch_array($res)){
    echo "
      <tr>
      <td>".$info['ARTICL_NO']."</td>
      <td>".$info['ARTICL_SJ']."</td>
        <td>".$info['ARTICL_TY']."</td>
        <td><a href ='https://metlifewelfare.org/article/notice/read?articlNo=".$info['ARTICL_NO']."'>이동</a></td>
    
      </tr>
    ";

}



?>


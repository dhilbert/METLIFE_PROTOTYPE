<?php 
    
  include_once('lib/dbcon.php');
?>

<table border=1>


<?php 
 $sql = "select  * 
  from MLT_PRGM_RVW as a
";
$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
while($info	 = mysqli_fetch_array($res)){
    echo "
      <tr>
      <td>".$info['RVW_NO']."</td>
      <td>".$info['CATE_NM']."</td>
        <td>".$info['RVW_SJ']."</td>
        <td><a href ='https://metlifewelfare.org/story/stories/placeRead?rvwNo=".$info['RVW_NO']."'>이동</a></td>
    
      </tr>
    ";

}


  
?>


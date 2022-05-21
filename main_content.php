<?php

function main_contents($mb_contentskind,$img,$mb_showtext,$mb_showtext_sub,$mb_ctaname){
    if($mb_contentskind==1){ main_contents_1($img,$mb_showtext,$mb_showtext_sub,$mb_ctaname);    }
    elseif($mb_contentskind==2){ main_contents_2($img,$mb_showtext,$mb_showtext_sub,$mb_ctaname);    }
    elseif($mb_contentskind==3){ main_contents_3($img,$mb_showtext,$mb_showtext_sub,$mb_ctaname);    }
    elseif($mb_contentskind==4){ main_contents_4($img,$mb_showtext,$mb_showtext_sub,$mb_ctaname);    }
    elseif($mb_contentskind==5){ main_contents_5($img,$mb_showtext,$mb_showtext_sub,$mb_ctaname);    }





}
$sql = "select  * from main_contents where mb_show = 1
order by mb_order ASC,mb_update DESC ";
$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
while($info	 = mysqli_fetch_array($res)){
    main_contents($info['mb_contentskind'],$info['mb_pc_file'],$info['mb_showtext'],$info['mb_showtext_sub'],$info['mb_ctaname']);
}
?>
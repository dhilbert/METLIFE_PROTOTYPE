<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  

 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
if (m_page_view()){}else{
    $array = array('재단 사업 및 활동','재단 사업','환경','환경 소개');
    hd_bread_crumb($array);
}





$headline   = '가이드';
$subtext    = 'h 가이트';
GenericHero($headline,$subtext);
?>


<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/wysiwyg-rte/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/wysiwyg-rte/clientlibs.min.css" type="text/css">

    
<div class="container">
        <div class="row">
            <div class="col-12 col-sm-11  offset-md-1 responsive-columns">
                <div class="richtext richtext-wysiwyg">
                    <?php 

                        for($i = 1 ; $i < 7;$i++){
                            echo "<h".$i.">h".$i." 사이즈</h".$i.">";

                        }
                    
                    ?>



<p>일반 text</p>


<p><span class="rte-smart-highlight">하이라이트</span>입니다.</span></p>

                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>                        
        <p><br></p>
        <p><br></p>
        <p><br></p>
        <p><br></p>
        <p></p>
        <p></p>
        <p></p>

<?php 
for($i = 0 ; $i < 8 ; $i++){
    $headline = "grid".$i;
    $mdsize   =  $i;
    $colsize  = 12-$i;
    Divider($headline,$colsize,$mdsize);
    }

?>




















<?php
    include_once('../../footer.php');
?>
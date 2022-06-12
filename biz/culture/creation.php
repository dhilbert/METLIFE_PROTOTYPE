<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  

 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
if (m_page_view()){}else{
    $array = array("재단 사업 및 활동","재단 사업","문화예술","> 문학/미술 작가창작지원");
    hd_bread_crumb($array);
}





$headline   = '문학/미술 작가창작지원';
$subtext    = '문화예술 사회공헌 The Gift는 역량 있는 문학/미술 작가들이 지속적인 작품활동을 할 수 있도록 발굴하고 지원합니다.';
GenericHero($headline,$subtext);


$headline = Null;
$subtext    = '문학, 미술 등의 문화예술은 진심과 감동을 전하고 마음을 위로합니다. 이러한 문화예술의 경험은 상호이해하고 배려하는 사회를 형성하는 데 기여합니다.<br>
문화예술 사회공헌 The Gift는 역량 있는 문학/미술 작가들이 지속적인 작품활동을 할 수 있도록 발굴하고 지원합니다.
한국 문학계와 미술계의 미래를 이끌어갈 <span class="rte-smart-highlight">신진작가에게 창작의 기회를 제공하고, 출판과 전시 지원</span>을 통해 대중과 만날 수 있도록 지원하여 심신이 지친 많은 이들에게 위로를 전합니다';
wysisyg($headline,$subtext);




$headline = '문학작가 첫 책 지원 주요내용';
$subtext    = '';
wysisyg($headline,$subtext);

$title='작가 역량강화 및 경제적 자립을 위한 창작지원 및 출판의 기회 제공';
$array=array("안정적인 창작활동을 위한 창작지원금 지급","대중에게 소개하는 첫 책 출판지원","출판물의 인세와 저작권의 작가 귀속을 통한 경제적 자립 지원");
CliffNotes($title,$array);



$headline   = '기업의 문화예술 지원 분야 중 문학분야는 다른 분야에 비해 지원이 매우 저조합니다.';
$colsize = 11;
$mdsize = 1;
Divider2($headline,$colsize,$mdsize);

$headline=null;
$subtext    = '한국메세나협회의 2019 기업의 문화예술 지원 현황조사에 따르면, 문학분야에 대한 지원은 1.8% 로 다른 지원분야 대비 지원규모가 매우 낮아 문학분야에 대한 지원이 절실합니다.';
wysisyg($headline,$subtext);


$headline   = '2020년 “기업의 문화예술 지원 사각지대인 문학분야로 지원영역 확대”';
$colsize = 11;
$mdsize = 1;
Divider2($headline,$colsize,$mdsize);

$headline=null;
$subtext    = '문학지원의 첫 사례로 시, 소설, 동화 분야의 3인의 작가가 3가지 이야기를 “한제이”라는 필명으로 엮어 집필된 순수창작소설을 출판 지원하였습니다.';
wysisyg($headline,$subtext);



$headline   = '2021년 “신진작가의 첫 책 출판 지원”';
$colsize = 11;
$mdsize = 1;
Divider2($headline,$colsize,$mdsize);






?>


    
    
<div class="quote-breaker parbase">

    
<script type="text/javascript" src="https://www.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/quote-breaker/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://www.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/quote-breaker/clientlibs.min.css" type="text/css">





<div class="quote-breaker component component__spacing-bottom ">
<div class="container quote-breaker-container">

             
            
                <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                 
                        <div class="row quote-breaker-imagetext-section quote-breaker-imagetext-section-nogradient">
                        <div class="col-12 col-sm-6 col-md-6  quote-breaker-content">
                                                            
                                <script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/wysiwyg-rte/clientlibs.min.js" defer></script>
                                <link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/wysiwyg-rte/clientlibs.min.css" type="text/css">

                                    
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-sm-11  responsive-columns">
                                                <div class="richtext richtext-wysiwyg">
                             
                                <p>등단 후 첫 책 출판의 기회가 없었던 작가에게 첫 책을 출판할 수 있는 기회를 제공합니다.<br>
작가창작지원 사업은 문화예술 사회공헌 전문비영리기관인 한국메세나협회와 은행나무출판사와 함께 공모사업을 통해
지원됩니다.
</p>
                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6  quote-breaker-content">
                            <div class="image">
                    <img src="https://www.metlifewelfare.org/images/app/culture-creation-210806.png" alt="TCFD Image" aria-hidden="false"/>
                </div>

</div></div>                </div>
                        </div>
                    </div>
                </div>
            
        
        
            
    
            
        
        
            
                
            
        
    </div>
    
</div>
</div>

</div>


<?php


$headline = '미술작가 창작지원 주요 내용';
$subtext    = '';
wysisyg($headline,$subtext);

$title='작가의 안정적인 창작 활동 지원 및 역량 강화';
$array=array("지속적인 작품활동을 위한 창작지원금 지급","
미술전시회 지원을 통한 대중과의 소통의 기회 제공");
CliffNotes($title,$array);


$headline   = '무료 미술전시회 제공을 통한 문화소외계층 정서적 힐링 제공”';
$colsize = 11;
$mdsize = 1;
Divider2($headline,$colsize,$mdsize);

?>


<div class="quote-breaker component component__spacing-bottom ">
<div class="container quote-breaker-container">

             
<div class="row">
                <div class="col-12 col-md-9 offset-md-2">
                 
<div class="image">
                    <img src="https://www.metlifewelfare.org/images/app/culture-creation-220407.png" alt="TCFD Image" aria-hidden="false"/>
                </div>
                </div></div></div></div>
                <?php

    include_once('../../footer.php');
?>
<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  

 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
if (m_page_view()){}else{
    $array = array("재단 사업 및 활동","재단 사업","지역사회나눔","MetLife D.I.Y");
    hd_bread_crumb($array);
}




$headline   = 'MetLife D.I.Y';
$subtext    = '맞춤형 자원봉사 MetLife D.I.Y';
GenericHero($headline,$subtext);


$headline = '';
$subtext    = '전국의 메트라이프생명 임직원과 필드 agents들이 각자의 지식, 노하우, 취미를 살려 자원봉사활동을 직접 기획하고 실행하는 프로그램입니다. 정해진 봉사활동이 아닌 자신이 원하는 곳에서, 원하는 방법으로 도움이 필요한 지역사회를 위한 자원봉사활동을 할 수 있습니다. 자원봉사 전문기관의 코칭 및 지원을 통해 양적 뿐만 아니라 질적으로도 효과적인 자원봉사활동을 진행할 수 있습니다.';

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
                             
                                <p> 2017년부터 진행된 MetLife D.I.Y 맞춤형 자원봉사활동은 약 30여개의 팀이 지적 장애인 나들이 지원, 독거 어르신 배식 지원, 지역아동센터 교육 지원, 영유아 시설 환경개선, 청소년 멘토링 지원 등을 지원하며  <span class="rte-smart-highlight">지역사회 내에서 작은 변화를 가져오고 있습니다.</span>

</p>
                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6  quote-breaker-content">
                            <div class="image">
                    <img src="https://www.metlifewelfare.org/images/app/region-diy-1.jpg" alt="TCFD Image" aria-hidden="false"/>
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

$title   = '주요성과';
$item_array = array(
    array('','Step.01<br>자원봉사 참여신청서 작성','본인이 원하는 자원봉사활동 기획 및 작성'),
    array('','Step.02<br>자원봉사 신청서 검토','자원봉사활동 기획 코칭'),
    array('','Step.03<br>자원봉사 활동 진행','진행 및 활동 모니터링'),
    array('','Step.04<br>활동 사례 홍보','우수 자원봉사활동 홍보')
    
    
);



ValueProp_array($title,$item_array);



$img ='';
$mb_showtext ='자원봉사 전문기관의 코칭과 지원을 받으며 봉사활동에 참여해보세요.';
$mb_showtext_sub ='MetLife D.I.Y';
$mb_ctaname ='참여하기>';

main_contents_2($img,$mb_showtext,$mb_showtext_sub,$mb_ctaname);





$title = '활동성과';
$item_array = array('921','3,711','11,939');
ValueProp_value($title,$item_array);



    include_once('../../footer.php');
?>
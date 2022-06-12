<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  

 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
if (m_page_view()){}else{
    $array = array("재단 사업 및 활동","재단 사업","지역사회나눔","암투병소방관 지원 기부캠페인");
    hd_bread_crumb($array);
}




$headline   = '암투병소방관 지원 기부캠페인';
$subtext    = '업무상 재해증빙이 어려운  ‘암투병 소방관’들의 치료비를 지원';
GenericHero($headline,$subtext);






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
                             
                                <p> 
                                국제소방관협회(IAFF)에 따르면 순직한 소방관들의 61%가 암으로 사망한다고 합니다, 국내 소방관의 암 발병률도 높은 편이지만 아직 한국은 암발생의 원인이 업무상 재해로 인정받지 못하는 경우가 많은 상황입니다.<br>
미니보험 가입 고객 1건당 메트라이프생명에서 기부하는 금액을 메트라이프생명 사회공헌재단이 1대1로 매칭하여 업무상 재해증빙이 어려운   <span class="rte-smart-highlight">‘암투병 소방관’들의 치료비를 지원하는 기부캠페인</sapn>입니다.
    
                                
                                
</p>
                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6  quote-breaker-content">
                            <div class="image">
                    <img src="https://www.metlifewelfare.org/images/app/cancer-donation.jpg" alt="TCFD Image" aria-hidden="false"/>
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

    include_once('../../footer.php');
?>
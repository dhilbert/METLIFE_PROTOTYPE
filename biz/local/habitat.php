<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  

 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
if (m_page_view()){}else{
    $array = array("재단 사업 및 활동","재단 사업","지역사회나눔","MetLife Build Home");
    hd_bread_crumb($array);
}




$headline   = 'MetLife Build Home';
$subtext    = '무주택 저소득 가정의 주거환경을 개선하고, 안정적인 자립을 돕습니다.';
GenericHero($headline,$subtext);


$headline = '';
$subtext    = '한국은 주택보급률에 비해 내 집 마련 비율이 매우 적습니다. 메트라이프생명 사회공헌재단은 MetLife Build Home을 통해 거주지를 지원받는 가정은 매년 일정 금액을 한국해비타트에 20년간 상환하고, 상환된 금액은 또 다른 주거 소외계층의 거주지 건축에 활용하는 선 순환의 구조를 가집니다.  <span class="rte-smart-highlight">이는 단순히 무상으로 집을 지원하는 것이 아닌 금융소외계층이 스스로 금융 계획을 세울 수 있도록 돕는 포용적 금융의 방향성을 지니게 되는 것</span>에 큰 의미가 있습니다.';

wysisyg($headline,$subtext);




$headline   = '사업 주요 내용';
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
                             
                                <p> 메트라이프생명 사회공헌재단은 Global Initiative인 해비타트 사업을 2014년부터 저소득층 가정에 안락한 집을 제공함으로써 가족의 행복한 안전을 보호하고 자립을 이룰 수 있도록 한국해비타트와 함께 MetLife Build Home 사회공헌 프로그램을 진행하고 있습니다.
<p>
매년 170여명이 넘는 메트라이프생명 임직원, 필드agents 그리고 고객까지 함께 1,000시간이 넘는 시간을 자원봉사활동에 함께 참여하여 2014-2016년 춘천 / 2017년 홍천 / 2018년 천안지역의 10세대의 주거소외계층이 든든한 보금자리에 희망찬 내일을 꿈꿀 수 있도록 지원하고 있습니다.


</p>
                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6  quote-breaker-content">
                       

<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/simple-carousel/clientlibs.min.js" defer></script>
                            <link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/simple-carousel/clientlibs.min.css" type="text/css">




<section id="simple-carousel-69491089" class="simple-carousel component component__spacing-bottom " role="region" aria-labelledby="simple-carousel-69491089--labelledby">
    <div id="simple-carousel-69491089--labelledby" class="d-none" aria-hidden="true">Simple Carousel with single Caption</div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 responsive-columns">
                <div class="row simple-carousel__image-row">
                    <div class="col-12">
                        <div class="simple-carousel__image-carousel">
        <div class="image-carousel-item">           
                            
                    <a href="#" target="_self">
                        <div class="simple-carousel__image-container aspect-ratio__16-9">
                            <div class="simple-carousel__image bg" style="background-image: url('https://www.metlifewelfare.org/images/app/region-build-1.jpg');" role="img" aria-label="Image 1 ">
                            </div>
                        </div>
                    </a>
                
                
            
        </div>
    
        <div class="image-carousel-item">
            
            
                
                    <a href="#" target="_self">
                        <div class="simple-carousel__image-container aspect-ratio__16-9">
                            <div class="simple-carousel__image bg" style="background-image: url('https://www.metlifewelfare.org/images/app/region-build-2.jpg');" role="img" aria-label="Image 2">
                            </div>
                        </div>
                    </a>
                
                
            
        </div>
    
    

                            
                        </div>
                    </div>
                </div>
                <div class="row simple-carousel__caption-row">
                    <div class="col-12 col-sm-6 col-md-7 d-none d-sm-block simple-carousel__caption-column">
                        
                            <div class="simple-carousel__caption-carousel">
                                
                                
                                
                            </div>
                        
                    </div>
                    
                        <div class="col-12 col-sm-6 col-md-4 simple-carousel__controls-column">
                            <div class="simple-carousel__controls-container">
                                <div class="simple-carousel__buttons">
                                    <button class="carousel-control prev" aria-label="Previous">
                                        <svg class="icon icon-chevron-left" aria-hidden="true" tabindex="-1" focusable="false">
                                            <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-left" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                        </svg>
                                    </button>
                                    <div class="simple-carousel__indicators"></div>
                                    <button class="carousel-control next" aria-label="Next">
                                        <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false">
                                            <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    
                    <div class="col-12 col-sm-6 col-md-8 d-block d-sm-none simple-carousel__caption-column">
                        
                            <div class="simple-carousel__caption-carousel">
                                
                                
                                
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

</div></div>                </div>
                        </div>
                    </div>
                </div>
            
        
        
            
    
            
                <script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/value-prop/clientlibs.min.js" defer></script>
        <link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/value-prop/clientlibs.min.css" type="text/css">
        
        <section class="component value-prop component__spacing-bottom   " role="region" aria-labelledby="value_prop_1311114780--labelledby">
            <div id="value_prop_1311114780--labelledby" class="d-none" aria-hidden="true"></div>
            <div class="gradiant-div"></div>
            <div class="value-prop__wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-11 offset-md-1 value-prop__bar">
                            <div class="value-prop__border"></div>
                        </div>
                    </div>
                    <div class="header_panel row">                
                            <h2 class="col-8 offset-md-1 font-header-4 font-header-4-sm font-header-2-md value-prop__title">
                                <p>활동성과
</p>
        
                            </h2>
                        
                        <div class="col-4 col-md-2 value-prop__controls">
                            <a class="carousel-control left js-leftClick" href="JavaScript:void(0);" role="button" tabindex="0" aria-label="Prev">
                                <svg class="icon brand-4th" aria-hidden="true" tabindex="-1" focusable="false">
                                    <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-left" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                </svg>
                            </a>
                            <span class="updatepipe"></span>
                            <a class="carousel-control right js-rightClick" href="JavaScript:void(0);" role="button" tabindex="0" aria-label="Next">
                                <svg class="icon brand-4th" aria-hidden="true" tabindex="-1" focusable="false">
                                    <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 offset-md-1 col-lg-11-offset-1-right-edge carousel-4-items no-carousel value-prop__item-container" data-aos="fade-left" data-aos-delay="350" data-aos-duration="750">
                            
                                <div class="value-prop__item col-md-3">
                                    <div class="value-prop__container">
                                    
                                            <div class="value-prop__item__bg">
                                                <img src="/METLIFE_PROTOTYPE/img/p_endowment_≤120p.png" alt="" aria-hidden="true"/>
                                            </div>
                                        
                                        <div class="value-prop__item__content  ">
                                            
                                                <div class="value-prop__item-image-title font-cta-2 font-content-link-1-sm">
                                                    <p><b>봉사자</b></p>
        
                                                </div>
                                            
                                            <div class="value-prop__item__description font-body-2 font-body-2-sm">
                                                <p>2,645명
</p>
        
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            
                                <div class="value-prop__item col-md-3">
                                    <div class="value-prop__container">
                                    
                                            <div class="value-prop__item__bg">
                                                <img src="/METLIFE_PROTOTYPE/img/utility-1_clock_≤120p.png" alt="" aria-hidden="true"/>
                                            </div>
                                        
                                        <div class="value-prop__item__content  ">
                                            
                                                <div class="value-prop__item-image-title font-cta-2 font-content-link-1-sm">
                                                    <p><b>봉사시간   </b></p>
        
                                                </div>
                                            
                                            <div class="value-prop__item__description font-body-2 font-body-2-sm">
                                                <p>21,160시간
 </p>
        
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        
            
                
            
        
    </div>
    
</div>
</div>

</div>


<?php


$title = '참여프로그램';
$want_array = array(
    array('https://www.metlifewelfare.org/img/2018/11/05/14ef630e-91ee-40c5-a2fb-4805ce1674ea',
    '',
    '활동완료',
    'MetLife Build Home
    ',
    '희망의 집짓기 MetLife Build Home에 참여하세요!
    ',
    '봉사기간: 2018.11.13 ~ 2018.11.13
    ')
    


);

relatedcontentrecirc($title,$want_array);


    include_once('../../footer.php');
?>
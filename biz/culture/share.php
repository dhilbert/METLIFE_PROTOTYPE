<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  

 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
if (m_page_view()){}else{
    $array = array("재단 사업 및 활동","재단 사업","문화예술","문화예술 티켓나눔 & 메트라이프 Gift콘");
    hd_bread_crumb($array);
}





$headline   = '문화예술 티켓나눔 & 메트라이프 Gift콘';
$subtext    = '나눔은 공동체와 연대하고, 함께 더불어 살아가는 사회를 지향합니다.';
GenericHero($headline,$subtext);


$headline = Null;
$subtext    = '메트라이프생명 사회공헌재단은 공간적, 경제적 여건이 제약되어 문화예술에 소외되지 않도록 문화예술체험을 통한 문화 감수성, 창의성 향상을 위해 온 오프라인 공연관람의 기회를 제공합니다.';
wysisyg($headline,$subtext);

$headline = '주요 활동 내용';
$subtext    = '';
wysisyg($headline,$subtext);

$title='문화소외계층 대상 다양한 문화예술 경험 제공';
$array=array('다양한 장르 (클래식, 뮤지컬 등) 공연 초청, 관람기회 제공','지역사회 문화예술 격차 해소를 통해 지역문화 발전 기여','온라인공연을 통한 신체 및 장소의 제약 해소');

CliffNotes($title,$array);



$headline   = '소득수준의 격차가 커질 수록 문화의 격차는 더욱 커지고 있습니다.';
$colsize = 11;
$mdsize = 1;
Divider2($headline,$colsize,$mdsize);

$headline=null;


$subtext    = '‘고소득 10명 중 8명 극장 갈 때 저소득 10명 중 7명 근처도 못갔다’ (중앙일보 2019-12-01)<br>2011년부터 2019년 까지의 통계청 ‘사회조사 결과’를 분석한 기사에서도 확인할 수 있듯이 문화예술의 양극화 해소가 필요합니다.';
wysisyg($headline,$subtext);


$headline   = 'The Gift 티켓나눔 “뮤지컬 영웅”';
$colsize = 11;
$mdsize = 1;
Divider2($headline,$colsize,$mdsize);

$headline=null;
$subtext    = '2019년 8월 예술의 전당에서 진행된 뮤지컬 ‘영웅’은 3.1운동 및 임시정부 수립 100주년과 광복절을 기념하기 위해 티켓나눔의 첫번째 뮤지컬로 선정되었습니다. 강원도, 대구, 부산, 제주 등 전국 각지에서 장애인, 다문화가정, 미혼모가정을 비롯한 140여 개의 복지시설 1800여명이 객석을 가득 채우며 함께 문화예술 힘을 경험하였습니다.';
wysisyg($headline,$subtext);








?>


    
    
<div class="quote-breaker parbase">

    
<script type="text/javascript" src="https://www.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/quote-breaker/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://www.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/quote-breaker/clientlibs.min.css" type="text/css">





<div class="quote-breaker component component__spacing-bottom ">
<div class="container quote-breaker-container">
<div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <!--<div class="quote-breaker-content-container ">
                        
                            <h2 class="quote-breaker__title font-header-2">
                                Our Purpose
                            </h2>
-->                        
                        <div class="row quote-breaker-imagetext-section quote-breaker-imagetext-section-nogradient">
                            <div class="col-12 col-sm-6 col-md-6 quote-breaker-image-mobile-spacing">
                                <div class="quote-breaker__image quote-breaker-image-nogradient" style="background-image:url('https://www.metlifewelfare.org/images/app/culture-share-202004-1.jpg')">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6  quote-breaker-content">
                                <div class="quote-icon-start" aria-hidden="true">
                                    <span></span>
                                </div>
                                <blockquote class="offset-md-1 quote-breaker-quote-text font-desc-1">
                                소아암과 싸우며 드문드문 학교를 가다 보니 역사에 대한 관심이 많아도 역사 교육을 받을 기회가 많지 않았는데 뮤지컬로 배울 수 있어서 아이들에게 좋은 시간이 되었어요
                                </blockquote>
                                <div class="quote-breaker-author-config">
                                    <div class="quote-breaker-author">
                                        <div class="author-name font-byline-1">
                                        사회복지사
                                        </div>
                                        <div class="author-jobtitle">
                                            <div class="author-job font-byline-2">
                                            한국소아암재단
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        
                <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <!--<div class="quote-breaker-content-container ">
                        
                            <h2 class="quote-breaker__title font-header-2">
                                Our Purpose
                            </h2>
-->                        
                        <div class="row quote-breaker-imagetext-section quote-breaker-imagetext-section-nogradient">
                        <div class="col-12 col-sm-6 col-md-6  quote-breaker-content">
                                <div class="quote-icon-start" aria-hidden="true">
                                    <span></span>
                                </div>
                                <blockquote class="offset-md-1 quote-breaker-quote-text font-desc-1">
                                시각장애라는 부분을 고려 해서 관람환경을 세심하게 살펴서 좌석을 배정해 주셨더라고요. 무한 감동을 받았습니다.
                                </blockquote>
                                <div class="quote-breaker-author-config">
                                    <div class="quote-breaker-author">
                                        <div class="author-name font-byline-1">
                                        사회복시자
                                        </div>
                                        <div class="author-jobtitle">
                                            <div class="author-job font-byline-2">
                                            ㅇㅇ시각장애인복지관
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6  quote-breaker-content">
                                <div class="quote-icon-start" aria-hidden="true">
                                    <span></span>
                                </div>
                                <blockquote class="offset-md-1 quote-breaker-quote-text font-desc-1">
                                안중근의사의 훌륭한 어머니를 보며, 그리고 ‘지금 2019년 여기에 있는 우리가 대한민국의 영웅입니다.’ 라는 주인공의 이야기를 보며, 어려운 상황을 이겨내고 우리 아이를 잘 키워내야겠다는 응원과 위로를 받은 기분이었습니다.
                                </blockquote>
                                <div class="quote-breaker-author-config">
                                    <div class="quote-breaker-author">
                                        <div class="author-name font-byline-1">
                                        어머니

                                        </div>
                                        <div class="author-jobtitle">
                                            <div class="author-job font-byline-2">
                                            한부모가정
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
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
                             
                                <p>COVID로 침체된 공연예술계에 활력을 불어넣고, 공연을 통해 힐링을 제공하고자 온라인 콘서트를 한국메세나협회와 공동 기획하여 생중계로 제공하였습니다.<p>"메트라이프만의 문화콘텐츠!"<br>퓨전국악밴드 AUX와 장애&비장애 통합 오케스트라 코리아 아트빌리티 체임버의 컬래버레이션을 통해 국악과 오케스트라의 하모니를 선보였습니다.<p>2020년에는 세종문화회관과 함께 네이버TV와 브이라이브(VLIVE)를 통해, 2021년에는 메트라이프생명 공식 유튜브채널을 통해 제공되어 휄체어로 평소 공연관람 이 힘드셨던 분들과 노인복지관 어르신, COVID로 공연장 방문이 어려웠던 많은 이들이 장소의 제약없이 댓글과 온라인방청 참여로 소통하며 공연을 즐겼습니다.</p>
                                
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
                            <div class="simple-carousel__image bg" style="background-image: url('https://www.metlifewelfare.org/images/app/culture-share-202106-1.jpg');" role="img" aria-label="Image 1 ">
                            </div>
                        </div>
                    </a>
                
                
            
        </div>
    
        <div class="image-carousel-item">
            
            
                
                    <a href="#" target="_self">
                        <div class="simple-carousel__image-container aspect-ratio__16-9">
                            <div class="simple-carousel__image bg" style="background-image: url('https://www.metlifewelfare.org/images/app/culture-share-202106-3.jpg');" role="img" aria-label="Image 2">
                            </div>
                        </div>
                    </a>
                
                
            
        </div>
    
        <div class="image-carousel-item">
            
            
                
                    <a href="#" target="_self">
                        <div class="simple-carousel__image-container aspect-ratio__16-9">
                            <div class="simple-carousel__image bg" style="background-image: url('https://www.metlifewelfare.org/images/app/culture-share-202106-5.jpg');" role="img" aria-label="Image 3">
                            </div>
                        </div>
                    </a>
                
                
            
        </div>
        <div class="image-carousel-item">
            
            
                
                    <a href="#" target="_self">
                        <div class="simple-carousel__image-container aspect-ratio__16-9">
                            <div class="simple-carousel__image bg" style="background-image: url('https://www.metlifewelfare.org/images/app/culture-share-202106-4.jpg');" role="img" aria-label="Image 4s">
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
</div></div>
                <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <!--<div class="quote-breaker-content-container ">
                        
                            <h2 class="quote-breaker__title font-header-2">
                                Our Purpose
                            </h2>
-->                        
                        <div class="row quote-breaker-imagetext-section quote-breaker-imagetext-section-nogradient">
                        <div class="col-12 col-sm-6 col-md-6  quote-breaker-content">
                                <div class="quote-icon-start" aria-hidden="true">
                                    <span></span>
                                </div>
                                <blockquote class="offset-md-1 quote-breaker-quote-text font-desc-1">
                                “이제는 낯설지 않은 메트라이프!”<br>얼마전 한 걸음 한 걸음 걸어 모아주신 마음으로 독거 어르신에게 선풍기를 기부해 주셨던 복지관 중 한 곳에서 근무하고 있어요. 어르신들이 코로나에 더 취약하시다보니 긴장하며 근무했던 날들의 스트레스를 모두 털어버릴 수 있었습니다. 어르신들에게도 오랜만에 즐기는 공연은 힘든 시기를 견디는 큰 선물이 되었습니다.

                                </blockquote>
                                <div class="quote-breaker-author-config">
                                    <div class="quote-breaker-author">
                                        <div class="author-name font-byline-1">
                                        사회복시자
                                        </div>
                                        <div class="author-jobtitle">
                                            <div class="author-job font-byline-2">
                                            ㅇㅇㅇ노인종합사회복지관

                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6  quote-breaker-content">
                                <div class="quote-icon-start" aria-hidden="true">
                                    <span></span>
                                </div>
                                <blockquote class="offset-md-1 quote-breaker-quote-text font-desc-1">
                                “서울과 부산, 떨어져 있어도 함께 즐긴 공연”<br>저는 부산에서 딸은 서울에서 몸은 떨어져 있어도 댓글 로 소통하며 공연을 함께 했어요. 문화적 경험이 사람을 얼마나 행복하게 만드는지 또 한번 느끼며 메트라이프 재단 문화예술 사회공헌이 지속되었으면 합니다. 새로운 경험과 추억을 갖게 해주셔서 감사합니다

                                </blockquote>
                                <div class="quote-breaker-author-config">
                                    <div class="quote-breaker-author">
                                        <div class="author-name font-byline-1">
                                        FSR


                                        </div>
                                        <div class="author-jobtitle">
                                            <div class="author-job font-byline-2">
                                            메트라이프생명

                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         
                            </div>
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
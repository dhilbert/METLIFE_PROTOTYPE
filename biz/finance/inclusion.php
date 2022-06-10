<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  

 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
if (m_page_view()){}else{
    $array = array("재단 사업 및 활동","재단 사업","Financial Health","Inclusion Plus");
    hd_bread_crumb($array);
}


  



$headline   = '사회혁신조직 투자육성 Inclusion Plus';
$subtext    = '금융소외계층부터 모두의 건강한 금융생활을 위한 Inclusion Plus';
GenericHero($headline,$subtext);


$headline = '함께 성장할 때 우리 금융사회는 더욱 건강 해집니다.';
$subtext    = '메트라이프생명 사회공헌재단은 Inclusion Plus를 통해 금융소외계층부터 모두의 건강한 금융 생활(Financial health)을 더 건강하게 만드는 솔루션 발굴과 사회혁신 조직의 역량 강화를 지원합니다. 본 프로그램을 통해  <span class="rte-smart-highlight">금융소외계층의 금융상품 및 서비스 접근을 높이고, 금융지식을 습득하도록 돕고 경제활동 참여가 낮은 이들의 경제적 자립을 지원할 수 있는 다양한 솔루션 발굴의 장</span>입니다.';
wysisyg($headline,$subtext);


$title   = '주요성과';
$item_array = array(
    array('/METLIFE_PROTOTYPE/img/p_large-company_≤120p.png','총 참여 기업 수','52개'),
    array('/METLIFE_PROTOTYPE/img/utility-1_clock_≤120p.png','금융생활 솔루션 수혜자','667,509명'),
    array('/METLIFE_PROTOTYPE/img/hr_high-deductible_≤120p.png','후속투자금액','62억 5천만원'),
    array('/METLIFE_PROTOTYPE/img/p_deferred-fixed-annuities_≤120p.png','2020년 전체  매출','92억4천만원'),
    array('/METLIFE_PROTOTYPE/img/fb_benefits-employees_≤120p_HVR.png','고용창출','72명')
);



ValueProp_array($title,$item_array);


?>


















































    
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/wysiwyg-rte/clientlibs.min.js" defer></script>



    
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/wysiwyg-rte/clientlibs.min.css" type="text/css">







<section id="wysiwyg-rte-1048719815" class="wysiwyg-rte component component__spacing-bottom " role="region" aria-labelledby="wysiwyg-rte-1048719815--labelledby">
    <div id="wysiwyg-rte-1048719815--labelledby" class="d-none" aria-hidden="true"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-3 offset-md-1 responsive-columns">
                <div class="richtext richtext-wysiwyg">
                    <h2> </h2>
<h2><span class="font-subhead-2">Inclusion Plus 주요 활동 내용
</span></h2>

<p>Financial health 및 금융포용 분야 내 혁신적인 솔루션을 가진 사회혁신 조직을 선정하여 경영진단 멘토링 전문분야별 컨설팅, IR 컨설팅 등을 제공을 통해 비즈니스 역량강화를 지원하고 임팩트 투자를 연계하여 사회적 가치 실현과 재무적 수익 창출을 돕습니다.</p>

<p><span class="rte-smart-highlight">다양한 금융솔루션을 가진 팀들의 역랑을 강화하고, 건강한 금융사회를 설계해 나가는 사회혁신 프로그램, Inclusion Plus</span>입니다.</span></p>

                </div>
            </div>
        </div>
    </div>
</section></div>



   

    
<div class="divider parbase">  
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/divider/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/divider/clientlibs.min.css" type="text/css">
<section id="divider-774508003" class="divider component component__spacing-bottom " role="region" aria-labelledby="divider-774508003--labelledby" style="margin-bottom: 60px; ">
    <div id="divider-774508003--labelledby" class="d-none" aria-hidden="true">
</div>
    <div class="container">
        <div class="row">
        <div class="col-12 col-md-11 offset-md-1 responsive-columns">
                <div class="divider__line gradient" style="height: 6px; ">
                </div>
                
                    <div class="divider__copy richtext richtext-wysiwyg">
                        <p><span class="font-header-2">사회혁신조직 투자 및 육성 프로그램(2019년~)</span></p>

                    </div>
                
            </div>
        </div>
    </div>
</section></div>
</div>


<div class="cliff-notes parbase">
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/cliff-notes/clientlibs.min.css" type="text/css">
<div class="component cliff-notes component__spacing-bottom ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="row cliff-notes__container">
                    
                    <h3 class="col-12 col-sm-4 col-md-4 cliff-notes__title">
                    맞춤형 엑셀러레이팅<br> (Acceralating)

                    </h3>

                    <div class="col-12 col-sm-8 col-md-8 cliff-notes__bullets">


                        <ul class="cliff-notes__bullets-list">
                        
                        <li>최대 10개 조직 선정 / 사업지원금 1천만원</li>
                        <li>전문 분야 컨설팅 : ICT, 법률, 마케팅 등 필요한 영역 멘토링, 특정 문제 원인 진단 및 솔루션 컨설팅</li>
                        <li>심화 경영진단 및 전략 멘토링: 비즈니스 모델 강화, MP 작성을 통한 사회적 가치 극대화</li>
                        <li>IR 및 피칭 컨설팅: 투자유치 기초준비, IR Deck 작성, 피칭 스킬 교육 등</li>
                        <li>담임멘토링: 기존 참여 시 TOP 선정기업 1:1 멘토링 (사업운영 노하우 및 네트워킹 확대 마련)</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>
 
<div class="cliff-notes parbase">
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/cliff-notes/clientlibs.min.css" type="text/css">
<div class="component cliff-notes component__spacing-bottom ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="row cliff-notes__container">
                    
                    <h3 class="col-12 col-sm-4 col-md-4 cliff-notes__title">
                    임팩트 투자<br> (Impact Investment)


                    </h3>

                    <div class="col-12 col-sm-8 col-md-8 cliff-notes__bullets">


                        <ul class="cliff-notes__bullets-list">
                        
                        
                        <li>임팩트투자 데모데이 'Deal Share Live’: 사업계획안 피칭 및 투자 심사, 임팩트 투자자와의 Roundtable을 통한 후속 투자유치 기회 제공</li>
                        <li>임팩트 투자 조직 선정: 성장성 및 Social Value 등 심사, TOP 3 기업 선정 및 임팩트 투자(기업당 5천만원)</li>
                        <li>공동운영기관 최소 1개팀 이상 2억원 및 TIPS 7억 후속 투자기회</li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>
<div class="cliff-notes parbase">
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/cliff-notes/clientlibs.min.css" type="text/css">
<div class="component cliff-notes component__spacing-bottom ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="row cliff-notes__container">
                    
                    <h3 class="col-12 col-sm-4 col-md-4 cliff-notes__title">
                    TOP3 조직 – 글로벌 프로그램 참여



                    </h3>

                    <div class="col-12 col-sm-8 col-md-8 cliff-notes__bullets">


                        <ul class="cliff-notes__bullets-list">
                        
                      
                            <li>타국가 사회혁신 조직과 네트워킹 프로그램                        </li>
                            <li>해외 Fin-tech관련 이벤트 참여</li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>

    
<div class="divider parbase">  
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/divider/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/divider/clientlibs.min.css" type="text/css">
<section id="divider-774508003" class="divider component component__spacing-bottom " role="region" aria-labelledby="divider-774508003--labelledby" style="margin-bottom: 60px; ">
    <div id="divider-774508003--labelledby" class="d-none" aria-hidden="true">
</div>
    <div class="container">
        <div class="row">
        <div class="col-12 col-md-11 offset-md-1 responsive-columns">
                <div class="divider__line gradient" style="height: 6px; ">
                </div>
                
                    <div class="divider__copy richtext richtext-wysiwyg">
                        <p><span class="font-header-2">사회혁신 경진대회(2018~)</span></p>

                    </div>
                
            </div>
        </div>
    </div>
</section></div>
</div>


<div class="cliff-notes parbase">
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/cliff-notes/clientlibs.min.css" type="text/css">
<div class="component cliff-notes component__spacing-bottom ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="row cliff-notes__container">
                    
                    <h3 class="col-12 col-sm-4 col-md-4 cliff-notes__title">사업피칭 완성을 위한 교육</h3>

                    <div class="col-12 col-sm-8 col-md-8 cliff-notes__bullets">
                        <ul class="cliff-notes__bullets-list">
                           
                            <li>메트라이프생명 임직원 멘토링</li>
                            <li>사업신청서(Pitch Deck) 작성관련 온라인 교육</li>
                            


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>

<div class="cliff-notes parbase">
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/cliff-notes/clientlibs.min.css" type="text/css">
<div class="component cliff-notes component__spacing-bottom ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="row cliff-notes__container">
                    
                    <h3 class="col-12 col-sm-4 col-md-4 cliff-notes__title">Top5 참여혜택</h3>

                    <div class="col-12 col-sm-8 col-md-8 cliff-notes__bullets">
                        <ul class="cliff-notes__bullets-list">
                          
                            <li>총 상금 $100,000 (1억원) 차등지급                            </li>
                            <li>Top 2팀은 뉴욕 Global Summit 참여기회 제공</li>
                            <li>데모데이 참가 비용 지원 (주거비/교통비)</li>
                            


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>


<section id="divider-774508003" class="divider component component__spacing-bottom " role="region" aria-labelledby="divider-774508003--labelledby" style="margin-bottom: 60px; ">
    <div id="divider-774508003--labelledby" class="d-none" aria-hidden="true">
</div>
    <div class="container">
        <div class="row">
            <div class="col-11 responsive-columns  offset-md-1  ">
                <div class="divider__line gradient" style="height: 6px; ">
                </div>
                
                    <div class="divider__copy richtext richtext-wysiwyg">
                        <p><span class="font-header-2">Inclusion Plus 선발 조직 소개</span></p>

                    </div>
                
            </div>
        </div>
    </div>
</section></div>


</div>
	






    
<div class="visual-product-card parbase">




    
    

<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/visual-product-card/clientlibs.min.js" defer></script>



    
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/visual-product-card/clientlibs.min.css" type="text/css">


<section id="visual-product-card-352261906" class="visual-product-card component component__spacing-bottom " role="region" aria-labelledby="visual-product-card-352261906--labelledby">
    <div class="container">
        <div class="row ">
            <div class="col-11  offset-md-1  responsive-columns">
                <div class="row">
                    <div class="col-12 ">
                        <div class="visual-product-card__eyebrow-container">
                            <div id="visual-product-card-352261906--labelledby" class="visual-product-card__eyebrow">
                            연도별 선발조직

                            </div>
                            <div class="visual-product-card__eyebrow-gradient-bar"></div>
                        </div>
                    </div>
                </div>
                
                    <div class="row">
                        
                        
                            <div class="col-12 col-sm-6 visual-product-card__card-columns">
                                <a class="visual-product-card__card-container image gray" href="https://www.metlifewelfare.org/article/download/read?articlNo=264" target="_self">
                                    

    <div class="visual-product-card__image-container">
    

            <div class="visual-product-card__image bg" style="background-image: url('/METLIFE_PROTOTYPE/img/blank.png');">
            </div>
        
        
    </div>

                                    
    
    <div class="visual-product-card__content-container">
     
            <div class="visual-product-card__gradient-bar"></div>
        
        <div class="visual-product-card__title-container">
            <h2 class="visual-product-card__title">
            2018년 선발기업

            </h2>
        </div>
        <div class="visual-product-card__supporting-copy-container">
            
                <div class="visual-product-card__supporting-copy richtext">
                총 1억원 상금의 주인공 Top5 기업과 더불어, 2018년 함께한 조직들을 소개합니다.

                </div>
            
        </div>
    </div>

                                </a>
                            </div>
                        
                            <div class="col-12 col-sm-6 visual-product-card__card-columns">
                                <a class="visual-product-card__card-container image gray" href="https://www.metlifewelfare.org/article/download/read?articlNo=266" target="_self">
                                    
    
    <div class="visual-product-card__image-container">
        
            <div class="visual-product-card__image bg" style="background-image: url('/METLIFE_PROTOTYPE/img/blank.png');">
            </div>
        
        
    </div>

                                    
    
    <div class="visual-product-card__content-container">
    

            <div class="visual-product-card__gradient-bar"></div>
        
        <div class="visual-product-card__title-container">
            <h2 class="visual-product-card__title">
            2019년 선발기업
 
            </h2>
        </div>
        <div class="visual-product-card__supporting-copy-container">
            
                <div class="visual-product-card__supporting-copy richtext">
                임팩트 투자데모데이에서 선발된 TOP3기업과 함께했던 조직들을 소개합니다. 

                </div>
            
        </div>
    </div>

                                </a>
                            </div>
                        
                    </div>
                

            </div>
        </div>
    </div>
</section>





</div>



<div class="video-promo parbase">
                <script type="text/javascript"
                    src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/video-promo/clientlibs.min.js"
                    defer></script>
                <link rel="stylesheet"
                    href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/video-promo/clientlibs.min.css"
                    type="text/css">
                <div class="video-promo component component__spacing-bottom  ">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-10 offset-md-1">
                                <div class="video-promo__container">
                                    <div class="video-promo__container--background "></div>
                                    <div class="video-promo__content">
                                        <h2
                                            class="video-promo__content--title font-header-4 font-header-5-sm font-header-4-md">
                                            TEXT</h2>
                                        <div class="video-promo__content--copy font-body-1 font-body-3-sm">
                                            <p> TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT</p>
                                        </div>
                                        <div class="video-promo__content--cta font-cta-5 ">
                                            <a href="https://youtu.be/TGHrrmD2t18" target="_blank" aria-label="크게 보기">
                                                <span> <span>TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT</span></span>
                                                <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1"
                                                    focusable="false">
                                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-chevron-right"
                                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="video_container" role="region">
                                        <div class="videoWrapper videoWrapper--youtube">

                                        <iframe id="player1" width="100%" height="100%" src="https://www.youtube.com/embed/8oJXmdf5V3g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            
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
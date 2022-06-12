<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  

 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
if (m_page_view()){}else{
    $array = array("재단 사업 및 활동","재단 사업","지역사회나눔","언택트사회공헌");
    hd_bread_crumb($array);
}




$headline   = '언택트사회공헌
';
$subtext    = '수혜자 맞춤형으로 전국 어디에서나 원하는 시간에 임직원, 필드 Agents, 고객이 봉사활동키트를 배송받아 비대면으로 자원봉사 활동에 참여하여 장애인, 무연고아동, 독거어르신 지원 등 지역사회 이슈 해결에 함께 동참합니다.
';
GenericHero($headline,$subtext);


$headline = '건강한 지역사회가 모여 행복한 세상을 이룹니다. ';
$subtext    = '
메트라이프생명 사회공헌재단은 도움이 필요한 지역사회 곳곳에 따뜻한 손길을 전하고자 꾸준히 나눔 활동을 실천하고 있습니다. 메트라이프생명 임직원 및 필드 Agents는 장애인, 아동, 독거 어르신 등을 대상으로 자원봉사 및 지원을 하고, 소외계층을 위한 주거지원사업 등 다양한 사회공헌활동을 진행하고 있습니다.
<p>
함께 성장할 때 더 멀리 갈 수 있다는 믿음 아래, <span class="rte-smart-highlight">앞으로도 다양한 형태의 지역사회 나눔 활동을 통해 건강하고 행복한 사회를 만들어 나가겠습니다.</spans>';

wysisyg($headline,$subtext);

?>




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
                            <div class="simple-carousel__image bg" style="background-image: url('https://www.metlifewelfare.org/images/app/contactLess-social-1.jpg');" role="img" aria-label="Image 1 ">
                            </div>
                        </div>
                    </a>
                
                
            
        </div>
    
        <div class="image-carousel-item">
            
            
                
                    <a href="#" target="_self">
                        <div class="simple-carousel__image-container aspect-ratio__16-9">
                            <div class="simple-carousel__image bg" style="background-image: url('https://www.metlifewelfare.org/images/app/contactLess-social-4.jpg');" role="img" aria-label="Image 2">
                            </div>
                        </div>
                    </a>
                
                
            
        </div>
    
        <div class="image-carousel-item">
            
            
                
                    <a href="#" target="_self">
                        <div class="simple-carousel__image-container aspect-ratio__16-9">
                            <div class="simple-carousel__image bg" style="background-image: url('https://www.metlifewelfare.org/images/app/contactLess-social-2.jpg');" role="img" aria-label="Image 3">
                            </div>
                        </div>
                    </a>
                
                
            
        </div>
        <div class="image-carousel-item">
            
            
                
                    <a href="#" target="_self">
                        <div class="simple-carousel__image-container aspect-ratio__16-9">
                            <div class="simple-carousel__image bg" style="background-image: url('https://www.metlifewelfare.org/images/app/contactLess-social-3.jpg');" role="img" aria-label="Image 4s">
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

<?php


$title = '활동성과';
$item_array = array(
    array('봉사자','8,823명    '),
    array('봉사시간','23,896시간
    '),
    array('수혜자','5,334명
    ')
);
ValueProp($title,$item_array);




$title = '참여프로그램';
$want_array = array(
    array('https://www.metlifewelfare.org/img/2019/09/24/4ea0fef3-5b58-4a36-872c-c6f0070abcb',
    '',
    '활동완료',
    'MetLife 자원봉사',
    'MetLife 가족 환경사랑 자원봉사 일정 조절으로 인한 참여가족 재 모집',
    '봉사기간: 2019.10.12 ~ 2019.10.12'),
    array('https://www.metlifewelfare.org/img/2019/04/10/0bfd5ee5-9f30-444c-8422-df6a6e099b94',
    '',
    '활동완료',
    'MetLife 자원봉사',
    'MetLife 가족 환경사랑 자원봉사 일정 조절으로 인한 참여가족 재 모집',
    '봉사기간: 2019.10.12 ~ 2019.10.12')
    


);

relatedcontentrecirc($title,$want_array);



    include_once('../../footer.php');
?>
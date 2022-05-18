<?php 
    
    include_once('lib/dbcon.php');
    include_once('head.php');
    include_once('banner.php');
  
?>

    














    <script type="text/javascript"
                    src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/sorting-hat/clientlibs.min.js"
                    defer></script>
                <link rel="stylesheet"
                    href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/sorting-hat/clientlibs.min.css"
                    type="text/css">



        <div class="content-parsys parsys">
            <div class="sorting-hat parbase">
               
                <div class="sorting-hat component__spacing-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-14 col-md-10 offset-md-1 sortinghat-border-top">
                                <div class="sortinghat-desktop-bordertop"></div>
                            </div>
                            <div class="col-12 col-md-5 sorting-hat__left-container">
                                <div class="sorting-hat__left-container--image">
                                    <div class="sorting-hat__headline-left font-header-2-md font-header-4-sm font-header-4"
                                        aria-label="원하시는 서비스를 선택하세요​" data-default-text="원하시는 서비스를 선택하세요​">
                                        <h3 class="headline-text">원하시는 서비스를 선택하세요​</h3>
                                        <div class="sorting-hat__headline-left-backButton desktop d-none" role="button"
                                            aria-label="sorting hat" tabindex="0" data-previous>
                                            <svg class="icon icon-chevron-left" aria-hidden="true" tabindex="-1"
                                                focusable="false">
                                                <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-chevron-left"
                                                    aria-hidden="true" tabindex="-1" focusable="false"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 sorting-hat__right-container">
                                <div class="row sorting-hat__right-section">
                                    <div class="col-12 col-sm-6 sorting-hat-menu-option sorting-hat-cta">
                                        <a class="sorting-hat__itemtitle font-meta-2 cta"
                                            href="https://www.metlife.co.kr/customer-service/contact-us/request-consultation/"
                                            target="_self" tabindex="0" aria-label="Inclusion Plus" aria-hidden="false">
                                            <div class="sorting-hat__itemlink">
                                                <svg class="icon icon-sortinghat-chat" role="img" aria-hidden="true"
                                                    tabindex="-1" focusable="false">
                                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-sortinghat-chat"
                                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                </svg>
                                                <span>Inclusion Plus</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 sorting-hat-menu-option sorting-hat-cta">
                                        <a class="sorting-hat__itemtitle font-meta-2 cta"
                                            href="https://cyber.metlife.co.kr/" target="_blank" tabindex="0"
                                            aria-label="재무건강 연구 및 캠페인" aria-hidden="false">
                                            <div class="sorting-hat__itemlink">
                                                <svg class="icon icon-sortinghat-phone" role="img" aria-hidden="true"
                                                    tabindex="-1" focusable="false">
                                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-sortinghat-phone"
                                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                </svg>
                                                <span>재무건강 연구 및 캠페인</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 sorting-hat-menu-option sorting-hat-cta">
                                        <a class="sorting-hat__itemtitle font-meta-2 cta"
                                            href="https://www.metlife.co.kr/customer-protection" target="_self"
                                            tabindex="0" aria-label="기부금 활용실적" aria-hidden="false">
                                            <div class="sorting-hat__itemlink">
                                                <svg class="icon icon-sortinghat-change-beneficiary" role="img"
                                                    aria-hidden="true" tabindex="-1" focusable="false">
                                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-sortinghat-change-beneficiary"
                                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                </svg>
                                                <span>기부금 활용실적</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 sorting-hat-menu-option sorting-hat-cta">
                                        <a class="sorting-hat__itemtitle font-meta-2 cta"
                                            href="https://brand.metlife.co.kr/pn/paReal/main.do" target="_blank"
                                            tabindex="0" aria-label="MetLife금융그룹" aria-hidden="false">
                                            <div class="sorting-hat__itemlink">
                                                <svg class="icon icon-sortinghat-folder-more" role="img"
                                                    aria-hidden="true" tabindex="-1" focusable="false">
                                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-sortinghat-folder-more"
                                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                </svg>
                                                <span>MetLife금융그룹</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 sorting-hat-menu-option sorting-hat-cta">
                                        <a class="sorting-hat__itemtitle font-meta-2 cta"
                                            href="https://cyber.metlife.co.kr/claim/billNotice" target="_blank"
                                            tabindex="0" aria-label="지역사회 나눔" aria-hidden="false">
                                            <div class="sorting-hat__itemlink">
                                                <svg class="icon icon-sortinghat-file-a-claim" role="img"
                                                    aria-hidden="true" tabindex="-1" focusable="false">
                                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-sortinghat-file-a-claim"
                                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                </svg>
                                                <span>지역사회 나눔</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 sorting-hat-menu-option sorting-hat-cta">
                                        <a class="sorting-hat__itemtitle font-meta-2 cta"
                                            href="https://cyber.metlife.co.kr/" target="_blank" tabindex="0"
                                            aria-label="비전과 전략" aria-hidden="false">
                                            <div class="sorting-hat__itemlink">
                                                <svg class="icon icon-sortinghat-policy-note" role="img"
                                                    aria-hidden="true" tabindex="-1" focusable="false">
                                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-sortinghat-policy-note"
                                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                </svg>
                                                <span>비전과 전략</span>
                                            </div>
                                        </a>
                                    </div>
                                  
                                </div>
                                <div class="show-more__section hide-show-more">
                                    <div class="sorting-hat__showmore font-cta-1">
                                        <div href="#" class="showmore-link" role="button" aria-label="Show More"
                                            tabindex="0">
                                            Show More
                                            <svg class="icon sorting-hat-plus" aria-hidden="true" tabindex="-1"
                                                focusable="false">
                                                <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-plus"
                                                    aria-hidden="true" tabindex="-1" focusable="false"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="sorting-hat__headline-left-backButton mobile d-none d-md-none d-lg-none"
                                    tabindex="0" role="button" aria-label="sorting hat" data-previous="">
                                    <svg class="icon icon-chevron-left" aria-hidden="true" tabindex="-1"
                                        focusable="false">
                                        <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-chevron-left"
                                            aria-hidden="true" tabindex="-1" focusable="false"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-10 offset-md-1 sortinghat-border-bottom">
                                <div class="sortinghat-desktop-borderbottom"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>       


            <div class="value-prop parbase">
                <script type="text/javascript"     src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/value-prop/clientlibs.min.js"
                    defer></script>
                <link rel="stylesheet"          href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/value-prop/clientlibs.min.css"
                    type="text/css">
                <section class="component value-prop component__spacing-bottom   " role="region"
                    aria-labelledby="value_prop_copy--labelledby">
                    <div id="value_prop_copy--labelledby" class="d-none" aria-hidden="true">arialabel</div>
                    <div class="gradiant-div"></div>
                    <div class="value-prop__wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-11 offset-md-1 value-prop__bar">
                                    <div class="value-prop__border"></div>
                                </div>
                                </div>
                            <div class="header_panel row">
                                <h2
                                    class="col-8 offset-md-1 font-header-4 font-header-4-sm font-header-2-md value-prop__title">
                                    숫자로 보는 사회공헌
                                </h2>
                                <div class="col-4 col-md-2 value-prop__controls">
                                    <a class="carousel-control left js-leftClick" href="#" role="button" tabindex="0"
                                        aria-label="Prev">
                                        <svg class="icon brand-4th" aria-hidden="true" tabindex="-1" focusable="false">
                                            <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-chevron-left"
                                                aria-hidden="true" tabindex="-1" focusable="false"></use>
                                        </svg>
                                    </a>
                                    <span class="updatepipe"></span>
                                    <a class="carousel-control right js-rightClick" href="#" role="button" tabindex="0"
                                        aria-label="Next">
                                        <svg class="icon brand-4th" aria-hidden="true" tabindex="-1" focusable="false">
                                            <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-chevron-right"
                                                aria-hidden="true" tabindex="-1" focusable="false"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 offset-md-1 col-lg-11-offset-1-right-edge carousel-4-items no-carousel value-prop__item-container"
                                    data-aos="fade-left" data-aos-delay="350" data-aos-duration="750"
                                    aria-live="assertive" aria-atomic="true">
                                    <div class="value-prop__item col-md-3">
                                        <div class="value-prop__container">
                                            <div class="value-prop__item__bg">
                                                <img src="https://www.metlife.co.kr/content/dam/metlife/kr/author/about-us/about-metlife/ca/Icon-PSP-ca-202111.png"
                                                    alt="" aria-hidden="true" />
                                            </div>
                                            <div class="value-prop__item__content  ">
                                                <div
                                                    class="value-prop__item-image-title font-cta-2 font-content-link-1-sm">
                                                    463 명
                                                </div>
                                                <div class="value-prop__item__description font-body-2 font-body-2-sm">
                                                    <p>나눔에 참여한 직원 및 고객</p>
                                                    <p>* 2022년 누적<br />
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="value-prop__item col-md-3">
                                        <div class="value-prop__container">
                                            <div class="value-prop__item__bg">
                                                <img src="https://www.metlife.co.kr/content/dam/metlife/kr/author/about-us/about-metlife/ca/ca-Icon-performancereview-fixes-202112.png"
                                                    alt="" aria-hidden="true" />
                                            </div>
                                            <div class="value-prop__item__content  ">
                                                <div
                                                    class="value-prop__item-image-title font-cta-2 font-content-link-1-sm">
                                                    463 시간
                                                </div>
                                                <div class="value-prop__item__description font-body-2 font-body-2-sm">
                                                    <p>나눔에 참여한 시간<br />
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                    <p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="value-prop__item col-md-3">
                                        <div class="value-prop__container">
                                            <div class="value-prop__item__bg">
                                                <img src="https://www.metlife.co.kr/content/dam/metlife/kr/author/about-us/about-metlife/ca/Group-26439-ca-202111.png"
                                                    alt="" aria-hidden="true" />
                                            </div>
                                            <div class="value-prop__item__content  ">
                                                <div
                                                    class="value-prop__item-image-title font-cta-2 font-content-link-1-sm">
                                                    430 명
                                                </div>
                                                <div class="value-prop__item__description font-body-2 font-body-2-sm">
                                                    <p>자원봉사단의 나눔을 받은 수혜자</p>
                                                    <p>
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

<?php

include_once('main_content.php')

?>


    
<div class="product-info parbase">




    
<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/product-info/clientlibs.min.js" defer></script>




<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/product-info/clientlibs.min.css" type="text/css">





<div id="product-info_product_info" class="product-info component   product-info-three ">
<div class="container">
    <div class="row">
        <div class="col-12  col-md-10 offset-md-1 product-info-border"></div>
        <div class="col-12  col-md-11  offset-md-1 product-info-container">
            <div class="col-12 col-sm-10  product-info-container__title font-header-4 font-header-2-md">사회혁신조직 투자 및 육성 프로그램 (2019년~)</div>
            <div class="col-12 col-sm-2  product-info--indicators">
                <button class="carousel-control left js-leftClick">
                    <svg class="icon" aria-hidden="true" tabindex="-1" focusable="false">
                        <use xlink:href="https://evolution.metlife.com/static/images/icons-metlife.svg#icon-chevron-left" aria-hidden="true" focusable="false"></use>
                    </svg>
                    <span class="sr-only">Prev</span>
                </button>
                <span data-text="/" class="carousel-control__slide-number"></span>
                <button class="carousel-control right js-rightClick">
                    <svg class="icon" aria-hidden="true" tabindex="0" focusable="false">
                        <use xlink:href="https://evolution.metlife.com/static/images/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                    </svg>
                    <span class="sr-only">Next</span>
                </button>
            </div>
            <div class="product-info-container__tile-container  " data-aos="fade-left" data-aos-delay="350" data-aos-duration="750">
                
                    <div class="product-tile   product-tile__double_triple" data-index="1">
                        <div class="product-tile__container ">
                            <div class="product-tile__content-container">
                                
                                    <img class="product-tile__icon" src="https://evolution.metlife.com/content/dam/metlifecom/global/web-icons/product/p_hospital-cash_120p.svg" alt="" role="presentation"/>
                                
                                <h2 class="product-tile__title font-header-5">                                맞춤형 엑셀러레이팅<br> (Acceralating)

                                </h2>
                        
                                
                            </div>
                          
                             
                        </div>
                    </div>
                
                    <div class="product-tile   product-tile__double_triple" data-index="2">
                        <div class="product-tile__container ">
                            <div class="product-tile__content-container">
                                
                                    <img class="product-tile__icon" src="https://evolution.metlife.com/content/dam/metlifecom/global/web-icons/product/p_hospital-cash_120p.svg" alt="" role="presentation"/>
                                
                                <h2 class="product-tile__title font-header-5">
                                임팩트 투자 (Impact Investment)

                                </h2>
                                 
                                
                                
                            </div>
                            
                                
                        </div>
                    </div>
                
                    <div class="product-tile   product-tile__double_triple" data-index="3">
                        <div class="product-tile__container ">
                            <div class="product-tile__content-container">
                                
                            <img class="product-tile__icon" src="https://evolution.metlife.com/content/dam/metlifecom/global/web-icons/product/p_hospital-cash_120p.svg" alt="" role="presentation"/>
                                
                                <h2 class="product-tile__title font-header-5">
                                TOP3 조직 – 글로벌 프로그램 참여</h2>
                                 
                                
                                
                            </div>
                            
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-product-info-container">        
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-11 offset-md-1 product-info-container">
                <div class="product-info-container__description-container ">
                    

                        <div class="product-descriptionTile" data-index="1">
                            <div class="product-descriptionTileLeft">
                                
                                    <div class="product-description-top font-body-1 font-body-3-sm font-body-3-md">
                                        <p><b>맞춤형 엑셀러레이팅 (Acceralating) - 최대 10개 조직 선정 / 사업지원금 1천만원</b></p>

                                    </div>
                                
                                
                                    <div class="product-description-bottom font-body-1 font-body-3-sm font-body-3-md">
                                        <ul>
                                        <li>전문 분야 컨설팅 : ICT, 법률, 마케팅 등 필요한 영역 멘토링, 특정 문제 원인 진단 및 솔루션 컨설팅</li>
                                        <li>심화 경영진단 및 전략 멘토링: 비즈니스 모델 강화, MP 작성을 통한 사회적 가치 극대화</li>
                                        <li>IR 및 피칭 컨설팅: 투자유치 기초준비, IR Deck 작성, 피칭 스킬 교육 등</li>
                                        <li>담임멘토링: 기존 참여 시 TOP 선정기업 1:1 멘토링 (사업운영 노하우 및 네트워킹 확대 마련)</li>

    

</ul>

                                    </div>
                                
                                
                            </div>
                            
                        </div>
                    

                        <div class="product-descriptionTile" data-index="2">
                            <div class="product-descriptionTileLeft">
                                
                                    <div class="product-description-top font-body-1 font-body-3-sm font-body-3-md">
                                        <p><b>임팩트 투자 (Impact Investment)</b></p>

                                    </div>
                                
                                
                                    <div class="product-description-bottom font-body-1 font-body-3-sm font-body-3-md">
                                        <ul>
                                        <li>임팩트투자 데모데이 'Deal Share Live’: 사업계획안 피칭 및 투자 심사, 임팩트 투자자와의 Roundtable을 통한 후속 투자유치 기회 제공</li>
                                        <li>임팩트 투자 조직 선정: 성장성 및 Social Value 등 심사, TOP 3 기업 선정 및 임팩트 투자(기업당 5천만원)</li>
                                        <li>공동운영기관 최소 1개팀 이상 2억원 및 TIPS 7억 후속 투자기회</li>

</ul>

                                    </div>
                                
                                
                                    
                                
                            </div>
                            
                        </div>
                    

                        <div class="product-descriptionTile" data-index="3">
                            <div class="product-descriptionTileLeft">
                                
                                    <div class="product-description-top font-body-1 font-body-3-sm font-body-3-md">
                                        <p><b>TOP3 조직 – 글로벌 프로그램 참여
</b></p>

                                    </div>
                                
                                
                                    <div class="product-description-bottom font-body-1 font-body-3-sm font-body-3-md">
                                        <ul>
                                        <li>타국가 사회혁신 조직과 네트워킹 프로그램</li>
                                        <li>해외 Fin-tech관련 이벤트 참여</li>

</ul>

                                    </div>
                                
                                
                            </div>
                            
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div></div>



<!--





-->


<link rel="icon" type="image/x-icon" href="https://www.metlifewelfare.org/images/comm/favicon.ico" />
<link rel="stylesheet" href="https://www.metlifewelfare.org/css/app/reset.css?20220427" />
<link rel="stylesheet" href="https://www.metlifewelfare.org/css/app/layout.css?20220427" />
<link rel="stylesheet" href="https://www.metlifewelfare.org/css/app/modules.css?20220427" />
<link rel="stylesheet" href="https://www.metlifewelfare.org/css/app/contents.css?20220427" />
<link rel="stylesheet" href="https://www.metlifewelfare.org/css/app/mediaquery.css?20220427" />
<link rel="stylesheet" href="https://www.metlifewelfare.org/css/app/editor-contents.css?20181016" />
<link rel="stylesheet" href="https://www.metlifewelfare.org/css/app/datatables.css" />
<link rel="stylesheet" href="https://www.metlifewelfare.org/css/app/tooltip.css" />
<link rel="stylesheet" href="https://www.metlifewelfare.org/css/lib/summernote/summernote-lite.css" />

<main id="wrap" class="business-wrap">


				<div class="education finance-submain-list">
					<div class="inner">
						<div class="item">
							<ul class="course">
								<li class="spend">
									<strong class="course-title">Spend<br> 예산에 맞는 지출 하기</strong>
									<ul class="depth">
										<li>일상적 지출 이어도 지출 전 <br>예산을 세워 지출하기</li>
										<li>공과금, 신용카드 요금 등을 <br>연체하지 않고 납부 하기</li>
										<li>수입을 넘어서는 지출이 1년 중 <br>3개월 미만일 것</li>
									</ul>
								</li>
								<li class="save">
									<strong class="course-title">Save<br> 저축습관 만들기</strong>
									<ul class="depth even">
										<li>비상 시, 현금화 할 수 있는 <br>생활비 가지고 있기</li>
										<li>단기적 혹은 장기적 <br>저축 보유 하기</li>
									</ul>
								</li>
								<li class="borrow">
									<strong class="course-title">Borrow<br> 위기사항 대비, 부채 관리</strong>
									<ul class="depth">
										<li>감당할 수 있는 수준에서 <br>부채 보유 하기</li>
										<li>평상시에 신용관리 <br>꾸준히 하기</li>
									</ul>
								</li>
								<li class="plan">
									<strong class="course-title">Plan<br> 노후와 미래를 위한 준비</strong>
									<ul class="depth">
										<li>장기적인 저축, 투자를 통해 <br>노후 및 미래 준비 하기</li>
										<li>예기치 못한 사고, 질병을 <br>보장해 주는 보험 가지고 있기</li>
										<li>저축의 50%는 노후를 위한 저축일 것</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="list-txt-info">Source : Center for Financial Services Innovation (CFSI)</div>
						<p class="text-center">
							<a href="https://www.metlifewelfare.org/article/download/read?articlNo=267" class="btn btn-secondary-light"><span class="is-pc">메트라이프생명 사회공헌재단&nbsp;</span>Financial Health관련 사회적 이슈 알아보기</a>
						</p>
					</div>
				</div>

				<div class="cards finance">
					<div class="inner">
						<h4>Financial Health 프로그램</h4>
						<ul>
							<li><a href="https://www.metlifewelfare.org/biz/finance/health">
								<div>
									<i class="icon icon-business-financial-1"></i>
									<span>재무건강 연구 <br>및 캠페인</span>
								</div>
							</a></li>
							<li><a href="https://www.metlifewelfare.org/biz/finance/education">
								<div>
									<i class="icon icon-business-financial-2"></i>
									<span>금융교육</span>
								</div>
							</a></li>
							<!-- 
							<li><a href="https://www.metlifewelfare.org/biz/finance/society">
								<div>
									<i class="icon icon-business-financial-3"></i>
									<span>사회적 금융</span>
								</div>
							</a></li>
							-->
							<li><a href="https://www.metlifewelfare.org/biz/finance/inclusion">
								<div>
									<i class="icon icon-business-financial-4"></i>
									<span>사회혁신조직<br>투자육성<br/>Inclusion Plus</span>
								</div>
							</a></li>
							<li>
								<a href="https://www.metlifewelfare.org/biz/finance/forum">
									<div>
										<i class="icon icon-business-financial-5"></i>
										<span>Financial Health<br>포럼</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</main>
		<section class="section">
			<div class="finance finance-submain">
				<div class="inner">
					<!-- 
					<div class="slogan">
						<div class="keyword">Strategic Areas</div>
						<div class="mean">메트라이프생명 사회공헌재단은 다 함께 잘 사는 건강한 사회를 꿈꿉니다.<br>금융포용과 지역사회 나눔 영역에서 다양한 사회공헌활동으로 더 나은 미래를 함께 만들어 갑니다.</div>
					</div>
					-->

					<div class="submain-desc bg-circle bg-circle-blue">
						<h3><strong>Financial Health</strong>파이낸셜 헬스(건강한 금융생활)</h3>
						<div>
							<p>
								Financial Health는 메트라이프재단의 글로벌 사회공헌 전략으로 혁신적인 솔루션 발굴과 연구조사를 통해 <strong class="fc-primary">금융소외계층부터 모두의 건강한 삶을 지원</strong>하는데 목적을 두고 있습니다. 일상적인 소득과 지출 관리, 대출, 저축 등의 금융생활은 누구라도 쉽게 접하고 실행 할 수 있어야 합니다. 그러나 저소득, 낮은 신용, 금융서비스에 대한 정보 부족 및 어려운 접근성 등의 다양한 
								원인으로 누구라도 ’금융소외계층’이 될 수 있고, 이에 대한 실질적인 지원을 하기 위해 <strong class="fc-primary">국내외 전문기관과 협업</strong>하여 다양한 프로그램을 제공하고 있습니다. 
							</p>
						</div>
						<div class="submain-desc-more">
							<p>
								소득과 지출을 일상적인 생활에서 효과적으로 관리하고, 예상치 못한 재무적 위기를 감당할 수 있으며, 아울러 미래를 위한 준비를 하는 것을 의미하는 Financial Health를 증진시키기 위한 노력은 특히, 저소득층 및 중위층 (Low-to-moderate income) 에게는 어려운 과제로 남아 있습니다. 메트라이프생명 사회공헌재단은 모든 사람들이 금융포용을 넘어 Financial Health를 만들 수 있도록 전문기관과 협업하여, 다양한 프로그램을 제공하고 있으며, 이를 통해 건강한 금융경제 사회를 만들고자 노력하고 있습니다.
							</p>
						</div>
						<h4 class="bullet">“Building Financial Health for all”</h4>
						<div>
							<p>누구나 일반적인 건강관리를 위해 운동을 하고, 건강검진을 받듯이, 건강한 금융생활(Financial Health)에 <br class="pc_br">대한 관리가 필요합니다. </p>
						</div>
						<div class="submain-desc-more">
							<p>
								금융소외계층부터 모두의 건강한 금융생활을 위한 <br class="m_br">‘파이낸셜 헬스’(Financial Health)는 <br class="pc_br">
								<strong class="fc-primary">예산에 맞는 지출관리<br class="m_br">(Spend), 저축습관 형성(Save), 부채와 예측 할 수 없는 <br class="m_br">재무적 위기상황을 대비 하는 것(Borrow), </strong>그리고, 미래와 <br class="m_br">노후를 위한 준비(Plan)를 일상적으로 할 수 있도록 관리 하는 것을 의미합니다. 
							</p>
						</div>
					</div>
				</div>

				<div class="education finance-submain-list">
					<div class="inner">
						<div class="item">
							<ul class="course">
								<li class="spend">
									<strong class="course-title">Spend<br> 예산에 맞는 지출 하기</strong>
									<ul class="depth">
										<li>일상적 지출 이어도 지출 전 <br>예산을 세워 지출하기</li>
										<li>공과금, 신용카드 요금 등을 <br>연체하지 않고 납부 하기</li>
										<li>수입을 넘어서는 지출이 1년 중 <br>3개월 미만일 것</li>
									</ul>
								</li>
								<li class="save">
									<strong class="course-title">Save<br> 저축습관 만들기</strong>
									<ul class="depth even">
										<li>비상 시, 현금화 할 수 있는 <br>생활비 가지고 있기</li>
										<li>단기적 혹은 장기적 <br>저축 보유 하기</li>
									</ul>
								</li>
								<li class="borrow">
									<strong class="course-title">Borrow<br> 위기사항 대비, 부채 관리</strong>
									<ul class="depth">
										<li>감당할 수 있는 수준에서 <br>부채 보유 하기</li>
										<li>평상시에 신용관리 <br>꾸준히 하기</li>
									</ul>
								</li>
								<li class="plan">
									<strong class="course-title">Plan<br> 노후와 미래를 위한 준비</strong>
									<ul class="depth">
										<li>장기적인 저축, 투자를 통해 <br>노후 및 미래 준비 하기</li>
										<li>예기치 못한 사고, 질병을 <br>보장해 주는 보험 가지고 있기</li>
										<li>저축의 50%는 노후를 위한 저축일 것</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="list-txt-info">Source : Center for Financial Services Innovation (CFSI)</div>
						<p class="text-center">
							<a href="https://www.metlifewelfare.org/article/download/read?articlNo=267" class="btn btn-secondary-light"><span class="is-pc">메트라이프생명 사회공헌재단&nbsp;</span>Financial Health관련 사회적 이슈 알아보기</a>
						</p>
					</div>
				</div>

				<div class="cards finance">
					<div class="inner">
						<h4>Financial Health 프로그램</h4>
						<ul>
							<li><a href="https://www.metlifewelfare.org/biz/finance/health">
								<div>
									<i class="icon icon-business-financial-1"></i>
									<span>재무건강 연구 <br>및 캠페인</span>
								</div>
							</a></li>
							<li><a href="https://www.metlifewelfare.org/biz/finance/education">
								<div>
									<i class="icon icon-business-financial-2"></i>
									<span>금융교육</span>
								</div>
							</a></li>
							<!-- 
							<li><a href="https://www.metlifewelfare.org/biz/finance/society">
								<div>
									<i class="icon icon-business-financial-3"></i>
									<span>사회적 금융</span>
								</div>
							</a></li>
							-->
							<li><a href="https://www.metlifewelfare.org/biz/finance/inclusion">
								<div>
									<i class="icon icon-business-financial-4"></i>
									<span>사회혁신조직<br>투자육성<br/>Inclusion Plus</span>
								</div>
							</a></li>
							<li>
								<a href="https://www.metlifewelfare.org/biz/finance/forum">
									<div>
										<i class="icon icon-business-financial-5"></i>
										<span>Financial Health<br>포럼</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</main>

        <script src="https://www.metlifewelfare.org/js/lib/base/base-1.1a.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/jquery/jquery.min.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/jwt/jwt-decode.min.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/parsley/parsley.min.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/parsley/i18n/ko.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/cleave/cleave.min.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/cleave/cleave-phone.kr.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/moment/moment-with-locales.min.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/bootstrap-datepicker/bootstrap-datepicker.ko.min.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/summernote/summernote-lite.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/summernote/lang/summernote-ko-KR.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/gijgo/gijgo.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/jquery.fileDownload.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/datatables/datatables.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/jquery/plugins/jquery.form.min.js"></script>

<script src="https://www.metlifewelfare.org/js/lib/jquery/plugins/jquery.slick.min.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/jquery/plugins/jquery.utils.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/jquery/plugins/jquery.layer.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/waypoint/jquery.waypoints.min.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/waypoint/shortcuts/sticky.min.js"></script>
<script src="https://www.metlifewelfare.org/js/lib/popup-tools/PopupTools.js?20180917"></script>
<script src="https://www.metlifewelfare.org/js/lib/jquery.counterup.min.js"></script>
<script src="https://www.metlifewelfare.org/js/app/global.ui.js?20181012"></script>
<script src="https://www.metlifewelfare.org/js/app/response.js?20181005"></script>
<script src="https://www.metlifewelfare.org/js/app/common.js?20181214_3"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-63821144-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-63821144-1');

  var trackOutboundLink = function(url, isNewWin) {
	  gtag('event', 'click', {
	    'event_category': 'outbound',
	    'event_label': url,
	    'transport_type': 'beacon',
	    'event_callback': function(){
			if(isNewWin == true) {
				window.open(url);
			} else {
				document.location = url;
			}
		}
	  });
	}
</script>

	









    <div class="disclaimer">
        <script type="text/javascript"
            src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/disclaimer/clientlibs.min.js"
            defer></script>
        <link rel="stylesheet"
            href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/disclaimer/clientlibs.min.css"
            type="text/css">
        <div class="component disclaimer  htl-placeholder">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1">
                        <div class="disclaimer-text font-body-2 font-body-4-sm font-body-5-md" aria-role="contentinfo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"
        src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/footer/clientlibs.min.js" defer></script>
    <link rel="stylesheet" href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/footer/clientlibs.min.css"
        type="text/css">
    <footer class="footer">
        <div class="footer__section1 secondary-links">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1">
                        <div class="footer-logo">
                            <a class="footer-logo__link" href="https://www.metlife.co.kr/" target="_self"
                                aria-label="MetLife Korea">
                                <img class="footer-logo__image"
                                    src="https://www.metlife.co.kr/content/dam/metlife/kr/author/layout/footer/Footer_Logo-202111.png"
                                    alt="MetLife Korea" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-1">
                        <div class="footer-primary-links">
                            <div class="row">
                                <div class="col-12 col-sm footer-primary-links__column">
                                    <div class="footer-primary-links__category">
                                        <div class="footer-primary-links__category-label">
                                            <h3 class="font-cta-1 font-eyebrow-4-md">재단 소개</h3>
                                            <svg class="icon icon-chevron-down d-sm-none" aria-hidden="true"
                                                focusable="false" tabindex="-1">
                                                <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-chevron-down"
                                                    aria-hidden="true" focusable="false" tabindex="-1"></use>
                                            </svg>
                                        </div>
                                        <div class="footer-primary-links__category-container">
                                            <div class="footer-primary-links__category-link">
                                                <a class="font-desc-2 font-meta-1-md"
                                                    href="customer-service/contact-us/request-consultation/"
                                                    target="_self">
                                                    비전과 전략
                                                </a>
                                            </div>
                                            <div class="footer-primary-links__category-link">
                                                <a class="font-desc-2 font-meta-1-md"
                                                    href="customer-service/contact-us/call-center-and-ars/"
                                                    target="_self">
                                                    함께하는 사람들
                                                </a>
                                            </div>
                                            <div class="footer-primary-links__category-link">
                                                <a class="font-desc-2 font-meta-1-md" href="customer-protection/"
                                                    target="_self">
                                                    MetLife 금융 그룹
                                                </a>
                                            </div>
                                            <div class="footer-primary-links__category-link">
                                                <a class="font-desc-2 font-meta-1-md" href="customer-protection/"
                                                    target="_self">
                                                    인사말
                                                </a>
                                            </div>
                                            <div class="footer-primary-links__category-link">
                                                <a class="font-desc-2 font-meta-1-md" href="customer-protection/"
                                                    target="_self">
                                                    찾아 오시는길
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm footer-primary-links__column">
                                    <div class="footer-primary-links__category">
                                        <div class="footer-primary-links__category-label">
                                            <h3 class="font-cta-1 font-eyebrow-4-md">재단 소식</h3>
                                            <svg class="icon icon-chevron-down d-sm-none" aria-hidden="true"
                                                focusable="false" tabindex="-1">
                                                <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-chevron-down"
                                                    aria-hidden="true" focusable="false" tabindex="-1"></use>
                                            </svg>
                                        </div>
                                        <div class="footer-primary-links__category-container">
                                            <div class="footer-primary-links__category-link">
                                                <a class="font-desc-2 font-meta-1-md"
                                                    href="about-us/metlife-worldwide/" target="_self">
                                                    공지사항
                                                </a>
                                            </div>
                                            <div class="footer-primary-links__category-link">
                                                <a class="font-desc-2 font-meta-1-md" href="about-us/about-metlife/"
                                                    target="_self">
                                                    뉴스
                                                </a>
                                            </div>
                                            <div class="footer-primary-links__category-link">
                                                <a class="font-desc-2 font-meta-1-md" href="about-us/esg/"
                                                    target="_self">
                                                    자료실
                                                </a>
                                            </div>
                                            <div class="footer-primary-links__category-link">
                                                <a class="font-desc-2 font-meta-1-md" href="about-us/metlife-story/"
                                                    target="_self">
                                                    나눔 스토리
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-12 col-sm footer-primary-links__column">
                                    <div class="footer-primary-links__category">
                                        <div class="footer-primary-links__category-label">
                                            <h3 class="font-cta-1 font-eyebrow-4-md">Family</h3>
                                            <svg class="icon icon-chevron-down d-sm-none" aria-hidden="true"
                                                focusable="false" tabindex="-1">
                                                <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-chevron-down"
                                                    aria-hidden="true" focusable="false" tabindex="-1"></use>
                                            </svg>
                                        </div>
                                        <div class="footer-primary-links__category-container">
                                            <div class="footer-primary-links__category-link">
                                                <a class="font-desc-2 font-meta-1-md" href="http://www.metlifefs.co.kr"
                                                    target="_blank">
                                                    재무건강
                                                </a>
                                            </div>
                                            <div class="footer-primary-links__category-link">
                                                <a class="font-desc-2 font-meta-1-md"
                                                    href="https://www.metlifewelfare.org/" target="_blank">
                                                    Inclusion Plus
                                                </a>
                                            </div>
                                            <div class="footer-primary-links__category-link">
                                                <a class="font-desc-2 font-meta-1-md"
                                                    href="https://www.metlifewelfare.org/" target="_blank">
                                                    메트라이프생명
                                                </a>
                                            </div>
                                            <div class="footer-primary-links__category-link">
                                                <a class="font-desc-2 font-meta-1-md"
                                                    href="https://www.metlifewelfare.org/" target="_blank">
                                                    메트라이프 금융그룹
                                                </a>
                                            </div>
                                            <div class="footer-primary-links__category-link">
                                                <a class="font-desc-2 font-meta-1-md"
                                                    href="https://www.metlifewelfare.org/" target="_blank">
                                                    메트라이프금융서비스
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="footer-secondary-links">
                            <div class="footer-primary-links__category">
                                <div class="footer-primary-links__category-label">
                                    <h3 class="font-cta-1 font-eyebrow-4-md">Family</h3>
                                    <svg class="icon icon-chevron-down d-sm-none" aria-hidden="true"
                                        focusable="false" tabindex="-1">
                                        <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-chevron-down"
                                            aria-hidden="true" focusable="false" tabindex="-1"></use>
                                    </svg>
                                </div>
                                <div class="footer-primary-links__category-container">
                                    <div class="footer-primary-links__category-link">
                                        <a class="font-desc-2 font-meta-1-md" href="http://www.metlifefs.co.kr"
                                            target="_blank">
                                            재무건강
                                        </a>
                                    </div>
                                    <div class="footer-primary-links__category-link">
                                        <a class="font-desc-2 font-meta-1-md"
                                            href="https://www.metlifewelfare.org/" target="_blank">
                                            Inclusion Plus
                                        </a>
                                    </div>
                                    <div class="footer-primary-links__category-link">
                                        <a class="font-desc-2 font-meta-1-md"
                                            href="https://www.metlifewelfare.org/" target="_blank">
                                            메트라이프생명
                                        </a>
                                    </div>
                                    <div class="footer-primary-links__category-link">
                                        <a class="font-desc-2 font-meta-1-md"
                                            href="https://www.metlifewelfare.org/" target="_blank">
                                            메트라이프 금융그룹
                                        </a>
                                    </div>
                                    <div class="footer-primary-links__category-link">
                                        <a class="font-desc-2 font-meta-1-md"
                                            href="https://www.metlifewelfare.org/" target="_blank">
                                            메트라이프금융서비스
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="footer-secondary-links__link">
                                <a class="font-cta-1 font-eyebrow-4-md"
                                    href="https://brand.metlife.co.kr/pn/paReal/main.do" target="_blank">
                                    공시실
                                </a>
                            </div>
                            <div class="footer-secondary-links__link">
                                <a class="font-cta-1 font-eyebrow-4-md"
                                    href="customer-service/contact-us/find-a-branch/" target="_self">
                                    지점 찾기
                                </a>
                            </div>
                            <div class="footer-secondary-links__link">
                                <a class="font-cta-1 font-eyebrow-4-md"
                                    href="https://cyber.metlife.co.kr/co/chat/CCPCI10P01" target="_blank">
                                    채팅상담
                                </a>
                            </div>
                            <div class="footer-secondary-links__link">
                                <a class="font-cta-1 font-eyebrow-4-md" href="customer-service/contact-us/faq/"
                                    target="_self">
                                    자주하는 질문
                                </a>
                            </div>
                            <div class="footer-secondary-links__link">
                                <a class="font-cta-1 font-eyebrow-4-md"
                                    href="https://cyber.metlife.co.kr/certificateForm/repaymentAmountFormat"
                                    target="_blank">
                                    구비서류 안내
                                </a>
                            </div>
                            <div class="footer-secondary-links__link">
                                <a class="font-cta-1 font-eyebrow-4-md"
                                    href="https://cyber.metlife.co.kr/claim/billNotice" target="_blank">
                                    보험금 청구 안내
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__section2 social-media">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-7 offset-md-1">
                        <div class="footer-social-media">
                            <a class="footer-social-media__link" href="https://www.facebook.com/koreametlife/"
                                target="_blank" title="Facebook" aria-label="Facebook">
                                <svg class="icon icon-facebook" role="img">
                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-facebook"></use>
                                </svg>
                            </a>
                            <a class="footer-social-media__link" href="https://www.instagram.com/metlife_korea/"
                                target="_blank" title="Instagram" aria-label="Instagram">
                                <svg class="icon icon-instagram" role="img">
                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-instagram"></use>
                                </svg>
                            </a>
                            <a class="footer-social-media__link" href="https://pf.kakao.com/_eYbxiu" target="_blank"
                                title="Kakao Talk" aria-label="Kakao Talk">
                                <svg class="icon icon-kakao-talk" role="img">
                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-kakao-talk"></use>
                                </svg>
                            </a>
                            <a class="footer-social-media__link" href="https://post.naver.com/metlife_kr"
                                target="_blank" title="Naver Post" aria-label="Naver Post">
                                <svg class="icon icon-naver" role="img">
                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-naver"></use>
                                </svg>
                            </a>
                            <a class="footer-social-media__link"
                                href="https://www.youtube.com/channel/UCPW_JIdOxM0yGuFZZ6KqQJw" target="_blank"
                                title="YouTube" aria-label="YouTube">
                                <svg class="icon icon-youtube" role="img">
                                    <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-youtube"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3">
                        <div class="footer-country-selector font-body-4">
                            <span class="sr-only" id="country_select">Country</span>
                            <div role="button" aria-expanded="false" tabindex="0"
                                aria-labelledby="country_select country_name"
                                class="footer-country-selector__country-select">
                                <div class="footer-country-selector__country-default">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Korea"></span>
                                    <div class="footer-country-selector__country-name" id="country_name">South Korea
                                    </div>
                                    <svg class="icon icon-caret-down" role="img" aria-hidden="true" tabindex="-1"
                                        focusable="false">
                                        <use xlink:href="https://www.metlife.co.kr/static/images/icons-metlife.svg#icon-caret-down"
                                            aria-hidden="true" tabindex="-1" focusable="false"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="footer-country-selector__country-list" data-last-country-label="South Korea"
                                tabindex="-1" role="region" aria-label="South Korea">
                                <div class="footer-country-selector__country-header">
                                    <span class="footer-country-selector__country-region">Americas</span>
                                </div>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.com/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--USA"></span>
                                    <div class="footer-country-selector__country-name">USA</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.com.br/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Brazil"></span>
                                    <div class="footer-country-selector__country-name">Brazil</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://w3.metlife.cl/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Chile"></span>
                                    <div class="footer-country-selector__country-name">Chile</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.provida.cl/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Chile-ProVida"></span>
                                    <div class="footer-country-selector__country-name">Chile ProVida</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.com.co/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Colombia"></span>
                                    <div class="footer-country-selector__country-name">Colombia</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.com.mx/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Mexico"></span>
                                    <div class="footer-country-selector__country-name">Mexico</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.com.uy/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Uruguay"></span>
                                    <div class="footer-country-selector__country-name">Uruguay</div>
                                </a>
                                <div class="footer-country-selector__country-header">
                                    <span class="footer-country-selector__country-region">Asia</span>
                                </div>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.com.au/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Australia"></span>
                                    <div class="footer-country-selector__country-name">Australia</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.com.bd/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Bangladesh"></span>
                                    <div class="footer-country-selector__country-name">Bangladesh</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.com.cn/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--China"></span>
                                    <div class="footer-country-selector__country-name">China</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.pnbmetlife.com/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--India"></span>
                                    <div class="footer-country-selector__country-name">India</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.co.jp/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Japan"></span>
                                    <div class="footer-country-selector__country-name">Japan</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.co.kr/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Korea"></span>
                                    <div class="footer-country-selector__country-name">South Korea</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.ammetlife.com/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Malaysia"></span>
                                    <div class="footer-country-selector__country-name">Malaysia</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.com.np/en/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Nepal"></span>
                                    <div class="footer-country-selector__country-name">Nepal</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.bidvmetlife.com.vn/vn/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Vietnam"></span>
                                    <div class="footer-country-selector__country-name">Vitenam</div>
                                </a>
                                <div class="footer-country-selector__country-header">
                                    <span class="footer-country-selector__country-region">Europe</span>
                                </div>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.bg/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Bulgaria"></span>
                                    <div class="footer-country-selector__country-name">Bulgaria</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlifealico.com.cy/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Cyprus"></span>
                                    <div class="footer-country-selector__country-name">Cyprus</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.cz/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Czech-Republic"></span>
                                    <div class="footer-country-selector__country-name">Czech Republic</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.fr/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--France"></span>
                                    <div class="footer-country-selector__country-name">France</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.hu/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Hungary"></span>
                                    <div class="footer-country-selector__country-name">Hungary</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.com/about-us/careers/ireland-global-opportunities/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Ireland"></span>
                                    <div class="footer-country-selector__country-name">Ireland</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.it/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Italy"></span>
                                    <div class="footer-country-selector__country-name">Italy</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.pl/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Poland"></span>
                                    <div class="footer-country-selector__country-name">Poland</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.pt/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Portugal"></span>
                                    <div class="footer-country-selector__country-name">Portugal</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metropolitanlife.ro/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Romania"></span>
                                    <div class="footer-country-selector__country-name">Romania</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.sk/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Slovakia"></span>
                                    <div class="footer-country-selector__country-name">Slovakia</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.es/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Spain"></span>
                                    <div class="footer-country-selector__country-name">Spain</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.com.tr/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Turkey"></span>
                                    <div class="footer-country-selector__country-name">Turkey</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.ua/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Ukraine"></span>
                                    <div class="footer-country-selector__country-name">Ukraine</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.co.uk/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--United-Kingdom"></span>
                                    <div class="footer-country-selector__country-name">United Kingdon</div>
                                </a>
                                <div class="footer-country-selector__country-header">
                                    <span class="footer-country-selector__country-region">Middle East and Africa</span>
                                </div>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife-gulf.com/bahrain/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Bahrain">
                                    </span>
                                    <div class="footer-country-selector__country-name">Bahrain</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.eg/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Egypt">
                                    </span>
                                    <div class="footer-country-selector__country-name">Egypt</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.jo/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Jordan">
                                    </span>
                                    <div class="footer-country-selector__country-name">Jordan</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife-gulf.com/kuwait/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Kuwait">
                                    </span>
                                    <div class="footer-country-selector__country-name">Kuwait</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.com.lb/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Lebanon">
                                    </span>
                                    <div class="footer-country-selector__country-name">Lebanon</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife-gulf.com/oman/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Oman">
                                    </span>
                                    <div class="footer-country-selector__country-name">Oman</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife-gulf.com/en/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--Qatar">
                                    </span>
                                    <div class="footer-country-selector__country-name">Qatar</div>
                                </a>
                                <a class="footer-country-selector__country-group" target="_self"
                                    href="https://www.metlife.ae/en/">
                                    <span
                                        class="footer-country-selector__country-flag footer-country-selector__country-flag--United-Arab-Emirates">
                                    </span>
                                    <div class="footer-country-selector__country-name">United Arab Emirates</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-7 offset-md-1">
                        <div class="footer-info">
                            <!-- <div class="footer-info__contact font-cta-2">
                                <a class="footer-info__contact-link" href="#" target="_self">
                                    1588-9600
                                </a>
                            </div> -->
                            <div class="footer-info__legal-links font-cta-4">
                                <a class="footer-info__legal-link"
                                    href="customer-protection-policy/personal-information-handling-policy/"
                                    target="_self">
                                    이용약관
                                </a>
                                <a class="footer-info__legal-link"
                                    href="terms-and-conditions-for-use-of-electronic-financial-service/"
                                    target="_self">
                                    개인정보보호정책
                                </a>
                            
                            </div>
                            <div class="footer-info__legal-disclaimer font-body-2 font-body-4-sm font-body-5-md">
                                <p>© 2022 MetLife Korea Foundation All Rights Reserved.<br />
                                    서울시 강남구 테헤란로 316 (역삼2동, 메트라이프타워) TEL : 02-553-3732(3780)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="footer-additional-content">
                            <div class="iso"><img src="content/dam/metlife/kr/author/layout/footer/logo-bsi-202111.png"
                                    alt="" /></div>
                            <div class="iso"> </div>
                            <div class="logo"><a href="http://www.webwatch.or.kr/Situation/WA_Situation.html?MenuCD=110"
                                    target="_blank"><img
                                        src="https://www.metlife.co.kr/content/dam/metlife/kr/author/layout/footer/logo-wa-202111.png"
                                        alt="과학기술정보통신부 WEB ACCESSIBILITY 마크(웹 접근성 품질인증 마크)" /></a></div>
                            <div class="logo"> </div>
                            <div class="family"><a href="https://www.ffsb.kr/ffm/ffmCertStatus.do" target="_blank"><img
                                        src="https://www.metlife.co.kr/content/dam/metlife/kr/author/layout/footer/logo-family-202203.png"
                                        alt="2021 가족친화 우수기업 선정" /></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="content/dam/metlife/kr/scripts/js/search/kr-search.js" defer></script>
    <script type="text/javascript" defer>_satellite.pageBottom();</script>
</body>

</html>
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

<!--





-->


















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
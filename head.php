

<!DOCTYPE HTML>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <title>메트라이프 재단</title>
    <link rel="icon" type="image/x-icon" href="https://metlifewelfare.org/images/comm/favicon.ico" />
    
    <meta name="title" content="메트라이프" />
    <meta property="description" content="행복한 내일은 행복한 오늘이 모여서 만들어지는 것이기에 오늘부터, 메트라이프입니다." />
    <meta name="description" content="행복한 내일은 행복한 오늘이 모여서 만들어지는 것이기에 오늘부터, 메트라이프입니다." />
    <meta name="keywords" content="메트라이프생명, 메트라이프코리아, 메트라이프" />
    <meta name="naver-site-verification" content="3ff9b539027d80a2e6fcf6f9efea981b5097576f" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://www.metlife.co.kr/" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="date=no" />
    <meta name="format-detection" content="address=no" />
    <meta name="format-detection" content="email=no" />
    <link rel="shortcut icon" href="static/images/favicon.ico" type="image/x-icon" />
 
    <script type="text/javascript">
        var campaignID = '';
        var queryParametersCampaign = location.search.substring(1) ? location.search.substring(1) : '';
        function getQueryStringParams(name) {
            var match = RegExp('[?&]' + name + '=([^&#]*)', 'i').exec(window.location.search);
            var queryParam = match && match[1];
            if (queryParam == null) {
                return "";
            }
            else {
                return queryParam;
            }
        }
        if (queryParametersCampaign != '') {
            campaignID = getQueryStringParams('cid');
            sessionStorage.setItem("digitialDataQueryParametersCampaign", queryParametersCampaign);
            if (campaignID != null && campaignID != "") {
                sessionStorage.setItem("digitialDataCampaignID", campaignID);
            } else {
                if (sessionStorage.getItem("digitialDataCampaignID") != null && sessionStorage.getItem("digitialDataCampaignID") != "") {
                    campaignID = sessionStorage.getItem("digitialDataCampaignID");
                }
            }
        } else if (sessionStorage.getItem("digitialDataQueryParametersCampaign") != null && sessionStorage.getItem("digitialDataQueryParametersCampaign") != "") {
            queryParametersCampaign = sessionStorage.getItem("digitialDataQueryParametersCampaign");
            campaignID = sessionStorage.getItem("digitialDataCampaignID");
        }
    </script>
    <script type="text/javascript">
        var pagePath = "https://www.metlife.co.kr/content/metlife/kr/homepage";
        window.digitalData = {
            version: '1.0',
            eventTrack: function (cevt, eventDetail) {
                var msg = ' The "cevt" argument (required) is a string defining the Javascript custom event name';
                if (typeof cevt !== 'string' || cevt.length < 1) {
                    throw msg;
                }
                if (typeof digitalData.event !== 'object') {
                    digitalData.event = [];
                }
                if (typeof eventDetail !== 'object') {
                    eventDetail = {
                        eventName: cevt
                    };
                }
                digitalData.event.push(eventDetail);
                var ev = new CustomEvent(cevt, {
                    'detail': eventDetail
                });
                document.getElementsByTagName('body')[0].dispatchEvent(ev);
            },
            getEventAttr: function () {
                var ev, i;
                ev = digitalData.event;
                i = ev.length - 1;
                return ev[i].attributes;
            },
            campaign: {
                id: campaignID,
                queryStringParameters: queryParametersCampaign
            },
            page: {
                pageInfo: {
                    pageTemplateType: "/apps/MetlifeMarketGlobal/templates/kr/homepage",
                    pageType: "Unspecified",
                    audienceType: "Uncategorized"
                }
            }
        };
    </script>
    <script type="text/javascript">
        (function (win, doc, style, timeout) {
            var STYLE_ID = 'at-body-style';
            function getParent() {
                return doc.getElementsByTagName('head')[0];
            }
            function addStyle(parent, id, def) {
                if (!parent) {
                    return;
                }
                var style = doc.createElement('style');
                style.id = id;
                style.innerHTML = def;
                parent.appendChild(style);
            }
            function removeStyle(parent, id) {
                if (!parent) {
                    return;
                }
                var style = doc.getElementById(id);
                if (!style) {
                    return;
                }
                parent.removeChild(style);
            }
            addStyle(getParent(), STYLE_ID, style);
            setTimeout(function () {
                removeStyle(getParent(), STYLE_ID);
            }, timeout);
        }(window, document, "#heroimage {opacity: 0 !important}", 8000));
    </script>
    <script type="text/javascript">
        var oPageName = "MetLife.com ";
        var oPID = 18661;
    </script>
    <script src="https://assets.adobedtm.com/launch-EN9af077367c0244eaa0941827fe2f1746.min.js"></script>
    <script type="text/javascript"
        src="https://www.metlife.co.kr/content/dam/metlife/kr/author/homepage/alert-notification-message-custom-single-pageonly-v2.js"
        defer></script>
    
     <link rel="stylesheet"        href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,700|Noto+Sans:400,700&amp;subset=korean,latin-ext" />
    <link rel="stylesheet" href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/clientlibs/clientlib-language/ko.min.css"        type="text/css">
    <link rel="stylesheet" href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/clientlibs/clientlib-base/global.min.css"        type="text/css">
    <link rel="stylesheet" href="https://www.metlife.co.kr/content/dam/metlife/kr/author/homepage/metlife-kr-homepage.css" />
    <link rel="stylesheet" href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/renew_2022/renew_2022.css">
    <script type="text/javascript" src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/clientlibs/clientlib-jquery.min.js"       defer></script>
    <script type="text/javascript" src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/clientlibs/clientlib-base/global.min.js"        defer></script>
	<!--<script type="text/javascript" src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/immersive-brand-navigation/clientlibs.min.js"                    defer></script>-->
    <script type="text/javascript" src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/header/clientlibs.min.js" defer></script>
    <link rel="stylesheet" href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/header/clientlibs.min.css"        type="text/css">
    
    <link rel="stylesheet"                   href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/immersive-brand-navigation/clientlibs.min.css"                    type="text/css">


    </head>
<body>
    <h1 class="seo-hidden" aria-hidden="true">메트라이프</h1>
    <script type="text/javascript" defer>
        var WRInitTime = (new Date()).getTime();
    </script>
    <header class="header ">
        <div class="container">
            <div class="row">
                <div class="col-12 header__container">
                    <div class="header__mobile-navigation">
                        <a href="#" tabindex="0" class="header__navigation-hamburger" role="button"
                            aria-labelledby="navmenu">
                            <svg class="icon icon-menu header__navigation-trigger" aria-hidden="true" tabindex="-1"
                                focusable="false">
                                <title id="navmenu">Navigation</title>
                                <use xlink:href="css/icons-metlife.svg#icon-menu" aria-hidden="true"
                                    tabindex="-1" focusable="false"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="header__logo-container">
                        <a href="http://3.36.83.6/METLIFE_PROTOTYPE/main.php" target="_self">
                            <img src="https://metlifewelfare.org/images/app/logo.png"
                                alt="Metlife logo" class="header__logo" />
                        </a>
                    </div>
                    <div class="logo-divider"></div>
                    <div class="d-none d-sm-none d-md-flex d-lg-flex header__navigation-container">
                        <div role="button" tabindex="0" class="header__navigation-container-menu-item"
                            data-nav-section="section1" aria-controls="section1">
                            <div class="header__navigation-container-menu-item-title font-eyebrow-1">
                                재단 사업 및 활동
                                <svg class="icon icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false"
                                    aria-label="Aria Label" role="button">
                                    <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-down"
                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                </svg>
                                <span class="sr-only menu-state">: Collapsed</span>
                            </div>
                        </div>
                        <div role="button" tabindex="0" class="header__navigation-container-menu-item"
                            data-nav-section="section2" aria-controls="section2">
                            <div class="header__navigation-container-menu-item-title font-eyebrow-1">
                                재단 소식
                                <svg class="icon icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false"
                                    aria-label="Aria Label" role="button">
                                    <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-down"
                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                </svg>
                                <span class="sr-only menu-state">: Collapsed</span>
                            </div>
                        </div>
                        <div role="button" tabindex="0" class="header__navigation-container-menu-item"
                            data-nav-section="section3" aria-controls="section3">
                            <div class="header__navigation-container-menu-item-title font-eyebrow-1">
                                재단 소개
                                <svg class="icon icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false"
                                    aria-label="Aria Label" role="button">
                                    <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-down"
                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                </svg>
                                <span class="sr-only menu-state">: Collapsed</span>
                            </div>
                        </div>
                    </div>
                    <div class="header__utilities">
                        <div class="header__login-container">
                            <div class="header__login-trigger linkOnly" title="로그인 ">
                                <a class="header__login-trigger-label" href="https://cyber.metlife.co.kr/login"
                                    target="_blank" aria-label="로그인 ">
                                    <svg class="icon icon-profile2" aria-hidden="true" tabindex="-1" focusable="false">
                                        <title>로그인 </title>
                                        <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-profile2"
                                            aria-hidden="true" tabindex="-1" focusable="false"></use>
                                    </svg>
                                    <span class="header__login-label font-meta-1">
                                        로그인
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="header__search-container" title="" data-target="search" aria-label="Search"
                            tabindex="0" role="button">
                            <div class="header__search-trigger">
                                <input type="hidden" id="isLucene" value="true" />
                                <svg class="icon icon-search" aria-hidden="true" tabindex="-1" focusable="false"
                                    aria-label="Search" role="button">
                                    <title>Search</title>
                                    <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-search" aria-hidden="true"
                                        tabindex="-1" focusable="false"></use>
                                </svg>
                                <span class="d-sm-none header__search-label font-meta-1" aria-hidden="true">
                                    Search
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navigation__menu nav-hidden">
        <div class="container">
            <div class="row navigation__menu_mobile-nav-header d-sm-none d-md-none d-lg-none">
                <div class="header__logo-container">
                <a href="http://3.36.83.6/METLIFE_PROTOTYPE/main.php" target="_self">
                            <img src="https://metlifewelfare.org/images/app/logo.png"
                                alt="Metlife logo" class="header__logo" />
                        </a>
                </div>
                <svg class="icon icon-close" tabindex="0" role="button" aria-labelledby="title">
                    <title id="title">close</title>
                    <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-close"></use>
                </svg>
            </div>
            <div class="row navigation__menu_mobile-utility d-md-none d-lg-none">
                <div class="header__login-container">
                    <div class="header__login-trigger linkOnly" title="로그인 ">
                        <a class="header__login-trigger-label" href="https://cyber.metlife.co.kr/login" target="_blank"
                            aria-label="로그인 ">
                            <svg class="icon icon-profile2" aria-hidden="true" tabindex="-1" focusable="false">
                                <title>로그인 </title>
                                <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-profile2" aria-hidden="true"
                                    tabindex="-1" focusable="false"></use>
                            </svg>
                            <span class="header__login-label font-meta-1">
                                로그인
                            </span>
                        </a>
                    </div>
                </div>
       
                <svg class="icon icon-close d-none d-sm-block" tabindex="0" role="button"
                    aria-labelledby="hamburger-tab-close">
                    <title id="hamburger-tab-close">Close</title>
                    <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-close"></use>
                </svg>
            </div>
            <div class="row navigation__menu-row d-md-none d-lg-none section1" data-section="section1" id="section1">
                <div class="navigation__menu-item-title font-cta-7">재단 사업 및 활동</div>
                <div
                    class="col-md-3 col-lg-3 navigation__menu-nested-nav-legend d-none d-sm-none d-md-block d-lg-block">
                    <div class="navigation__menu-nested-nav-legend-title font-cta-1 category active" tabindex="0"
                        aria-label="재단 사업" data-section="재단 사업" role="button" aria-controls="category_0">
                        재단 사업
                        <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false">
                            <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-right" aria-hidden="true"
                                tabindex="-1" focusable="false"></use>
                        </svg>
                    </div>
                    <div class="navigation__menu-nested-nav-legend-title font-cta-1 category " tabindex="0"
                        aria-label="사업 성과" data-section="사업 성과" role="button" aria-controls="category_1">
                        사업 성과
                        <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false">
                            <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-right" aria-hidden="true"
                                tabindex="-1" focusable="false"></use>
                        </svg>
                    </div>
                    <div class="navigation__menu-nested-nav-legend-title font-cta-1  " aria-label="지난 사업"
                        data-section="지난 사업" role="button" aria-controls="category_2">
                        <a href="about-us/metlife-story/corporate-story1/corporate-20220124" target="_self">지난 사업</a>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-9 navigation__menu-nested-nav-link-section">
                    <div class="navigation__menu-nested-nav-link-section-column active" data-section-title="재단 사업"
                        role="region" aria-labelledby="section_1_0" id="category_1_0">
                        <div class="navigation__menu-nested-nav-link-section-mobile-title font-cta-1 d-md-none d-lg-none"
                            role="button" aria-expanded="false" tabindex="0" aria-role="accordion" id="section_1_0"
                            aria-label="재단 사업" data-section-title="재단 사업">
                            재단 사업
                            <svg class="icon icon-chevron-down" tabindex="-1" aria-hidden="true" focusable="false">
                                <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-down" aria-hidden="true"
                                    tabindex="-1" focusable="false"></use>
                            </svg>
                        </div>
                        <div
                            class="d-md-block d-lg-block col-md-4 navigation__menu-nested-nav-link-section-column-links">
                            <div class="navigation__menu-nested-nav-link-section-column-links--link category-link">
                                <a target="_self">Financial Health</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/life/succession-life/" target="_self">Financial Health</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/life/100-USD-whole-life/" target="_self">재무건강 연구 및 캠페인</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/life/universal-USD-whole-life/" target="_self">금융교육</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/life/dollar-ceo/" target="_self">Inclusion Plus</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/life/simple-dollar-ceo/" target="_self">Financial Health 포럼</a>
                            </div>
                        </div>
                        <div
                            class="d-md-block d-lg-block col-md-4 navigation__menu-nested-nav-link-section-column-links">
                            <div class="navigation__menu-nested-nav-link-section-column-links--link category-link">
                                <a target="_self">환경</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/health/360-total/" target="_self">환경인식 개선 캠페인</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/health/health-simple/" target="_self">교실숲 스쿨챌린지</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/health/GI-whole-life/" target="_self">산불피해 및 생태 숲 복원</a>
                            </div>
                        </div>
                        <div
                            class="d-md-block d-lg-block col-md-4 navigation__menu-nested-nav-link-section-column-links">
                            <div class="navigation__menu-nested-nav-link-section-column-links--link category-link">
                                <a target="_self">지역사회나눔</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/mini/mini003/" target="_self">지역사회나눔</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/mini/mini004/" target="_self">Walk to Help 캠페인</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/mini/mini005/" target="_self">언텍트사회공헌</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/mini/mini006/" target="_self">MetLife D.I.Y</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/mini/mini001/" target="_self">암투병소방관 지원 기부 캠페인</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/mini/mini002/" target="_self">MetLife Build Home</a>
                            </div>
                        </div>
                        <div
                            class="d-md-block d-lg-block col-md-4 navigation__menu-nested-nav-link-section-column-links">
                            <div class="navigation__menu-nested-nav-link-section-column-links--link category-link">
                                <a target="_self">문화예술나눔</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/pension/variable-annuity-donghaeng/" target="_self">문화예술나눔</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/pension/kids-vul/" target="_self">문화예술단체 역량강화 지원</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="products/pension/kids-vul/" target="_self">문화예술 티켓나눔</a>
                            </div>
                        </div>
                      
                    </div>
                    <div class="navigation__menu-nested-nav-link-section-column " data-section-title="사업 성과"
                        role="region" aria-labelledby="section_1_1" id="category_1_1">
                        <div class="navigation__menu-nested-nav-link-section-mobile-title font-cta-1 d-md-none d-lg-none"
                            role="button" aria-expanded="false" tabindex="0" aria-role="accordion" id="section_1_1"
                            aria-label="사업 성과" data-section-title="사업 성과">
                            사업 성과
                            <svg class="icon icon-chevron-down" tabindex="-1" aria-hidden="true" focusable="false">
                                <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-down" aria-hidden="true"
                                    tabindex="-1" focusable="false"></use>
                            </svg>
                        </div>
                        <div
                            class="d-md-block d-lg-block col-md-4 navigation__menu-nested-nav-link-section-column-links">
                            <div class="navigation__menu-nested-nav-link-section-column-links--link category-link">
                                <a target="_self">재단 연혁</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="benefit/variables/silverplan/" target="_self">2016 ~ 현재</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="benefit/variables/donghaeng/" target="_self">2010 ~ 2015</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="benefit/variables/pension/" target="_self">2005 ~ 2009</a>
                            </div>
                        </div>
                        <div
                            class="d-md-block d-lg-block col-md-4 navigation__menu-nested-nav-link-section-column-links">
                            <div class="navigation__menu-nested-nav-link-section-column-links--link category-link">
                                <a href="benefit/360health/" target="_self">기부금 활용 실적</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="benefit/variables/silverplan/" target="_self">2021년</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="benefit/variables/silverplan/" target="_self">2020년</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="benefit/variables/silverplan/" target="_self">2019년</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="benefit/variables/silverplan/" target="_self">2018년</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="benefit/variables/silverplan/" target="_self">2017년</a>
                            </div>
                            <div class="navigation__menu-nested-nav-link-section-column-links--link">
                                <a href="benefit/variables/silverplan/" target="_self">2016년</a>
                            </div>
                        </div>
                        <div
                            class="d-md-block d-lg-block col-md-4 navigation__menu-nested-nav-link-section-column-links">
                            <div class="navigation__menu-nested-nav-link-section-column-links--link category-link">
                                <a target="_self">사회 공헌 성과</a>
                            </div>
                        </div>
                    </div>
                    <div class="navigation__menu-nested-nav-link-section-column " data-section-title="지난 사업"
                        role="region" aria-labelledby="section_1_2" id="category_1_2">
                        <div class="navigation__menu-nested-nav-link-section-mobile-title link-nav font-cta-1 d-md-none d-lg-none"
                            data-section-title="지난 사업">
                            <a href="about-us/metlife-story/corporate-story1/corporate-20220124" target="_self">지난
                                사업</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation__row-separator d-md-none d-lg-none"></div>
          
            <div class="row navigation__menu-row d-md-none d-lg-none section2" data-section="section2" id="section2">
                <div class="navigation__menu-item-title font-cta-7">재단 소식</div>
                <div class="navigation__menu-promo-image col-3 d-none d-sm-none d-md-block d-lg-block">
                    <div class="bg"
                        style="background-image: url('https://www.metlife.co.kr/content/dam/metlife/kr/author/about-us/about-metlife/ceo-message/header-fixes-202112.png')">
                    </div>
                </div>
                <div class="navigation__menu-promo-content col-3">
                    <div class="navigation__menu-promo-content__container">
                        <div class="font-header-4 navigation__menu-promo-content-headline " aria-label="2021년 암투병 소방관분들의 치료비를 지원한 기부캠페인 이야기">
                            2021년 암투병 소방관분들의 치료비를 지원한 기부캠페인 이야기
                        </div>
                        <!-- <div class="font-body-2  navigation__menu-promo-content-copy">
                            <p>예상치 못한 상황 속에서도 당신은 가장 중요한 것에만 집중하세요. 메트라이프가 있으니까요.</p>
                        </div> -->
                        <a class="navigation__menu-promo-content-cta font-cta-1"
                            href="https://www.metlife.co.kr/about-us/about-metlife/metlife-from-today-on/"
                            target="_self">
                            <span>자세히 보기</span>
                            <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false">
                                <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-right" aria-hidden="true"
                                    tabindex="-1" focusable="false"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 navigation__menu-nestedLinkList">
                    <div class="navigation__menu-list-divider"></div>
                    <div class="navigation__menu-nestedLinkList-section">
                        <div class="navigation__menu-nested-nav-link-section-mobile-title font-cta-1 d-md-none d-lg-none"
                            role="button" aria-expanded="false" tabindex="0" aria-role="accordion" aria-label="재단소식"
                            data-section-title="재단소식">
                            재단소식
                            <svg class="icon icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false">
                                <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-down" aria-hidden="true"
                                    tabindex="-1" focusable="false"></use>
                            </svg>
                        </div>
                        <span
                            class="navigation__menu-list-nestedLinks-section-title d-none d-sm-none d-md-block d-lg-block font-eyebrow-4 ">
                            재단소식
                        </span>
                        <div class="navigation__menu-nested-nav-link-section-column-links d-md-block d-lg-block"
                            data-section-title="재단소식">
                            <div class="navigation__menu-list-nestedLinks-section-link">
                                <a href="about-us/metlife-worldwide/" target="_self"><font color='red'><b>공지사항</b></font></a>
                            </div>
                            <div class="navigation__menu-list-nestedLinks-section-link">
                                <a href="about-us/about-metlife/" target="_self">뉴스</a>
                            </div>
                            <div class="navigation__menu-list-nestedLinks-section-link">
                                <a href="about-us/esg/" target="_self">자료실</a>
                            </div>
                        </div>
                    </div>
                    <div class="navigation__menu-nestedLinkList-section">
                        <div class="navigation__menu-nested-nav-link-section-mobile-title font-cta-1 d-md-none d-lg-none"
                            role="button" aria-expanded="false" tabindex="0" aria-role="accordion" aria-label="나눔 스토리"
                            data-section-title="나눔 스토리">
                            나눔 스토리
                            
                        </div>
                        <span
                            class="navigation__menu-list-nestedLinks-section-title d-none d-sm-none d-md-block d-lg-block font-eyebrow-4 ">
                            나눔 스토리
                        </span>
                        <div class="navigation__menu-nested-nav-link-section-column-links d-md-block d-lg-block"
                            data-section-title="나눔 스토리">
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation__row-separator d-md-none d-lg-none"></div>
            <div class="row navigation__menu-row d-md-none d-lg-none section3" data-section="section3" id="section3">
                <div class="navigation__menu-item-title font-cta-7">재단 소개</div>
                <div class="navigation__menu-promo-image col-3 d-none d-sm-none d-md-block d-lg-block">
                    <div class="bg"
                        style="background-image: url('/content/dam/metlife/kr/author/about-us/about-metlife/ceo-message/header-fixes-202112.png')">
                    </div>
                </div>
                <div class="navigation__menu-promo-content col-3">
                    <div class="navigation__menu-promo-content__container">
                        <div class="font-header-4 navigation__menu-promo-content-headline " aria-label="오늘부터, 메트라이프">
                            오늘부터, 메트라이프
                        </div>
                        <div class="font-body-2  navigation__menu-promo-content-copy">
                            <p>예상치 못한 상황 속에서도 당신은 가장 중요한 것에만 집중하세요. 메트라이프가 있으니까요.</p>
                        </div>
                        <a class="navigation__menu-promo-content-cta font-cta-1"
                            href="https://www.metlife.co.kr/about-us/about-metlife/metlife-from-today-on/"
                            target="_self">
                            <span>오늘부터, 메트라이프</span>
                            <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false">
                                <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-right" aria-hidden="true"
                                    tabindex="-1" focusable="false"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 navigation__menu-nestedLinkList">
                    <div class="navigation-pc-menu-nestedLinkList">
                        <div class="navigation__menu-list-nestedLinks-section-link">
                            <a href="about-us/metlife-worldwide/" target="_self">비전과 전략</a>
                        </div>
                        <div class="navigation__menu-list-nestedLinks-section-link">
                            <a href="about-us/about-metlife/" target="_self">함께하는 사람들</a>
                        </div>
                        <div class="navigation__menu-list-nestedLinks-section-link">
                            <a href="about-us/esg/" target="_self">MetLife 금융 그룹</a>
                        </div>
                    </div>
                    <div class="navigation__menu-list-divider"></div>
               
                    <div class="navigation-pc-menu-nestedLinkList">
                        <div class="navigation__menu-list-nestedLinks-section-link">
                            <a href="career/careers/" target="_self">인사말</a>
                        </div>
                        <div class="navigation__menu-list-nestedLinks-section-link">
                            <a href="career/fsr-recruiting-process/" target="_self">찾아 오시는 길</a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </nav>
    
    <section class="header__search-overlay-section" role="dialog" aria-describedby="search-overlay" tabindex="-1">
        <div class="header__search-overlay d-none">
            <div class="container">
                <div class="row">
                    <div tabindex="-1" id="search-overlay" aria-hidden="true" aria-label="Search" title="Search">
                    </div>
                    <div class="col-12">
                        <div class="search-overlay__close">
                            <a href="#" tabindex="-1" aria-hidden="true" role="button" aria-label="Close">
                                <svg class="icon icon-close" aria-hidden="true" tabindex="-1" focusable="false">
                                    <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-close" aria-hidden="true"
                                        tabindex="-1" focusable="false"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="search-trigger" title="SEARCH" data-target="search">
                            <input id="isLucene" type="hidden" value="true" />
                            <div class="searchHeader-label font-cta-2 font-content-link-1-sm font-content-link-1-md">
                                Search
                            </div>
                            <form id="metSearchForm" role="search" class="search-trigger__container"
                                name="metSearchForm">
                                <input id="searchInPage"
                                    class="search-trigger__search-box font-header-1 font-header-2 font-content-link-1 search_openTwo"
                                    type="text" autocomplete="off" aria-describedby="autocomp"
                                    onkeyup="setThemePageIDS();ss_handleKey(event);drawTextBox('',event);"
                                    placeholder="Search" name="query" data-placeholder="" aria-label="Search"
                                    aria-autocomplete="both" aria-haspopup="false" autocapitalize="off"
                                    autocorrect="off" spellcheck="false" aria-activedescendant="search" />
                                <span id="autocomp" aria-atomic="true" class="sr-only">SR</span>
                                <a id="homepage__global-searchLink" class="search_location_image" href="#" role="button"
                                    aria-label="Search">
                                    <svg class="icon brand-1st icon-search-overlay js-searchIcon" aria-hidden="true"
                                        tabindex="-1" focusable="false">
                                        <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-search"
                                            aria-hidden="true" tabindex="-1" focusable="false"></use>
                                    </svg>
                                </a>
                                <div class="search-strip"></div>
                                <input id="overlayerback" class="search-trigger__search-box" autocomplete="off"
                                    type="text" aria-label="Search" />
                                <div id="suggestionsbox" class="suggestionsbox ">
                                    <table id="search_suggest_table" role="presentation" class="ss-gac-table">
                                        <tbody id="search_suggest"
                                            class="ss-gac-m font-content-link-1 font-header-5-sm font-header-4-sm"
                                            style="visibility: hidden;"></tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="overlay-search-results-container" role="region" aria-label="Search Results">
                            <div class="overlay-search-results-container__top " role="alert">
                                <div class="form-item__display display-text d-none">
                                    <div class="search-info">
                                        <div class="search-count">
                                            <span>0</span>
                                            of
                                            <span class="total-count">0</span>
                                            Search Results
                                        </div>
                                        <span class="d-none d-sm-block d-md-block d-lg-block">&nbsp;| &nbsp;</span>
                                        <span class="display-label">Displaying</span>
                                        <div class="form-icon-wrapper ">
                                            <select
                                                class="form-item__display__page-count page-count drop-down form-control "
                                                aria-label="results">
                                            </select>
                                            <svg class="icon icon-caret-down" aria-hidden="true" tabindex="-1"
                                                focusable="false">
                                                <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-caret-down"
                                                    aria-hidden="true" tabindex="-1" focusable="false"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="search-results-layout d-none d-sm-block d-md-block d-lg-block">
                                        <span tabindex="0" class="icon icon-search-list active outline-lg" role="button"
                                            aria-pressed="true" aria-label="Aria Label">
                                            <svg class="search_svg">
                                                <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-search-list"
                                                    aria-hidden="true" tabindex="-1" focusable="false"></use>
                                            </svg>
                                        </span>
                                        <span class="pipe"></span>
                                        <span tabindex="0" class="icon icon-search-grid outline-lg" role="button"
                                            aria-pressed="false" aria-label="Aria Label">
                                            <svg class="search_svg">
                                                <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-search-grid"
                                                    aria-hidden="true" tabindex="-1" focusable="false"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-search-results-container__results">
                                <div class="no-results d-none">
                                    <div class="error-title no-results-title font-content-link-3">No Results</div>
                                    <div class="font-body-3 ">
                                        <p>No Results/Did you mean Content</p>
                                    </div>
                                </div>
                                <div class="search-results-container__correction-text d-none font-content-link-3">
                                    <div class="error-title suggestion-title">
                                        Did you mean title "<span class="suggestion-val"></span>"
                                    </div>
                                    <div class="suggestion-text">
                                        Did you mean title <span class="js-searchSuggestion"></span> ?
                                    </div>
                                    <span class="font-body-3">
                                        <p>No Results/Did you mean Content</p>
                                    </span>
                                </div>
                                <input type="hidden" aria-hidden="true" class="results-first-pagination"
                                    value="first" />
                                <input type="hidden" aria-hidden="true" class="results-last-pagination" value="last" />
                                <input type="hidden" aria-hidden="true" class="results-prev-pagination"
                                    value="previous" />
                                <input type="hidden" aria-hidden="true" class="results-next-pagination" value="next" />
                                <input type="hidden" aria-hidden="true" class="results-current-pagination"
                                    value="current" />
                                <nav class="results_pagination d-none" role="navigation" aria-label="Pagination"
                                    data-label-first="first" data-label-last="last" data-label-prev="previous"
                                    data-label-next="next" data-goto-text="go to" data-current-text="go to">
                                </nav>
                                <div id="pageNum" aria-live="polite" class="sr-only"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


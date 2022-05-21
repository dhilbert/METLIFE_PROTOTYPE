




<!DOCTYPE HTML>
<html lang="en">
    

<head>
    




<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no"/>




    <title>Live Example</title>
    <meta name="title" content="Live Example"/>













    
        <meta name="robots" content="index, follow"/>
    





    <link rel="canonical" href="https://design.metlife.com/resources/responsive-web/components/content-container/3-column-article-grid/live-example/"/>







    
        
        
        

        
            <meta property="og:title" content="Live Example"/>
        

        <meta property="og:site_name" content="MetLife"/>

        

        
            <meta property="og:url" content="https://design.metlife.com/resources/responsive-web/components/content-container/3-column-article-grid/live-example/"/>
        

        

        

        
            <meta property="og:description" content="Live Example"/>
        

        

        
            <meta property="og:image" content="http://www.metlife.com/content/dam/metlifecom/us/icons-header/MetLife.png"/>
        

        

        
            <meta property="og:image:secure_url" content="https://www.metlife.com/content/dam/metlifecom/us/icons-header/MetLife.png"/>
        

        <meta property="og:image:width" content="1200"/>

        <meta property="og:image:height" content="630"/>

        <meta property="og:type" content="website"/>

        
        <meta property="twitter:card" content="summary"/>

        <meta property="twitter:site" content="Metlife"/>

        

        

        
            <meta property="twitter:title" content="Live Example"/>
        

        

        

        
            <meta property="twitter:description" content="Live Example"/>
        

        

        
            <meta property="twitter:url" content="https://design.metlife.com/resources/responsive-web/components/content-container/3-column-article-grid/live-example/"/>
        

        

        
            <meta property="twitter:image" content="http://www.metlife.com/content/dam/metlifecom/us/icons-header/MetLife.png"/>
        

        
        <meta name="weibo:type" content="Webpage"/>
    


<meta name="format-detection" content="telephone=no"/>
<meta name="format-detection" content="date=no"/>
<meta name="format-detection" content="address=no"/>
<meta name="format-detection" content="email=no"/>






    <link rel="shortcut icon" href="https://design.metlife.com/static/images/favicon.ico" type="image/x-icon"/>

    







<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese"/>

    
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/clientlibs/clientlib-language/global.min.css" type="text/css">






    
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/clientlibs/clientlib-base/global.min.css" type="text/css">












    
    
        <link rel="stylesheet" href="https://design.metlife.com/content/dam/metlifecom/uxdesign/assets/css/uxdesign_overrides-v3.css"/>
    

    








    
    <script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/clientlibs/clientlib-jquery.min.js" defer></script>





    
    <script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/clientlibs/clientlib-base/global.min.js" defer></script>









<![if IE]>
<script type="text/javascript">
    //CustomEvent polyfill for IE compatibility
    (function () {

        if (typeof window.CustomEvent === "function") return false;

        function CustomEvent(event, params) {
            params = params || {bubbles: false, cancelable: false, detail: undefined};
            var evt = document.createEvent('CustomEvent');
            evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
            return evt;
        }

        CustomEvent.prototype = window.Event.prototype;

        window.CustomEvent = CustomEvent;
    })();
</script>
<![endif]>

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
    var pagePath = "/content/metlife/uxdesign/homepage/resources/responsive-web/components/content-container/3-column-article-grid/live-example";
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
                pageTemplateType: "/apps/MetlifeMarketGlobal/templates/uxdesign/blank-content",
                pageType:"Unspecified",
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











    
        <script src="https://design.metlife.com//assets.adobedtm.com/launch-EN0379f0d4da0c425b813fd7573a3070a7.min.js"></script>
    



    




    
    
        <script type="text/javascript" src="https://design.metlife.com/content/dam/metlifecom/uxdesign/assets/js/uxdesign.js" defer></script>
    




    








    





</head>
    



<body>
	

<h1 class="seo-hidden" aria-hidden="true">Live Example</h1>
	




	




	









    
    <script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/header/clientlibs.min.js" defer></script>



    
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/header/clientlibs.min.css" type="text/css">







    <a href="#skiptomaincontent" class="skip" role="button">Skip Navigation</a>



<header class="header ">
    <div class="container">
        
        <div class="row">
            <div class="col-12 header__container">
                
                    <div class="header__mobile-navigation">
                        <a href="#" tabindex="0" class="header__navigation-hamburger" role="button" aria-labelledby="navmenu">
                            <svg class="icon icon-menu header__navigation-trigger" aria-hidden="true" tabindex="-1" focusable="false">
                                <title id="navmenu">Navigation</title>
                                <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-menu" aria-hidden="true" tabindex="-1" focusable="false"></use>
                            </svg>
                        </a>
                    </div>
                
                
                    




<div class="header__logo-container">
    <a href="https://design.metlife.com/" target="_self">
        <img src="https://design.metlife.com/content/dam/metlifecom/uxdesign/assets/img/Icons/des_logo_black_new.svg" alt="MetLife logo with text: MetLife Global Design System" class="header__logo"/>
    </a>
</div>

                    <div class="logo-divider"></div>
                
                
                    



<div class="d-none d-sm-none d-md-flex d-lg-flex header__navigation-container">
    
        <div role="button" tabindex="0" class="header__navigation-container-menu-item" data-nav-section="section1" aria-controls="section1">
            <div class="header__navigation-container-menu-item-title font-eyebrow-1">
                FOUNDATIONS
                <svg class="icon icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false" aria-label="Navigation" role="button">
                    <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false"></use>
                </svg>
                <span class="sr-only menu-state">: Collapsed</span>
            </div>
        </div>
    
    
        <div role="button" tabindex="0" class="header__navigation-container-menu-item" data-nav-section="section2" aria-controls="section2">
            <div class="header__navigation-container-menu-item-title font-eyebrow-1">
                RESOURCES
                <svg class="icon icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false" aria-label="Navigation" role="button">
                    <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false"></use>
                </svg>
                <span class="sr-only menu-state">: Collapsed</span>
            </div>
        </div>
    
    
        <div role="button" tabindex="0" class="header__navigation-container-menu-item" data-nav-section="section3" aria-controls="section3">
            <div class="header__navigation-container-menu-item-title font-eyebrow-1">
                SHOWCASE
                <svg class="icon icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false" aria-label="Navigation" role="button">
                    <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false"></use>
                </svg>
                <span class="sr-only menu-state">: Collapsed</span>
            </div>
        </div>
    
    
        <div role="button" tabindex="0" class="header__navigation-container-menu-item" data-nav-section="section4" aria-controls="section4">
            <div class="header__navigation-container-menu-item-title font-eyebrow-1">
                XD IN PRACTICE
                <svg class="icon icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false">
                    <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false"></use>
                </svg>
                <span class="sr-only menu-state">: Collapsed</span>
            </div>
        </div>
    
</div>
                
                
                    <div class="header__utilities">
                        
                        
                            



<div class="header__search-container" title="" data-target="search" aria-label="Search Overlay " tabindex="0" role="button">
    <div class="header__search-trigger">
        <input type="hidden" id="isLucene" value="true"/>
        <svg class="icon icon-search" aria-hidden="true" tabindex="-1" focusable="false" aria-label="Enter your search here" role="button">
            <title>SEARCH</title>
            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-search" aria-hidden="true" tabindex="-1" focusable="false"></use>
        </svg>
        <span class="d-sm-none header__search-label font-meta-1" aria-hidden="true">
            SEARCH
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
    <a href="https://design.metlife.com/" target="_self">
        <img src="https://design.metlife.com/content/dam/metlifecom/uxdesign/assets/img/Icons/des_logo_black_new.svg" alt="MetLife logo with text: MetLife Global Design System" class="header__logo"/>
    </a>
</div>

            
            <svg class="icon icon-close" tabindex="0" role="button" aria-labelledby="title">
                <title id="title">close</title>
                <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-close"></use>
            </svg>
        </div>
        <div class="row navigation__menu_mobile-utility d-md-none d-lg-none">
            
            
                <div class="d-sm-none">
                    



<div class="header__search-container" title="" data-target="search" aria-label="Search Overlay " tabindex="0" role="button">
    <div class="header__search-trigger">
        <input type="hidden" id="isLucene" value="true"/>
        <svg class="icon icon-search" aria-hidden="true" tabindex="-1" focusable="false" aria-label="Enter your search here" role="button">
            <title>SEARCH</title>
            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-search" aria-hidden="true" tabindex="-1" focusable="false"></use>
        </svg>
        <span class="d-sm-none header__search-label font-meta-1" aria-hidden="true">
            SEARCH
        </span>
    </div>
</div>
                </div>
            
            <svg class="icon icon-close d-none d-sm-block" tabindex="0" role="button" aria-labelledby="hamburger-tab-close">
                <title id="hamburger-tab-close">Close</title>
                <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-close"></use>
            </svg>
        </div>
        <div class="row navigation__menu-row d-md-none d-lg-none section1" data-section="section1" id="section1">
            <div class="navigation__menu-item-title font-cta-7">FOUNDATIONS</div>
            
                
                    <div class="navigation__menu-promo-image col-3 d-none d-sm-none d-md-block d-lg-block">
                        <div class="bg" style="background-image: url('')"></div>
                    </div>
                    <div class="navigation__menu-promo-content col-3">
                        <div class="navigation__menu-promo-content__container">
                            <div class="font-header-4 navigation__menu-promo-content-headline " aria-label="Foundations">
                                Foundations
                            </div>
                            <div class="font-body-2  navigation__menu-promo-content-copy">
                                <p>See the standards we always follow and find additional guidance to help you create cohesive digital experiences that are uniquely MetLife.</p>

                            </div>
                            <a class="navigation__menu-promo-content-cta font-cta-1" href="https://design.metlife.com/foundations/" target="_self">
                                <span>Overview</span>
                                <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false">
                                    <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                        <div class="col-12 col-md-6 col-lg-6 navigation__menu-nestedLinkList">
							<div class="navigation__menu-list-divider"></div>
                            
                            
                                <div class="navigation__menu-nestedLinkList-section">
                                    
                                    <div class="navigation__menu-nested-nav-link-section-mobile-title font-cta-1 d-md-none d-lg-none" role="button" aria-expanded="false" tabindex="0" aria-role="accordion" aria-label="Getting Started" data-section-title="Getting Started">
                                        Getting Started
                                        <svg class="icon icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false">
                                            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                        </svg>
                                    </div>
                                    
                                        
                                        
                                            <span class="navigation__menu-list-nestedLinks-section-title d-none d-sm-none d-md-block d-lg-block font-eyebrow-4 ">
                                                Getting Started
                                            </span>
                                        
                                    
                                    
                                        <div class="navigation__menu-nested-nav-link-section-column-links d-md-block d-lg-block" data-section-title="Getting Started">
                                            
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/foundations/getting-started" target="_self">Using the Global Design System</a>
                                                    </div>
                                                
                                            
                                        </div>
                                    
                                </div>
                            
                                <div class="navigation__menu-nestedLinkList-section">
                                    
                                    <div class="navigation__menu-nested-nav-link-section-mobile-title font-cta-1 d-md-none d-lg-none" role="button" aria-expanded="false" tabindex="0" aria-role="accordion" aria-label="Standards" data-section-title="Standards">
                                        Standards
                                        <svg class="icon icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false">
                                            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                        </svg>
                                    </div>
                                    
                                        
                                        
                                            <span class="navigation__menu-list-nestedLinks-section-title d-none d-sm-none d-md-block d-lg-block font-eyebrow-4 ">
                                                Standards
                                            </span>
                                        
                                    
                                    
                                        <div class="navigation__menu-nested-nav-link-section-column-links d-md-block d-lg-block" data-section-title="Standards">
                                            
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/foundations/standards/logo" target="_self">Logo</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/foundations/standards/typography" target="_self">Typography</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/foundations/standards/color" target="_self">Color</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/foundations/standards/user-interface-elements" target="_self">User Interface Elements</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/foundations/standards/tone-of-voice" target="_self">Tone of Voice</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/foundations/standards/experience-principles" target="_self">Experience Principles</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/foundations/standards/accessibility" target="_self">Accessibility</a>
                                                    </div>
                                                
                                            
                                        </div>
                                    
                                </div>
                            
                                <div class="navigation__menu-nestedLinkList-section">
                                    
                                    <div class="navigation__menu-nested-nav-link-section-mobile-title font-cta-1 d-md-none d-lg-none" role="button" aria-expanded="false" tabindex="0" aria-role="accordion" aria-label="Core Guidance" data-section-title="Core Guidance">
                                        Core Guidance
                                        <svg class="icon icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false">
                                            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                        </svg>
                                    </div>
                                    
                                        
                                        
                                            <span class="navigation__menu-list-nestedLinks-section-title d-none d-sm-none d-md-block d-lg-block font-eyebrow-4 ">
                                                Core Guidance
                                            </span>
                                        
                                    
                                    
                                        <div class="navigation__menu-nested-nav-link-section-column-links d-md-block d-lg-block" data-section-title="Core Guidance">
                                            
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/foundations/core-guidance/illustration" target="_self">Illustration</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/foundations/core-guidance/icons" target="_self">Icons</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/foundations/core-guidance/photography" target="_self">Photography</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/foundations/core-guidance/layout-and-the-grid" target="_self">Layout &amp; Grid</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/foundations/core-guidance/data-visualization" target="_self">Data Visualization</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/foundations/core-guidance/graphics" target="_self">Graphics</a>
                                                    </div>
                                                
                                            
                                        </div>
                                    
                                </div>
                                                        
                        </div>
                    
                    
                
                
            
        </div>
        <div class="navigation__row-separator d-md-none d-lg-none"></div>
        <div class="row navigation__menu-row d-md-none d-lg-none section2" data-section="section2" id="section2">
            <div class="navigation__menu-item-title font-cta-7 ">RESOURCES</div>
            
                
                    <div class="navigation__menu-promo-image col-3 d-none d-sm-none d-md-block d-lg-block">
                        <div class="bg" style="background-image: url('')"></div>
                    </div>
                    <div class="navigation__menu-promo-content col-3">
                        <div class="navigation__menu-promo-content__container">
                            <div class="font-header-4 navigation__menu-promo-content-headline " aria-label="Resources">
                                Resources
                            </div>
                            <div class="font-body-2 navigation__menu-promo-content-copy">
                                <p>Find components, UI kits, and guidance to give you a head start designing digital experiences.<br />
</p>

                            </div>
                            <a class="navigation__menu-promo-content-cta font-cta-1" href="https://design.metlife.com/resources/" target="_self" role="button">
                                <span>Explore</span>
                                <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false">
                                    <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                        <div class="col-12 col-md-6 col-lg-6 navigation__menu-nestedLinkList">
							<div class="navigation__menu-list-divider"></div>
                            
                            
                                <div class="navigation__menu-nestedLinkList-section">
                                    
                                    <div class="navigation__menu-nested-nav-link-section-mobile-title font-cta-1 d-md-none d-lg-none" role="button" aria-expanded="false" tabindex="0" aria-role="accordion" aria-label="Responsive Web Guidance" data-section-title="Responsive Web Guidance">
                                        Responsive Web Guidance
                                        <svg class="icon icon-chevron-down" tabindex="-1" aria-hidden="true">
                                            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-down"></use>
                                        </svg>
                                    </div>
                                    
                                        
                                        
                                            <span class="navigation__menu-list-nestedLinks-section-title d-none d-sm-none d-md-block d-lg-block font-eyebrow-4 ">
                                                Responsive Web Guidance
                                            </span>
                                        
                                    
                                    
                                        <div class="navigation__menu-nested-nav-link-section-column-links d-md-block d-lg-block" data-section-title="Responsive Web Guidance">
                                            
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/resources/responsive-web/components" target="_self">Components</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/resources/responsive-web/templates" target="_self">Templates</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/resources/responsive-web/user-flows" target="_self">User Flows</a>
                                                    </div>
                                                
                                            
                                        </div>
                                    
                                </div>
                            
                                <div class="navigation__menu-nestedLinkList-section">
                                    
                                    <div class="navigation__menu-nested-nav-link-section-mobile-title font-cta-1 d-md-none d-lg-none" role="button" aria-expanded="false" tabindex="0" aria-role="accordion" aria-label="Native App Guidance" data-section-title="Native App Guidance">
                                        Native App Guidance
                                        <svg class="icon icon-chevron-down" tabindex="-1" aria-hidden="true">
                                            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-down"></use>
                                        </svg>
                                    </div>
                                    
                                        
                                        
                                            <span class="navigation__menu-list-nestedLinks-section-title d-none d-sm-none d-md-block d-lg-block font-eyebrow-4 ">
                                                Native App Guidance
                                            </span>
                                        
                                    
                                    
                                        <div class="navigation__menu-nested-nav-link-section-column-links d-md-block d-lg-block" data-section-title="Native App Guidance">
                                            
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/resources/native-app/components" target="_self">Components</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/resources/native-app/user-flows" target="_self">User Flows</a>
                                                    </div>
                                                
                                            
                                        </div>
                                    
                                </div>
                            
                                <div class="navigation__menu-nestedLinkList-section">
                                    
                                    <div class="navigation__menu-nested-nav-link-section-mobile-title font-cta-1 d-md-none d-lg-none" role="button" aria-expanded="false" tabindex="0" aria-role="accordion" aria-label="Marketing &amp; Advertising Guidance" data-section-title="Marketing &amp; Advertising Guidance">
                                        Marketing &amp; Advertising Guidance
                                        <svg class="icon icon-chevron-down" tabindex="-1" aria-hidden="true">
                                            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-down"></use>
                                        </svg>
                                    </div>
                                    
                                        
                                        
                                            <span class="navigation__menu-list-nestedLinks-section-title d-none d-sm-none d-md-block d-lg-block font-eyebrow-4 ">
                                                Marketing &amp; Advertising Guidance
                                            </span>
                                        
                                    
                                    
                                        <div class="navigation__menu-nested-nav-link-section-column-links d-md-block d-lg-block" data-section-title="Marketing &amp; Advertising Guidance">
                                            
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/resources/media-advertising/email" target="_self">Email</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/resources/media-advertising/social" target="_self">Social</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/resources/media-advertising/online-ads" target="_self">Online Ads</a>
                                                    </div>
                                                
                                            
                                        </div>
                                    
                                </div>
                                                        
                        </div>
                    
                    
                
                
            
        </div>
        <div class="navigation__row-separator d-md-none d-lg-none"></div>
        <div class="row navigation__menu-row d-md-none d-lg-none section3" data-section="section3" id="section3">
            <div class="navigation__menu-item-title font-cta-7">SHOWCASE</div>
            
                
                    <div class="navigation__menu-promo-image col-3 d-none d-sm-none d-md-block d-lg-block">
                        <div class="bg" style="background-image: url('')"></div>
                    </div>
                    <div class="navigation__menu-promo-content col-3">
                        <div class="navigation__menu-promo-content__container">
                            <div class="font-header-4 navigation__menu-promo-content-headline " aria-label="Showcase">
                                Showcase
                            </div>
                            <div class="font-body-2  navigation__menu-promo-content-copy">
                                <p>Explore digital brand expression from MetLife teams around the world to give you the creative reference and inspiration to do more great work.<br />
</p>

                            </div>
                            <a class="navigation__menu-promo-content-cta font-cta-1" href="https://design.metlife.com/showcase/" target="_self">
                                <span>Overview</span>
                                <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false">
                                    <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                        <div class="col-12 col-md-6 col-lg-6 navigation__menu-nestedLinkList">
							<div class="navigation__menu-list-divider"></div>
                            
                            
                                <div class="navigation__menu-nestedLinkList-section">
                                    
                                    <div class="navigation__menu-nested-nav-link-section-mobile-title font-cta-1 d-md-none d-lg-none" role="button" aria-expanded="false" tabindex="0" aria-role="accordion" aria-label="Case Study" data-section-title="Case Study">
                                        Case Study
                                        <svg class="icon icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false">
                                            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                        </svg>
                                    </div>
                                    
                                        
                                        
                                            <span class="navigation__menu-list-nestedLinks-section-title d-none d-sm-none d-md-block d-lg-block font-eyebrow-4 ">
                                                Case Study
                                            </span>
                                        
                                    
                                    
                                        <div class="navigation__menu-nested-nav-link-section-column-links d-md-block d-lg-block" data-section-title="Case Study">
                                            
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/showcase/post-purchase-experience" target="_self">Post-Purchase Experience</a>
                                                    </div>
                                                
                                            
                                        </div>
                                    
                                </div>
                            
                                <div class="navigation__menu-nestedLinkList-section">
                                    
                                    <div class="navigation__menu-nested-nav-link-section-mobile-title font-cta-1 d-md-none d-lg-none" role="button" aria-expanded="false" tabindex="0" aria-role="accordion" aria-label="Digital Brand Expression" data-section-title="Digital Brand Expression">
                                        Digital Brand Expression
                                        <svg class="icon icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false">
                                            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-down" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                        </svg>
                                    </div>
                                    
                                        
                                        
                                            <span class="navigation__menu-list-nestedLinks-section-title d-none d-sm-none d-md-block d-lg-block font-eyebrow-4 ">
                                                Digital Brand Expression
                                            </span>
                                        
                                    
                                    
                                        <div class="navigation__menu-nested-nav-link-section-column-links d-md-block d-lg-block" data-section-title="Digital Brand Expression">
                                            
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/showcase/us" target="_self">United States</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/showcase/mexico" target="_self">Mexico</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/showcase/chile" target="_self">Chile</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/showcase/japan" target="_self">Japan</a>
                                                    </div>
                                                
                                            
                                                
                                                    <div class="navigation__menu-list-nestedLinks-section-link">
                                                        <a href="https://design.metlife.com/showcase/south-korea" target="_self">South Korea</a>
                                                    </div>
                                                
                                            
                                        </div>
                                    
                                </div>
                                                        
                        </div>
                    
                    
                
                
            
        </div>
        
            <div class="navigation__row-separator d-md-none d-lg-none"></div>
            <div class="row navigation__menu-row d-md-none d-lg-none section4" data-section="section4">
                <div class="navigation__menu-item-title font-cta-7">XD IN PRACTICE</div>
                
                    
                        <div class="navigation__menu-promo-image col-3 d-none d-sm-none d-md-block d-lg-block">
                            <div class="bg" style="background-image: url('')"></div>
                        </div>
                        <div class="navigation__menu-promo-content col-3">
                            <div class="navigation__menu-promo-content__container">
                                <div class="font-header-4 navigation__menu-promo-content-headline " aria-label="Showcase">
                                    XD in Practice
                                </div>
                                <div class="font-body-2  navigation__menu-promo-content-copy">
                                    <p>Get advice, learn best practices, and discover ways to work efficiently and collaboratively, from planning to execution. </p>

                                </div>
                                <a class="navigation__menu-promo-content-cta" href="https://design.metlife.com/xd-in-practice/" target="_self">
                                    Overview
                                    <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false">
                                        <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        
                            <div class="col-12 col-md-6 col-lg-6 navigation__menu-nestedLinkList">
								<div class="navigation__menu-list-divider"></div>
                                
                                
                                    <div class="navigation__menu-nestedLinkList-section">
                                        
                                        <div class="navigation__menu-nested-nav-link-section-mobile-title font-cta-1 d-md-none d-lg-none" role="button" aria-expanded="false" tabindex="0" aria-role="accordion" aria-label="Responsive Web 101" data-section-title="Responsive Web 101">
                                            Responsive Web 101
                                            <svg class="icon icon-chevron-down" tabindex="-1" aria-hidden="true">
                                                <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-down"></use>
                                            </svg>
                                        </div>
                                        
                                            
                                            
                                                <span class="navigation__menu-list-nestedLinks-section-title d-none d-sm-none d-md-block d-lg-block font-eyebrow-4 ">
                                                    Responsive Web 101
                                                </span>
                                            
                                        
                                        
                                            <div class="navigation__menu-nested-nav-link-section-column-links d-md-block d-lg-block" data-section-title="Responsive Web 101">
                                                
                                                
                                                    
                                                        <div class="navigation__menu-list-nestedLinks-section-link">
                                                            <a href="https://design.metlife.com/xd-in-practice/responsive-web/aem-global-navigation" target="_self">AEM Global Navigation</a>
                                                        </div>
                                                    
                                                
                                                    
                                                        <div class="navigation__menu-list-nestedLinks-section-link">
                                                            <a href="https://design.metlife.com/xd-in-practice/responsive-web/designing-websites" target="_self">Designing Modern Marketing Websites with AEM</a>
                                                        </div>
                                                    
                                                
                                            </div>
                                        
                                    </div>
                                
                                    <div class="navigation__menu-nestedLinkList-section">
                                        
                                        <div class="navigation__menu-nested-nav-link-section-mobile-title font-cta-1 d-md-none d-lg-none" role="button" aria-expanded="false" tabindex="0" aria-role="accordion" aria-label="Keys to Success" data-section-title="Keys to Success">
                                            Keys to Success
                                            <svg class="icon icon-chevron-down" tabindex="-1" aria-hidden="true">
                                                <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-down"></use>
                                            </svg>
                                        </div>
                                        
                                            
                                            
                                                <span class="navigation__menu-list-nestedLinks-section-title d-none d-sm-none d-md-block d-lg-block font-eyebrow-4 ">
                                                    Keys to Success
                                                </span>
                                            
                                        
                                        
                                            <div class="navigation__menu-nested-nav-link-section-column-links d-md-block d-lg-block" data-section-title="Keys to Success">
                                                
                                                
                                                    
                                                        <div class="navigation__menu-list-nestedLinks-section-link">
                                                            <a href="https://design.metlife.com/xd-in-practice/keys-to-success/the-xd-process-step-by-step" target="_self">The XD Process: Step by Step</a>
                                                        </div>
                                                    
                                                
                                                    
                                                        <div class="navigation__menu-list-nestedLinks-section-link">
                                                            <a href="https://design.metlife.com/xd-in-practice/keys-to-success/working-with-designers" target="_self">Working with Designers</a>
                                                        </div>
                                                    
                                                
                                                    
                                                        <div class="navigation__menu-list-nestedLinks-section-link">
                                                            <a href="https://design.metlife.com/xd-in-practice/keys-to-success/understanding-usability" target="_self">Understanding Usability</a>
                                                        </div>
                                                    
                                                
                                                    
                                                        <div class="navigation__menu-list-nestedLinks-section-link">
                                                            <a href="https://design.metlife.com/xd-in-practice/keys-to-success/usability-testing" target="_self">Usability Testing 101</a>
                                                        </div>
                                                    
                                                
                                                    
                                                        <div class="navigation__menu-list-nestedLinks-section-link">
                                                            <a href="https://design.metlife.com/xd-in-practice/keys-to-success/experience-design" target="_self">What is Experience Design? </a>
                                                        </div>
                                                    
                                                
                                                    
                                                        <div class="navigation__menu-list-nestedLinks-section-link">
                                                            <a href="https://design.metlife.com/xd-in-practice/keys-to-success/sharing-insights" target="_self">Using Insights to Shape Experiences</a>
                                                        </div>
                                                    
                                                
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
                <div tabindex="-1" id="search-overlay" aria-hidden="true" aria-label="Search Overlay " title="Search Overlay ">
                </div>
                <div class="col-12">
                    <div class="search-overlay__close">
                        <a href="#" tabindex="-1" aria-hidden="true" role="button" aria-label="Close">
                            <svg class="icon icon-close" aria-hidden="true" tabindex="-1" focusable="false">
                                <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-close" aria-hidden="true" tabindex="-1" focusable="false"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="search-trigger" title="SEARCH" data-target="search">
                        <input id="isLucene" type="hidden" value="true"/>
                        <div class="searchHeader-label font-cta-2 font-content-link-1-sm font-content-link-1-md">
                            Enter your search here
                        </div>
                        <form id="metSearchForm" role="search" class="search-trigger__container" name="metSearchForm" action="/searchResultsPage.html" data-path-to-search-results="/content/metlife/uxdesign/homepage/searchResultsPage.html">
                            <input id="searchInPage" class="search-trigger__search-box font-header-1 font-header-2 font-content-link-1 search_openTwo" type="text" autocomplete="off" aria-describedby="autocomp" onkeyup="setThemePageIDS();ss_handleKey(event);drawTextBox('',event);" placeholder="SEARCH" name="query" data-placeholder="" data-search-url="/bin/MLApp/core/suggest" data-search-ajax-url="/bin/MLApp/core/search" data-site="gbm_uxdesign_ml_site" aria-label="SEARCH" aria-autocomplete="both" aria-haspopup="false" autocapitalize="off" autocorrect="off" spellcheck="false" aria-activedescendant="search"/>
                            <span id="autocomp" aria-atomic="true" class="sr-only">Auto Complete</span>
                            <a id="live-example__global-searchLink" class="search_location_image" href="#" role="button" aria-label="SEARCH">
                                <svg class="icon brand-1st icon-search-overlay js-searchIcon" aria-hidden="true" tabindex="-1" focusable="false">
                                    <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-search" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                </svg>
                            </a>
                            <div class="search-strip"></div>
                            <input id="overlayerback" class="search-trigger__search-box" autocomplete="off" type="text" aria-label="SEARCH"/>
                            <div id="suggestionsbox" class="suggestionsbox ">
                                <table id="search_suggest_table" role="presentation" class="ss-gac-table">
                                    <tbody id="search_suggest" class="ss-gac-m font-content-link-1 font-header-5-sm font-header-4-sm" style="visibility: hidden;"></tbody>
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
                    <select class="form-item__display__page-count page-count drop-down form-control " aria-label="Search Results">
                        
                            <option value="10">10 results</option>
                        
                            <option value="20">20 results</option>
                        
                            <option value="30">30 results</option>
                        
                    </select>
                    <svg class="icon icon-caret-down" aria-hidden="true" tabindex="-1" focusable="false">
                        <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-caret-down" aria-hidden="true" tabindex="-1" focusable="false"></use>
                    </svg>
                </div>
            </div>

            <div class="search-results-layout d-none d-sm-block d-md-block d-lg-block">
				<span tabindex="0" class="icon icon-search-list active outline-lg" role="button" aria-pressed="true" aria-label="List view">
					<svg class="search_svg">
						<use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-search-list" aria-hidden="true" tabindex="-1" focusable="false"></use>
					</svg>
				</span>
                <span class="pipe"></span>
				<span tabindex="0" class="icon icon-search-grid outline-lg" role="button" aria-pressed="false" aria-label="Grid view">
					<svg class="search_svg">
						<use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-search-grid" aria-hidden="true" tabindex="-1" focusable="false"></use>
					</svg>
				</span>
            </div>
        </div>

    </div>
    <div class="overlay-search-results-container__results">
        <div class="no-results d-none">
            <div class="error-title no-results-title font-content-link-3">No Results</div>
            <div class="font-body-3 "><p>Sorry, we couldn't find any results matching </p>
<p>Please:</p>
<ul>
<li>Check the spelling and try again </li>
<li>Search using fewer terms </li>
<li><a href="https://www.metlife.com/support-and-manage/contact-us/">Click here for Customer Support</a></li>
</ul>
</div>
        </div>
        
        <div class="search-results-container__correction-text d-none font-content-link-3">
            <div class="error-title suggestion-title">
                Did you mean "<span class="suggestion-val"></span>"
            </div>
            <div class="suggestion-text">
                Did you mean <span class="js-searchSuggestion"></span> ?
            </div>
            <span class="font-body-3"><p>Sorry, we couldn't find any results matching </p>
<p>Please:</p>
<ul>
<li>Check the spelling and try again </li>
<li>Search using fewer terms </li>
<li><a href="https://www.metlife.com/support-and-manage/contact-us/">Click here for Customer Support</a></li>
</ul>
</span>
        </div>
        <input type="hidden" aria-hidden="true" class="results-first-pagination" value="first"/>
		<input type="hidden" aria-hidden="true" class="results-last-pagination" value="last"/>
		<input type="hidden" aria-hidden="true" class="results-prev-pagination" value="previous"/>
		<input type="hidden" aria-hidden="true" class="results-next-pagination" value="next"/>
        <input type="hidden" aria-hidden="true" class="results-current-pagination" value="Current "/>
        <nav class="results_pagination d-none" role="navigation" aria-label="Pagination" data-label-first="first" data-label-last="last" data-label-prev="previous" data-label-next="next" data-goto-text="Go to Page" data-current-text="Go to Page">
        </nav>
		<div id="pageNum" aria-live="polite" class="sr-only"></div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</section>








    
    <div class="social-sharing-utility hidden" aria-hidden="true">




    
    <script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/social-sharing/clientlibs.min.js" defer></script>



    
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/social-sharing/clientlibs.min.css" type="text/css">






<div class="social-icons js-socialIcons" aria-label="share" data-share-text="" role="region">
    
        <ul class="social-icons__list">
            
                <li class="social-icons__item">
                    <a class="sharingButton" href="javascript:void(0)" tabindex="0" role="link" data-social-media="icon-facebook" aria-label="FaceBook">
                        <svg class="icon icon-facebook" aria-hidden="true" tabindex="-1" focusable="false">
                            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-facebook" aria-hidden="true" tabindex="-1" focusable="false"></use>
                        </svg>
                    </a>
                </li>
            
                <li class="social-icons__item">
                    <a class="sharingButton" href="javascript:void(0)" tabindex="0" role="link" data-social-media="icon-twitter" aria-label="Twitter">
                        <svg class="icon icon-twitter" aria-hidden="true" tabindex="-1" focusable="false">
                            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-twitter" aria-hidden="true" tabindex="-1" focusable="false"></use>
                        </svg>
                    </a>
                </li>
            
                <li class="social-icons__item">
                    <a class="sharingButton" href="javascript:void(0)" tabindex="0" role="link" data-social-media="icon-linkedin" aria-label="LinkedIn">
                        <svg class="icon icon-linkedin" aria-hidden="true" tabindex="-1" focusable="false">
                            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-linkedin" aria-hidden="true" tabindex="-1" focusable="false"></use>
                        </svg>
                    </a>
                </li>
            
                <li class="social-icons__item">
                    <a class="sharingButton" href="javascript:void(0)" tabindex="0" role="link" data-social-media="icon-gplus" aria-label="Google+">
                        <svg class="icon icon-gplus" aria-hidden="true" tabindex="-1" focusable="false">
                            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-gplus" aria-hidden="true" tabindex="-1" focusable="false"></use>
                        </svg>
                    </a>
                </li>
            
                <li class="social-icons__item">
                    <a class="sharingButton" href="javascript:void(0)" tabindex="0" role="link" data-last="last" data-social-media="icon-email" aria-label="Email">
                        <svg class="icon icon-email" aria-hidden="true" tabindex="-1" focusable="false">
                            <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-email" aria-hidden="true" tabindex="-1" focusable="false"></use>
                        </svg>
                    </a>
                </li>
            
            <li class="social-icons__item social-icons__close">
                <a class="sharingButton" role="button" tabindex="0" aria-label="Close">
                    <svg class="icon icon-close" aria-hidden="true" tabindex="-1" focusable="false">
                        <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-close" aria-hidden="true" tabindex="-1" focusable="false"></use>
                    </svg>
                </a>
            </li>
        </ul>
    
</div></div>

	<main>
		











<div id="skiptomaincontent" tabindex="-1">
    
    
</div>





<div class="content-parsys parsys">




    
    
    <div class="responsive-column-layout parbase">




    
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/responsive-column-layout/clientlibs.min.css" type="text/css">





<div class="responsive-column-layout component ">
    <div class="container">
        <div class="row">
            
                
                <div class="col-12 col-sm-12">
                    <div class="responsive-column-parsys parsys">




    
    
    <div class="wysiwyg-rte parbase">




    
    <script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/wysiwyg-rte/clientlibs.min.js" defer></script>



    
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/wysiwyg-rte/clientlibs.min.css" type="text/css">








<section id="wysiwyg-rte-221686825" class="wysiwyg-rte component component__spacing-bottom " role="region" aria-labelledby="wysiwyg-rte-221686825--labelledby">
    <div id="wysiwyg-rte-221686825--labelledby" class="d-none" aria-hidden="true">WYSIWYG (Rich Text Editor)</div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 responsive-columns">
                <div class="richtext richtext-wysiwyg">
                    <p> </p>
<p><span class="font-header-1">Live Example</span><br />
</p>

                </div>
            </div>
        </div>
    </div>
</section></div>


</div>
                </div>
            
        </div>
    </div>
    
</div></div>


    
    
    <div class="column-article-grid parbase">




    
    <script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/column-article-grid/clientlibs.min.js" defer></script>



    
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/column-article-grid/clientlibs.min.css" type="text/css">








<section id="column-article-grid-1630436143" class="column-article-grid component component__spacing-bottom   stacked" role="region" aria-labelledby="column-article-grid-1630436143--labelledby" data-target-dynamic="_self" data-filter-design="stacked">
    <div class="container article-grid-container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 responsive-columns">
                <div class="row article-grid-filter-wrapper">
                    <div class="col-12 article-grid-title">
                        <div class="article-grid-top-gradient"></div>
                        <h2 id="column-article-grid-1630436143--labelledby">나눔 스토리</h2>
                    </div>
                    
                        <div class="col-12 article-grid-topic-container">
                            <div class="topic-tab-section">
                                <button class="carousel-control left js-leftClick d-none" aria-label="Previous">
                                    <svg class="icon icon-chevron-left" aria-hidden="true" tabindex="-1" focusable="false">
                                        <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-left" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                    </svg>
                                </button>
                                <div class="column-article-grid__carousel-container">
                                    <button class="column-article-grid__carousel-item filter-topic filter-all" data-tab="tab-0" data-tab-link="" data-tab-target="_self" aria-pressed="true">
                                        <span class="topic-text font-byline-1">
                                            All
                                        </span>
                                    </button>
                                    
                                        <button class="column-article-grid__carousel-item filter-topic filter-all" data-tab="tab-1" data-tab-target="_self" data-tab-tags="metlife:ux-design/article/XDinPractice/KeysToSucess" aria-pressed="false">
                                    <span class="topic-text font-byline-1">
                                        XD in Practice
                                    </span>
                                        </button>
                                    
                                        <button class="column-article-grid__carousel-item filter-topic filter-all" data-tab="tab-2" data-tab-target="_self" data-tab-tags="metlife:ux-design/article/showcase" aria-pressed="false">
                                    <span class="topic-text font-byline-1">
                                        Showcase
                                    </span>
                                        </button>
                                    
                                </div>
                                <button class="carousel-control right js-rightClick d-none" aria-label="Next">
                                    <svg class="icon icon-chevron-left" aria-hidden="true" tabindex="-1" focusable="false">
                                        <use xlink:href="https://design.metlife.com/static/images/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    
                </div>
                <div class="row article-grid-results-wrapper">
                    <div class="col-12 article-list-wrapper-section">
                        <div class="article-list-border"></div>
                        <div class="row article-cta-wrapper"></div>

                            <div class="row article-list-wrapper">
                                <div class="col-12 col-sm-4 article-list-item">
                                    <div class="article-list-item-border d-none d-sm-block"></div>
                                    <div class="article-list-section-content"><div class="article-list-item-bg">
                                        <div class="article-list-item-bg-container">
                                            <div class="bg" style="background-image: url('https://design.metlife.com/content/dam/metlifecom/uxdesign/assets/img/xd-in-practice/the-xd-process-step-by-step/met-life-des-xd-in-practice-the-xd-process-step-by-step-asset-01.jpg')"></div></div></div>
                                        <a href="https://design.metlife.com/content/metlife/uxdesign/homepage/xd-in-practice/responsive-web/designing-websites" target="_self">
                                            <div class="article-list-item-headline">Designing modern marketing websites with Adobe Experience Manager</div></a>
                                            <div class="article-list-item-publishedDate">SEP 30, 2021</div></div></div>
                                

                     


                    </div>
                    <div class="col-12 show-more-section d-none">
                <span class="show-more-button" tabindex="0" role="button">
                         Show More
                    <svg class="icon icon-plus" aria-hidden="true" tabindex="-1" focusable="false">
                        <use xlink:href="../css/icons-metlife.svg#icon-plus" aria-hidden="true" tabindex="-1" focusable="false"></use>
                    </svg>
                </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden" aria-hidden="true">
            <div data-fetch-article-list-url="/bin/MLApp/fetchArticleColumnGrid"></div>
            <div data-fetch-article-start-num="0"></div>
            <div data-fetch-article-end-num="0"></div>
            <div data-fetch-article-config="tags"></div>
            
            <div data-fetch-article-config-tags="metlife:ux-design/article/showcase,metlife:ux-design/article/XDinPractice,metlife:ux-design/article/XDinPractice/KeysToSucess,metlife:ux-design/article/XDinPractice/responsiveweb"></div>
            <div data-template="/apps/MetlifeMarketGlobal/templates/uxdesign/blank-content"></div>
            <div data-market="uxdesign"></div>
        </div>
        <span class="sr-only content-changed" aria-live="assertive" aria-atomic="true" data-text="Next"></span>
    </div>
</section></div>


</div>
	</main>
    






	









    
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/footer/clientlibs.min.js" defer></script>
   
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/footer/clientlibs.min.css" type="text/css">






	



	

<script type="text/javascript" defer>_satellite.pageBottom();</script>
</body>
</html>
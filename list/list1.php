<?php 
    
    include_once('../lib/dbcon.php');
    include_once('../head.php');
  //  include_once('banner.php');
  

  $array = array("재단 소식","나눔 스토리");
  hd_bread_crumb($array);
?>




    
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/hero-detail/clientlibs.min.js" defer></script>
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/divider/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/hero-general/clientlibs.min.css" type="text/css">   
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/divider/clientlibs.min.css" type="text/css">






<div class="hero-general component component__spacing-bottom ">
    <div class="hero-general__container gradient">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="hero-general__content">
                        <div class="hero-general__title font-header-4 font-header-2-md">Stories

                            </div>
                        <div class="hero-general__subcopy font-body-1 font-body-3-sm font-body-1-md">
                        따뜻한 손길이 모여 지역사회 곳곳에 온기를 채워갑니다.


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    

    












    
    
<div class="column-article-grid parbase">
    
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/column-article-grid/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/column-article-grid/clientlibs.min.css" type="text/css">









<div class="container article-grid-container">
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1  responsive-columns">
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
                                <button class="column-article-grid__carousel-item filter-topic filter-all current" data-tab="tab-0" data-tab-link="" data-tab-target="_self" aria-pressed="true">
                                    <span class="topic-text font-byline-1">
                                        모든
                                    </span>
                                </button>
                                <?php 
                                    $sql = "select  * from kind_list_0;";
                                    $res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
                                    while($info	 = mysqli_fetch_array($res)){

                                        echo '<button class="column-article-grid__carousel-item filter-topic" data-tab="tab-1" data-tab-target="_self" data-tab-tags="metlife:ux-design/article/XDinPractice/KeysToSucess" aria-pressed="false">
                                        <span class="topic-text font-byline-1">
                                            '.$info['kl_name'].'
                                        </span>
                                            </button>';
                                        
                                        
                                        


                                    };
												
												
												
                                ?>
											


                                    
                                











                            </div>
                            <button class="carousel-control right js-rightClick d-none" aria-label="Next">
                                <svg class="icon icon-chevron-left" aria-hidden="true" tabindex="-1" focusable="false">
                                    <use xlink:href="../css/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                </svg>
                            </button>
                        </div>
                    </div>






                    <div class="row article-grid-results-wrapper">
                    <div class="col-12 article-list-wrapper-section">
                        <div class="article-list-border">
                            
                        </div>

                        <div class="row article-cta-wrapper"></div>

                        <div class="row article-list-wrapper">
                            







                        <?php
                        
                            $sql = "select  * 
                                    from MLT_PRGM_RVW as  a
                                        join 
                                where a.RVW_EXP_YN ='Y'";
                            $res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
                            while($info	 = mysqli_fetch_array($res)){
                        
                            }
                        ?>            










                        <div class="col-12 col-sm-4 article-list-item"><div class="article-list-item-border d-none d-sm-block"></div>
                            <div class="article-list-section-content">
                                <div class="article-list-item-bg">
                                    <div class="article-list-item-bg-container">
                                        <div class="bg" style="background-image: url('https://design.metlife.com/content/dam/metlifecom/uxdesign/assets/img/xd-in-practice/the-xd-process-step-by-step/met-life-des-xd-in-practice-the-xd-process-step-by-step-asset-01.jpg')"></div>
                                    </div>
                                </div>
                                    <a href="https://design.metlife.com/content/metlife/uxdesign/homepage/xd-in-practice/responsive-web/designing-websites" target="_self"><div class="article-list-item-headline">Designing modern marketing websites with Adobe Experience Manager</div></a>
                                    <div class="article-list-item-publishedDate">SEP 30, 2021</div>
                                </div>
                                </div>
                                                      
                                <div class="col-12 col-sm-4 article-list-item"><div class="article-list-item-border d-none d-sm-block"></div>
                            <div class="article-list-section-content">
                                <div class="article-list-item-bg">
                                    <div class="article-list-item-bg-container">
                                        <div class="bg" style="background-image: url('https://design.metlife.com/content/dam/metlifecom/uxdesign/assets/img/xd-in-practice/the-xd-process-step-by-step/met-life-des-xd-in-practice-the-xd-process-step-by-step-asset-01.jpg')"></div>
                                    </div>
                                </div>
                                    <a href="https://design.metlife.com/content/metlife/uxdesign/homepage/xd-in-practice/responsive-web/designing-websites" target="_self"><div class="article-list-item-headline">Designing modern marketing websites with Adobe Experience Manager</div></a>
                                    <div class="article-list-item-publishedDate">SEP 30, 2021</div>
                                </div>
                                </div>
                                                      
                                <div class="col-12 col-sm-4 article-list-item"><div class="article-list-item-border d-none d-sm-block"></div>
                            <div class="article-list-section-content">
                                <div class="article-list-item-bg">
                                    <div class="article-list-item-bg-container">
                                        <div class="bg" style="background-image: url('https://design.metlife.com/content/dam/metlifecom/uxdesign/assets/img/xd-in-practice/the-xd-process-step-by-step/met-life-des-xd-in-practice-the-xd-process-step-by-step-asset-01.jpg')"></div>
                                    </div>
                                </div>
                                    <a href="https://design.metlife.com/content/metlife/uxdesign/homepage/xd-in-practice/responsive-web/designing-websites" target="_self"><div class="article-list-item-headline">Designing modern marketing websites with Adobe Experience Manager</div></a>
                                    <div class="article-list-item-publishedDate">SEP 30, 2021</div>
                                </div>
                                </div>
                                                      
                                
                                
                    
                    </div></div>
                    </div>
                    <div class="col-12 show-more-section d-none">
                <span class="show-more-button" tabindex="0" role="button">
                        &nbsp;Show More
                    <svg class="icon icon-plus" tabindex="-1" focusable="false">
                        <use xlink:href="#icon-plus" tabindex="-1" focusable="false"></use>
                    </svg>
                </span>
                    </div>
                </div>

            </div>


            <div class="row article-grid-results-wrapper">
                <div class="col-12 article-list-wrapper-section">
                    <div class="article-list-border"></div>
                    <div class="row article-cta-wrapper"></div>
                    <div class="row article-list-wrapper">


                    
                    </div>
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
        <div data-fetch-article-list-url="https://design.metlife.com/bin/MLApp/fetchArticleColumnGrid"></div>
        <div data-fetch-article-start-num="0"></div>
        <div data-fetch-article-end-num="0"></div>
        <div data-fetch-article-config="tags"></div>
        
        <div data-fetch-article-config-tags="metlife:ux-design/article/showcase,metlife:ux-design/article/XDinPractice,metlife:ux-design/article/XDinPractice/KeysToSucess,metlife:ux-design/article/XDinPractice/responsiveweb"></div>
        <div data-template="https://design.metlife.com/apps/MetlifeMarketGlobal/templates/uxdesign/blank-content"></div>
        <div data-market="uxdesign"></div>
    </div>
    <span class="sr-only content-changed" aria-live="assertive" aria-atomic="true" data-text="Next"></span>
</div>
</section></div>


</div>







<?php
    include_once('../footer.php');
?>


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
    <script src="https://www.metlife.co.kr/assets.adobedtm.com/launch-EN0379f0d4da0c425b813fd7573a3070a7.min.js"></script>
    <script type="text/javascript" src="https://www.metlife.co.kr/content/dam/metlifecom/uxdesign/assets/js/uxdesign.js" defer></script>
     <script type="text/javascript" defer>_satellite.pageBottom();</script>
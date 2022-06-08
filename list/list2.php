<?php 
    
    include_once('../lib/dbcon.php');
   include_once('../head.php');
  //  include_once('banner.php');
  

  $array = array("재단 소식","나눔 스토리");
  hd_bread_crumb($array);


  $want = array(array(),array(),array());
  

$sql = "
SELECT a.RVW_NO,a.RVW_SJ,a.REGIST_DT,b.STRE_COURS,b.STRE_FILE_NM
	FROM MLT_PRGM_RVW AS a	 
		JOIN 	MLT_FILE_M AS b
	ON a.PC_IMG_FILE_GROUP_NO = b.FILE_GROUP_NO
WHERE b.STRE_COURS !='temp'	
ORDER BY a.RVW_NO DESC
";
$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
while($info	 = mysqli_fetch_array($res)){
    $rand = rand(0,2);


    $temp_want = array($info['RVW_NO'],$info['RVW_SJ'],$info['REGIST_DT'],$info['STRE_COURS'],$info['STRE_FILE_NM']	);
    array_push( $want[$rand],$temp_want);




}














?>




<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/column-article-grid/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/column-article-grid/clientlibs.min.css" type="text/css">

 
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
    



























    <link rel="stylesheet" href="/resources/etc.clientlibs/MetlifeMarketCore/clientlibs/clientlib-base/global.min.css">
    <!-- <link rel="stylesheet" href="resources/styles/3depth.css"> -->
    <script src="resources/scripts/3column.js" defer></script>
</head>

<body>
    <main>
        <div class="content-parsys parsys">
            <div class="column-article-grid parbase">
                <script type="text/javascript"
                    src="resources/etc.clientlibs/MetlifeMarketCore/components/content/global/column-article-grid/clientlibs.min.js"
                    defer=""></script>
                <link rel="stylesheet"
                    href="resources/etc.clientlibs/MetlifeMarketCore/components/content/global/column-article-grid/clientlibs.min.css"
                    type="text/css">
                <section id="column-article-grid-921752119"
                    class="column-article-grid component component__spacing-bottom   carousel" role="region"
                    aria-labelledby="column-article-grid-921752119--labelledby" data-target-dynamic="_self"
                    data-filter-design="carousel">
                    <div class="container article-grid-container">
                        <div class="row">
                            <div class="col-12 col-md-10 offset-md-1 responsive-columns">
                                <div class="row article-grid-filter-wrapper">
                                    <div class="col-12 article-grid-title">
                                        <div class="article-grid-top-gradient"></div>
                                        <h2 id="column-article-grid-921752119--labelledby">나눔스토리</h2>
                                    </div>

                                    <div class="col-12 article-grid-topic-container">
                                        <div class="topic-tab-section">
                                            <div
                                                class="column-article-grid__carousel-container slick-initialized slick-slider tp2">
                                                <div class="slick-list draggable">
                                                    <div class="slick-track tp2">


                                                    
                                                        <button class="column-article-grid__carousel-item filter-topic slick-slide slick-cloned category__btn selected" data-filter="public Policy">
                                                            <span class="topic-text font-byline-1">
                                                            CATEGORY1
                                                            </span>
                                                        </button>
                                                        <button class="column-article-grid__carousel-item filter-topic filter-all slick-slide category__btn tp2" data-filter="Research and Whitepapers">
                                                            <span class="topic-text font-byline-1">
                                                            CATEGORY2
                                                            </span>
                                                        </button>
                                                        <button class="column-article-grid__carousel-item filter-topic slick-slide category__btn" data-filter="Defined Benefit Plans">
                                                            <span class="topic-text font-byline-1">
                                                            CATEGORY3
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>









                                
                                <div class="row article-grid-results-wrapper">
                                    <div class="col-12 article-list-wrapper-section">
                                        <div class="article-list-border"></div>
                                    
                                        <div class="row article-list-wrapper tp2" data-type="public Policy">
                                            
                                        <?php
                                            $temp_want =$want [0];
                                            for($i = 0 ;$i < count($temp_want) ;$i++  ){
                                                $temp_list = $temp_want[$i];
                                        ?>                                                    

                                            <div class="col-12 col-sm-4 article-list-item">
                                                <div class="article-list-item-border d-none d-sm-block"></div>
                                                <div class="article-list-section-content">
                                                    <div class="article-list-item-bg">
                                                        <div class="article-list-item-bg-container">
                                                            <div class="bg" style="background-image: url('<?php


                                                            $rand = rand(0,1);
                                                            if($rand ==0){
                                                                echo "https://design.metlife.com/content/dam/metlifecom/uxdesign/assets/img/xd-in-practice/the-xd-process-step-by-step/met-life-des-xd-in-practice-the-xd-process-step-by-step-asset-01.jpg";
                                                             }
                                                             else{

                                                             echo "https://metlifewelfare.org/img".$temp_list[3]."/".$temp_list[4];
                                                            }
                                                            ?>')"></div>
                                                        </div>
                                                    </div>
                                                    <a href="###" target="_self">
                                                        <div class="article-list-item-headline">[<?php 
                                                                echo $temp_list[0];
                                                              
                                                            
                                                            ?>]
                                                            <?php 
                                                                echo $temp_list[1];
                                                              
                                                            
                                                            ?>
                                                        </div>
                                                    </a>
                                                    <div class="article-list-item-publishedDate">
                                                        <?php 
                                                                echo $temp_list[2]
                                                              
                                                            
                                                            ?></div>
                                                </div>
                                            </div>
                                        


                                        <?php

                                            }
                                        
                                        
                                        ?></div>
                                        <div class="row article-list-wrapper tp2 invisible" data-type="Research and Whitepapers">


                                        <?php
                                            $temp_want =$want [1];
                                            for($i = 0 ;$i < count($temp_want) ;$i++  ){
                                                $temp_list = $temp_want[$i];
                                        ?>                                                    

                                            <div class="col-12 col-sm-4 article-list-item">
                                                <div class="article-list-item-border d-none d-sm-block"></div>
                                                <div class="article-list-section-content">
                                                    <div class="article-list-item-bg">
                                                        <div class="article-list-item-bg-container">
                                                            <div class="bg" style="background-image: url('<?php
                                                           
                                                           $rand = rand(0,1);
                                                           if($rand ==0){
                                                               echo "https://design.metlife.com/content/dam/metlifecom/uxdesign/assets/img/xd-in-practice/the-xd-process-step-by-step/met-life-des-xd-in-practice-the-xd-process-step-by-step-asset-01.jpg";
                                                            }
                                                            else{

                                                            echo "https://metlifewelfare.org/img".$temp_list[3]."/".$temp_list[4];
                                                           }
                                                           ?>')"></div>
                                                        </div>
                                                    </div>
                                                    <a href="###" target="_self">
                                                        <div class="article-list-item-headline">
                                                        [<?php 
                                                                echo $temp_list[0];
                                                              
                                                            
                                                            ?>]
                                                            <?php 
                                                                echo $temp_list[1];
                                                              
                                                            
                                                            ?>
                                                        </div>
                                                    </a>
                                                    <div class="article-list-item-publishedDate">
                                                        <?php 
                                                                echo $temp_list[2]
                                                              
                                                            
                                                            ?></div>
                                                </div>
                                            </div>
                                        


                                        <?php

                                            }
                                        
                                        
                                        ?></div>

                                    <div class="row article-list-wrapper tp2 invisible" data-type="Defined Benefit Plans">       <?php
                                            $temp_want =$want [2];
                                            for($i = 0 ;$i < count($temp_want) ;$i++  ){
                                                $temp_list = $temp_want[$i];
                                        ?>                                                    

                                            <div class="col-12 col-sm-4 article-list-item">
                                                <div class="article-list-item-border d-none d-sm-block"></div>
                                                <div class="article-list-section-content">
                                                    <div class="article-list-item-bg">
                                                        <div class="article-list-item-bg-container">
                                                            <div class="bg" style="background-image: url('<?php
                                                           
                                                           $rand = rand(0,1);
                                                           if($rand ==0){
                                                               echo "https://design.metlife.com/content/dam/metlifecom/uxdesign/assets/img/xd-in-practice/the-xd-process-step-by-step/met-life-des-xd-in-practice-the-xd-process-step-by-step-asset-01.jpg";
                                                            }
                                                            else{

                                                            echo "https://metlifewelfare.org/img".$temp_list[3]."/".$temp_list[4];
                                                           }
                                                           ?>')"></div>
                                                        </div>
                                                    </div>
                                                    <a href="###" target="_self">
                                                        <div class="article-list-item-headline">
                                                        [<?php 
                                                                echo $temp_list[0];
                                                              
                                                            
                                                            ?>]
                                                            <?php 
                                                                echo $temp_list[1];
                                                              
                                                            
                                                            ?>
                                                        </div>
                                                    </a>
                                                    <div class="article-list-item-publishedDate">
                                                        <?php 
                                                                echo $temp_list[2]
                                                              
                                                            
                                                            ?></div>
                                                </div>
                                            </div>
                                        


                                        <?php

                                            }
                                        
                                        
                                        ?></div>

                                    </div>
                                    <div class="col-12 show-more-section d-none">
                                        <span class="show-more-button" tabindex="0" role="button">
                                            Show More
                                            <svg class="icon icon-plus" aria-hidden="true" tabindex="-1" focusable="false">
                                                <use xlink:href="resources/static/images/#icon-plus"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" aria-hidden="true">
                            <div data-fetch-article-list-url="/bin/MLApp/fetchArticleColumnGrid"></div>
                            <div data-fetch-article-start-num="0"></div>
                            <div data-fetch-article-end-num="15"></div>
                            <div data-fetch-article-config="tags"></div>
                            <div
                                data-fetch-article-config-tags="metlife:us/ris/insights/research,metlife:us/ris/insights/whitepapers">
                            </div>
                            <div data-template="/apps/MetlifeMarketGlobal/templates/us/topic-hub"></div>
                            <div data-market="us"></div>
                        </div>
                        <span class="sr-only content-changed" aria-live="assertive" aria-atomic="true"
                            data-text="New Article"></span>
                    </div>
                </section>
            </div>
        </div>
    </main>
</body>

</html>
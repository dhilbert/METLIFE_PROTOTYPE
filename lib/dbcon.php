<?php

error_reporting( E_ALL );
  ini_set( "display_errors", 1 );
include('function.php');

$real_hostname="3.36.83.6";
$real_username="cfgaussroot";
//$real_username="gaussadmin";
$real_password="autoset";

/*
$real_hostname="localhost";
$real_username="root";
$real_password="autoset";

*/



$real_name="met_prototype";

$real_sock = mysqli_connect($real_hostname, $real_username, $real_password, $real_name);
$real_db = mysqli_select_db($real_sock, $real_name) or die ("데이터베이스 서버에 연결할 수 없습니다.");
mysqli_set_charset($real_sock, 'utf8'); 

function replace_texts($text){
	$text = str_replace('"' , '\"', $text);
	$text = str_replace("'" , "\'", $text);	
	return $text;

}





function table_td_text($text,$names,$value){
	echo '	<tr>
				<th>'.$text.'</th>
				<td colspan="3">
					<input type="text" class="form-control" id="bannerSj" name="'.$names.'" value="'.$value.'" />
				</td>
 			</tr>';
	}	

function replace_text($text){
	$text = str_replace('"' , '\"', $text);
	$text = str_replace("'" , "\'", $text);	
	return $text;

}
function hd_bread_crumb($array){
?>
<div class="bread-crumb">
<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/bread-crumb/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/bread-crumb/clientlibs.min.css" type="text/css">
<div class="component bread-crumb">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="bread-crumb__container light-theme" role="navigation">
                
                    
                        <span class="bread-crumb__crumb font-cta-4">
                            <a id="general-content_bread-crumb_list-pages1" href="/" tabindex="0"><?php echo $array[0] ?></a>
                        </span>
            
                        <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false">
                        <use xlink:href="../../css/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                        </svg>
                    


						<?php 
						
							for($i = 1 ; $i < count($array) -1 ;$i++ ){
						
						?>

                        <span class="bread-crumb__crumb font-cta-4">
                            <a id="general-content_bread-crumb_list-pages2" href="#" tabindex="0"><?php echo $array[$i] ?></a>
                        </span>
                        <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false">
                        <use xlink:href="../../css/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                        </svg>
						<?php
							}
						
						?>


                    
                    
                        <span class="bread-crumb__crumb font-cta-4"><?php 
						
						$temp = count($array) -1;
						echo $array[$temp] ?>
                        </span>
                    
                
            </div>
        </div>
    </div>
</div>
</div></div>



<?php
	}
?>

<?php


function main_contents_1($img,$mb_showtext,$mb_showtext_sub,$mb_ctaname){

?>
<main>
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/featured-promo/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/featured-promo/clientlibs.min.css" type="text/css">
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/header/clientlibs.min.js" defer></script>
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/report-breaker/clientlibs.min.js" defer></script>
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/single-feature-story-breaker/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/single-feature-story-breaker/clientlibs.min.css" type="text/css">
<div class="component single-feature-story-breaker component__spacing-bottom ">
    <div class="container">
        <div class="row ">
        <div class="col-md-1 story-eye-brow-section">
                
                <div class="eye-brow-border"></div>
                <h3 class="eye-brow-text font-eyebrow-1 font-eyebrow-3-sm font-eyebrow-3-md">
                News&Notice
                </h3>
                
            </div>
            <div class="col-12 col-md-11 story-image-mobile">
                <div class="story-image" style="background-image: url('admin/img/<?php echo $img  ; ?>');">
                </div>
            </div>
            <div class="col-12 col-sm-11 col-md-10 offset-md-1 story-content-mobile story-content" data-aos="fade-up" data-aos-duration="500" data-aos-anchor-placement="top-bottom">
                <div class="story-content-container">
                    <div class="row story-textarea">
                        <div class="col-12 eye-brow-text font-eyebrow-1 font-eyebrow-3-sm font-eyebrow-3-md eye-brow-mobile">
                            <span> News&Notice</span>
                        </div>

                      
                    <h4 class="col-12 col-md-6 story-headline font-header-4-md font-header-5-sm font-content-link-1">
                    
                            <?php echo $mb_showtext;?>
                        </h4>
                        <div class="col-md-6 story-supporting-copy font-body-3-md">
                            <p> <?php echo $mb_showtext_sub;?><br />    </p>

                        </div>
                    </div>
                    <div class="row">
                    <div class="col-12 col-md-6 story-cta-button font-cta-1">
                                <a href="#" target="_self" aria-label="Learn More">
                                    <span> <?php echo $mb_ctaname;?></span>
                                    <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false">
                                        <use xlink:href="/static/images/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                    </svg>
                                </a>
                            </div>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
        </div>
</main>
<?php
}


function main_contents_2($img,$mb_showtext,$mb_showtext_sub,$mb_ctaname){

?>


<main>
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/header/clientlibs.min.js" defer></script>
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/report-breaker/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/report-breaker/clientlibs.min.css" type="text/css">


<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/featured-promo/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/featured-promo/clientlibs.min.css" type="text/css">

    
    
<div class="report-breaker parbase">




 </div>

<section id="report-breaker-934775095" class="report-breaker component component__spacing-bottom " role="region" aria-labelledby="report-breaker-934775095--labelledby">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 responsive-columns">
                <div class="report-breaker__container">
                    <div class="row">
                        <div class="col-12 col-md-8 report-breaker__left">
                            <div class="report-breaker__left-border">
                                <div class="row">
                                    <div class="col-12 col-sm-8 offset-sm-2 col-md-12 offset-md-0">
                                        <div class="report-breaker__left-container">
                                            <h2 id="report-breaker-934775095--labelledby" class="report-breaker__headline-left font-header-4 font-header-5-sm font-header-4-md" aria-label="2018 Benefits : Experience the Human Workplace (max 65 Chars)">
                                               <?php echo $mb_showtext;?>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 report-breaker__right">
                            <div class="report-breaker__right-border">
                                <div class="row">
                                    <div class="col-12 col-sm-8 offset-sm-2 col-md-12 offset-md-0">
                                        <div class="report-breaker__right-container">
                                            <div class="report-breaker__headline-right font-desc-3 font-desc-2-md">
                                            <?php echo $mb_showtext_sub;?>
                                            </div>
                                            
                                                <div class="report-breaker__button font-cta-1">
                                                    <a class="report-breaker__link" href="https://investor.metlife.com/financials/annual-reports/default.aspx" target="_self" aria-label="right-chevron">
                                                        <span> <?php echo $mb_ctaname;?></span>
                                                        <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false">
                                                            <use xlink:href="/static/images/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                        </svg>
                                                    </a>
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
</section>   </div>
<?php
}


function main_contents_3($img,$mb_showtext,$mb_showtext_sub,$mb_ctaname){

?>
<main>
<div class="featured-promo parbase">
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/featured-promo/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/featured-promo/clientlibs.min.css" type="text/css">
<div class="component featured-promo component__spacing-bottom ">
<div class="container featured-promo__container white image-left">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-4 offset-md-1  featured-promo__background-column d-none d-sm-block">
            <div class="featured-promo__background"></div>
        </div>
        
        <div class="col-12 col-sm-6  offset-md-1  featured-promo__media-column">
            <div class="featured-promo__media-container">
                

<div class="featured-promo__image bg" data-desktop-src="admin/img/<?php echo $img  ; ?>"
                                     data-mobile-src="admin/img/<?php echo $img  ; ?>">
</div>

                
            </div>
        </div>
        <div class="col-11 col-sm-5 featured-promo__content-column ">
            

<div class="featured-promo__content button">
    
      
    
    
        <h2 class="featured-promo__headline">
              <?php echo $mb_showtext;?>

        </h2>
    
    
        <div class="featured-promo__meta">
           <?php echo $mb_showtext_sub;?>
            
        </div>
    
    
    
        
            <div class="featured-promo__cta-button">
                <a class="btn-brand-6th" href="#" target="_self" role="button"><?php echo $mb_ctaname;?></a>
            </div>
        
        
    
</div>

        </div>
    </div>
    
        <div class="featured-promo__color-bar"></div>
    
</div>
</div>
</main>
<?php
}


function main_contents_4($img,$mb_showtext,$mb_showtext_sub,$mb_ctaname){
?>
    
<div class="product-promo-breaker parbase">
    
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/product-promo-breaker/clientlibs.min.css" type="text/css">
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/product-promo-breaker/clientlibs.min.js" defer></script>


<div class="product-promo-breaker component ">
    <div class="container">
        <div class="row product-promo-breaker__content  ">
            <div class="product-promo-breaker__content-mobileBackground  d-sm-none d-md-none d-lg-none"></div>






            <div class="col-12 col-sm-6 col-md-9   product-promo-breaker__content-container ">
                <h2 class="font-header-4 font-header-5-sm font-header-2-md product-promo-breaker-title">
                <?php echo $mb_showtext;?>
                </h2>
                <div class="font-body-1 font-body-3-sm product-promo-breaker-copy">
                    <p><?php echo $mb_showtext_sub;?></p>

                </div>
                
                    <div class="product-promo-breaker-cta brand-button font-cta-5">
                        <a href="#" target="_self" aria-label="#">
                        <span><?php echo $mb_ctaname;?></span>                        
                        </a>
                    </div>
                
            </div>
            <div class="product-promo-breaker-img bg " data-aos="fade-up" data-aos-delay="250" data-aos-duration="350" 
            data-mobile-src="admin/img/<?php echo $img  ; ?>"
            data-desktop-src="admin/img/<?php echo $img  ; ?>"></div>
            
        </div>
    </div>
</div>


<?php
}

function main_contents_5($img,$mb_showtext,$mb_showtext_sub,$mb_ctaname){
?>

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
                                            <?php echo $mb_showtext;?></h2>
                                        <div class="video-promo__content--copy font-body-1 font-body-3-sm">
                                            <p> <?php echo $mb_showtext_sub;?> </p>
                                        </div>
                                        <div class="video-promo__content--cta font-cta-5 ">
                                            <a href="https://youtu.be/TGHrrmD2t18" target="_blank" aria-label="크게 보기">
                                                <span> <span><?php echo $mb_ctaname;?></span></span>
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
                                            <iframe id="player1" width="100%" height="100%"
                                                src="https://www.youtube.com/embed/TGHrrmD2t18?enablejsapi=1"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
}





function index_table_th($value,$values){
  echo '<th data-field="data_'.$value.'" data-sortable="true">'.$values.'</th>';

}
function Cutie_hd_td($value,$values){
  return '<td data-field="data_'.$value.'" data-sortable="true">'.$values.'</td>';

} 
function Cutie_hd_td2($value,$values){
  echo  '<td data-field="data_'.$value.'" data-sortable="true">'.$values.'</td>';

}



function index_table_admin($array){
echo "<tr>"	;
$num = 0;
$num += 1;
$values = $array[0];
Cutie_hd_td2($num,$values);
$num += 1;
$values = $array[1];
Cutie_hd_td2($num,$values);
$num += 1;
$values = "<a href='".$array[2]."' class='btn btn-primary' target='_blank'>보기<a/>";
Cutie_hd_td2($num,$values);
$num += 1;
$values = "공사중";
Cutie_hd_td2($num,$values);
$num += 1;
$values = $array[3];
Cutie_hd_td2($num,$values);
echo "</tr>"	;

}



function index_table_admin3($array){
    echo "<tr>"	;
    $num = 0;
    $num += 1;
    $values = $array[0];
    Cutie_hd_td2($num,$values);
    $num += 1;
    $values = $array[1];
    Cutie_hd_td2($num,$values);
    $num += 1;
    $values = "<a href='".$array[2]."' class='btn btn-primary' target='_blank'>보기<a/>";
    Cutie_hd_td2($num,$values);
    $values = $array[4];
    Cutie_hd_td2($num,$values);
    
    $num += 1;
    $values = $array[3];
    Cutie_hd_td2($num,$values);
    echo "</tr>"	;
    
    }


function index_table_admin2($array){
echo "<tr>"	;
$num = 0;
$num += 1;
$values = $array[0];
Cutie_hd_td2($num,$values);
$num += 1;
$values = $array[1];
Cutie_hd_td2($num,$values);
$num += 1;
$values = "공사중";
Cutie_hd_td2($num,$values);
$values = "공사중";
Cutie_hd_td2($num,$values);
$num += 1;
$values = $array[3];
Cutie_hd_td2($num,$values);
echo "</tr>"	;

}











?>




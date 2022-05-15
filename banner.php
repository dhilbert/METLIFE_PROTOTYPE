<?php 
 


    $check_num =0;
    $want_array = array();
    $sql = "select  * from main_banner where mb_show = 1 order by mb_order ASC,mb_update DESC Limit 5 ";
    $res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
    while($info	 = mysqli_fetch_array($res)){

        $check_num +=1;
        $temp_array = array(
            $info['mb_kind'],
            $info['mb_showtext'],
            $info['mb_link'],
            $info['mb_ctaname'],
            $info['mb_pc_file'],


            $info['mb_mo_file']
        );
        array_push($want_array,$temp_array);
    };


    if($check_num<3){
        $temp_want = $want_array[0];
?>
<!--한개-->
<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/immersive-brand-navigation/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/immersive-brand-navigation/clientlibs.min.css" type="text/css">
<div class="immersive-brand-navigation component ">
    <div class="component__container">
        <div class="background">
            
                <div class="background__image bg active" 
                 data-desktop-src="admin/img/<?php echo $temp_want[4]?>"
                 data-mobile-src="admin/img/<?php echo $temp_want[5]?>"
                 style=" height: 100%;"  ></div>
            
        </div>
        <div class="headline">
            
                <div class="headline__item active">
                    <div class="container">
                        <div class="row">
                            <div class="headline__item-container">
                                <div class="headline__item-content-container">
                                    <div class="col-12 col-sm-9 col-md-9 offset-md-1 headline__item-content">
                                        <div class="headline__item-eyebrow"> </div>
                                        <h2 class="headline__item-text font-header-4 font-header-2-md"><?php echo $temp_want[1]?></h2>
                                    </div>
                                    
                                        <div class="col-12 col-sm-3 offset-md-1 col-md-3 headline__item-content-cta brand-button">
                                           <a class="headline__item-cta" href="#" target="_self" aria-label="CTA"><?php echo $temp_want[3]?></a>
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
    }else{
?>
 <script type="text/javascript"
                    src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/immersive-brand-navigation/clientlibs.min.js"
                    defer></script>
                <link rel="stylesheet"
                    href="https://www.metlife.co.kr//etc.clientlibs/MetlifeMarketCore/components/content/global/immersive-brand-navigation/clientlibs.min.css"
                    type="text/css">

        <div id="skiptomaincontent" tabindex="-1">
            <div class="immersive-brand-navigation">
               
                <div class="immersive-brand-navigation component ">
                    <div class="component__container">
                        <div class="background">
                        <?php
                        
                        for($i = 0 ; $i < count($want_array);$i++){
                            if($i==0    ){$temp_tex='active';}
                            $temp_want = $want_array[$i];
                              echo '
                              <div class="background__image bg '.$temp_tex.'"
                              data-desktop-src="admin/img/'.$temp_want[4].'"
                              data-mobile-src="admin/img/'.$temp_want[5].'"
                              style="background-position: center center;"></div>
                              
                              
                              
                              ';      

                        }
                        
                        
                        
                        ?>
                        </div>
                     
                    <div class="headline">
                        <?php
                        
                        for($i = 0 ; $i < count($want_array);$i++){
                            if($i==0    ){$temp_tex='active';}

                            $temp_want = $want_array[$i];
                              echo '
                            <div class="headline__item '.$temp_tex.'">
                              <div class="container">
                                  <div class="row">
                                      <div class="headline__item-container">
                                          <div class="headline__item-content-container">
                                              <div
                                                  class="col-12 col-sm-8 col-md-7 offset-md-1 headline__item-content">
                                                  <div class="headline__item-eyebrow">'.$temp_want[0].'</div>
                                                  <h2 class="headline__item-text font-header-4 font-header-2-md">
                                                        '.$temp_want[1].'
                                                  </h2>
                                              </div>
                                              <div
                                                  class="col-12 col-sm-4 offset-md-1 col-md-3 headline__item-content-cta brand-button">
                                                  <a class="headline__item-cta"
                                                      href="#" target="_blank"
                                                      aria-label="&#39;내게 착 맞는 여행찾기&#39; 이벤트 참여">'.$temp_want[3].'</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>                            
                              
                              
                              ';      

                        }
                        
                        
                        
                        ?>  
                           
                        
                        
                            
                            
                            
                            
                        </div>
                        <div class="category">
                        <?php
                        
                        for($i = 0 ; $i < count($want_array);$i++){
                            $temp_want = $want_array[$i];
                              echo '


                            <div class="category__item active" role="button">
                                <div class="category__item-container">
                                    <p class="category__item-text font-subhead-desc-4" aria-live="assertive"
                                        aria-atomic="true">
                                        '.$temp_want[0].'<span class="sr-only state"></span>
                                    </p>
                                </div>
                            </div>';
                        }
                        ?>



                        </div>
                    </div>
                </div>
            </div>
        </div>













<?php

























    }





















?>

    











    <main>


    <!--메인 배너--->
    <!--
      

-->
<!--메인 배너--->









<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  

 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
if (m_page_view()){}else{
    $array = array("재단 사업 및 활동","재단 사업","Financial Health","금용교육");
    hd_bread_crumb($array);
}


  



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
                        <div class="hero-general__title font-header-4 font-header-2-md">금융교육
</div>
                        <div class="hero-general__subcopy font-body-1 font-body-3-sm font-body-1-md">
                        대한민국의 건강한 금융 미래를 위하여

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    




<?php
$headline = '대한민국의 건강한 금융 미래는 자라는 세대에 달려 있습니다.';
$subtext  ='메트라이프생명 사회공헌재단은 임직원의 재능기부를 바탕으로 경제교육전문 NGO 기관 ‘JA Korea’와 함께 전국단위의 금융교육을 진행합니다. <span class="rte-smart-highlight">어린이들에게는 건강한 금융생활 습관 형성을, 사회초년생들에게는 예산관리, 신용 및 위험 관리의 중요성을 일깨워주는 교육</span>을 펼치고 있습니다.
';
wysisyg($headline,$subtext);

$array = array(
    'https://www.metlifewelfare.org/images/app/finance-education-1.jpg',
    '어린이를 위한 금융교육',
    '꿀잼(JA.M) 어린이 금융교육',
    '어릴 때 형성된 올바른 경제관념은 개인의 미래뿐 아니라 사회 경제를 바꿉니다. 2015년 부터 시작된 어린이 금융교육은 수도권을 넘어 도서산간의 교육소외지역까지 함께합니다. 매년 100여명의 메트라이프생명 임직원 및 필드 Agents와 함께 1200여명의 초등학생들에게 교육을 제공하며 어린이 눈높이에 맞춘 학년별 다양한 주제와 적절한 교재 및 교구를 활용, 경제와 금융을 보다 재미있게 접근합니다. 또한 배운 내용을 일상에서 활용할 수 있도록 교육해 올바른 금융습관을 형성할 수 있도록 돕습니다.',
    '',''
);

ContentPromoBannerRight($array);


?>



<div class="container">
    <div class="row offset-md-1 ">
         <div class="richtext richtext-wysiwyg">
                <div class="richtext richtext-wysiwyg"><div class="image">
                    <img src="img/education1.png" alt="TCFD Image" aria-hidden="false"/>
                </div>
        </div>
    </div>
</div>

<?php

$array = array(
    'https://www.metlifewelfare.org/images/app/finance-education-2.jpg',
    '사회초년생을 위한 금융교육',
    '‘알.쓸.금.잡’ 알아두자! 쓸모있는 금융 & 잡스킬 교육',
    '2017년 새롭게 시작된 사회초년생 금융교육은 취업을 앞둔 특성화 고등학교 학생들에게 꼭 필요한 전반적인 금융교육을 통해 첫 사회진출시 알아두면 좋은 합리적인 경제인식과 올바른 경제관념을 기를 수 있는 기회를 제공합니다. 더불어 알.쓸.금.잡 금융교육은 100여명의 메트라이프생명 임직원 및 필드 Agents가 재능기부로 함께하고 전문강사진을 구성하여 취업역량 강화 프로그램을 실시합니다. 매년 1000여명의 학생들이 준비된 사회인이 될 수 있도록 실질적인 교육을 진행합니다.',
    '',''
);

ContentPromoBannerLEFT($array);


?>

<div class="container">
    <div class="row offset-md-1 ">
         <div class="richtext richtext-wysiwyg">
                <div class="richtext richtext-wysiwyg"><div class="image">
                    <img src="img/education2.png" alt="TCFD Image" aria-hidden="false"/>
                </div>
        </div>
    </div>
</div>





</div>
</div></div>
    </div>
</div></div>
    </div>
</div></div>
    </div>
</div></div></div>
</div></div>
    </div>
</div></div>
    </div>
</div></div>
    </div>
</div></div></div>
</div></div>
    </div>
</div></div>
    </div>
</div></div>
    </div>
</div></div>










<?php
    include_once('../../footer.php');
?>
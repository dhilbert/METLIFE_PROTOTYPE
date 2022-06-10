<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  
 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
 if (m_page_view()){}else{
     $array = array("재단 사업 및 활동","재단 사업","Financial Health","재무건강 연구 및 캠페인");
     hd_bread_crumb($array);
 }


 






 $headline   = '재무건강 연구 및 캠페인 ';
 $subtext    = '더 건강한 사회를 위한 재무건강, 합리적인 금융계획 ';
 GenericHero($headline,$subtext);


 
 $subtext    = '메트라이프 생명 사회공헌재단은 건강한 금융사회를 이끄는 리더로서, 글로벌 사회공헌 전략인 금융포용을 실행하고 있습니다. 금융소외계층을 비롯한 모든 한국 가계가 합리적인 금융계획을 통해 더 나은 삶을 만들어나가고, <span class="rte-smart-highlight">더불어 재무건강의 중요성에 대한 인식을 제고하여 더 건강한 사회를 만드는데 기여합니다.</span>';
 wysisyg($headline,$subtext);

 $array = array(
    'three-way.jpg',
    '',
    '한국가계의 재무건강 연구',
    '경제 침체와 급속한 고령화로 인해 위기를 맞이한 한국 사회에 이제는 전 국민이 재무건강(Financial Health)의 중요성을 알고 신체의 건강을 관리하듯이 재무건강도 관리가 필요합니다. 이에 메트라이프생명 사회공헌재단은 보험연구원 및 서울대학교 연구진과 함께 한국의 재무건강의 개념지표를 을 제시하고, 다양한 계층의 경제 상태를 측정할 수 있는 재무 건강 측정 개발했습니다. 지표를 활용하여 한국 재무건강의 실태와 국민들의 인식의 차이를 측정하고 한국사회의 재무건강이 더 나은 방향을 준비할 수 있도록 해결 방안을 제시합니다.',
    'https://www.finhealthindex.org/',
    '연구결과 알아보기>' );
 
 ProductPromoBreaker_left($array);
?>








<div class="container">
    <div class="row offset-md-1 ">
    <div class="col-md-3 responsive-columns">
    <div class="richtext richtext-wysiwyg"><div class="image">
                    <img src="https://www.metlifewelfare.org/images/app/icons/pc/business-financial-health.png" alt="TCFD Image" aria-hidden="false"/>
                </div>
                </div>
        </div>
        <div class="col-md-8 responsive-columns">
                <div class="richtext richtext-wysiwyg">
                <p><span class="font-header-2">재무건강의 3요소</span></p>
                <li>지속력: 저축과 투자를 통하여 장기적으로 지속 가능한 성장을 이룰 수 있는 능력</li>
                <li>면역력: 재무적 위기에 대처할 수 있는 능력</li>
                <li>기초체력: 가장 중요한 요소로 현재 소득 내에서 일상적인 지출을 감당할 수 있는 능력</li>

                </div>
        </div>

    </div>
</div>    

<p>



<?php



$headline = '재무건강유형 5단계';
$subtext  = '재무건강 요소들이 각각 얼만큼 충족되었는지에 따라 재무건강 상태는 5가지로 분류해 볼 수 있습니다.';
wysisyg($headline,$subtext);
?>


<div class="container">
    <div class="row offset-md-1 ">
         <div class="richtext richtext-wysiwyg">
<?php            


if (m_page_view()){
?>

                <div class="richtext richtext-wysiwyg"><div class="image">
                    <img src="img/health_mobile.png" alt="TCFD Image" aria-hidden="false"/>
                </div>

<?php
}else{
?>
                <div class="richtext richtext-wysiwyg"><div class="image">
                    <img src="img/health_pc.png" alt="TCFD Image" aria-hidden="false"/>
                </div>
                </div></div>        </div></div>        </div></div>        </div></div>        </div></div>

<?php

}


$title = '활동성과';
$item_array = array(
    array('봉사자','1,376명'),
    array('봉사시간','5,062시간'),
    array('수혜자','8,766명')
);
//ValueProp($title,$item_array);

$title = '참여프로그램';
$want_array = array(
    array('https://www.metlifewelfare.org/img/2020/09/09/5f2b0f72-a9c9-41ee-827d-5d00397854d8',
    '',
    '활동완료',
    'MetLife 금융 교육',
    '2020 알쓸금잡 (알아두자! 쓸모있는 금융 & 잡스킬 교육) 온라인 프로그램',
    '봉사기간: 2020.10.13 ~ 2020.10.26'),
    array('https://www.metlifewelfare.org/img/2019/09/16/1dfe6f8d-0421-4791-826b-41872fd49e74',
    '',
    '활동완료',
    'MetLife 금융 교육',
    '2020 알쓸금잡 (알아두자! 쓸모있는 금융 & 잡스킬 교육) 온라인 프로그램',
    '봉사기간: 2020.10.13 ~ 2020.10.26')
    


);

relatedcontentrecirc($title,$want_array)
?>
    </div>
</div>

<?php

      include_once('../../footer.php');
?>
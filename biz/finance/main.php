<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  
 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
 if (m_page_view()){}else{
     $array = array("재단 사업 및 활동","재단 사업","Financial Health","Financial Health 소개");
     hd_bread_crumb($array);
 }


 





 $headline   = 'Financial Health 건강한 금융생활';
 $subtext    = '모두가 건강한 금융생활로 더 나은 삶을 누릴 수 있도록 메트라이프생명 사회공헌재단이 함께합니다. ';
 GenericHero($headline,$subtext);


 $headline   = '금융소외계층부터 모두의 건강한 삶을 지원합니다. ';
 $subtext    = 'Financial Health는 메트라이프재단의 글로벌 사회공헌 전략으로 혁신적인 솔루션 발굴과 연구조사를 통해 <span class="rte-smart-highlight">금융소외계층부터 모두의 건강한 삶을 지원</span>하는데 목적을 두고 있습니다. 일상적인 소득과 지출 관리, 대출, 저축 등의 금융생활은 누구라도 쉽게 접하고 실행 할 수 있어야 합니다. 그러나 저소득, 낮은 신용, 금융서비스에 대한 정보 부족 및 어려운 접근성 등의 다양한 원인으로 누구라도 ’금융소외계층’이 될 수 있고, 이에 대한 실질적인 지원을 하기 위해 <span class="rte-smart-highlight">국내외 전문기관과 협업</span>하여 다양한 프로그램을 제공하고 있습니다.<p>
 소득과 지출을 일상적인 생활에서 효과적으로 관리하고, 예상치 못한 재무적 위기를 감당할 수 있으며, 아울러 미래를 위한 준비를 하는 것을 의미하는 Financial Health를 증진시키기 위한 노력은 특히, 저소득층 및 중위층 (Low-to-moderate income) 에게는 어려운 과제로 남아 있습니다. 메트라이프 생명 사회공헌재단은 모든 사람들이 금융포용을 넘어 Financial Health를 만들 수 있도록 전문기관과 협업하여, 다양한 프로그램을 제공하고 있으며, 이를 통해 건강한 금융경제 사회를 만들고자 노력하고 있습니다.
 ';
 wysisyg($headline,$subtext);

 $headline   = '“Building Financial Health for all” 누구나 일반적인 건강관리를 위해 운동을 하고, 건강검진을 받듯이, 건강한 금융생활(Financial Health)에 대한 관리가 필요합니다.';
 Divider($headline,11,1);

 $headline   = '';
 $subtext    = '금융소외계층부터 모두의 건강한 금융생활을 위한 ‘파이낸셜 헬스’(Financial Health)는 <span class="rte-smart-highlight">예산에 맞는 지출관리(Spend), 저축습관 형성(Save), 부채와 예측 할 수 없는 재무적 위기상황을 대비 하는 것(Borrow)</span>, 그리고, 미래와 노후를 위한 준비(Plan)를 일상적으로 할 수 있도록 관리 하는 것을 의미합니다.';

 
 
 wysisyg($headline,$subtext);



?>

    <div class="container">
        <div class="row offset-md-1 ">
        <div class="col-md-6 responsive-columns">
                <div class="richtext richtext-wysiwyg">
                    <h2><span class="font-subhead-2">Spend<p>
예산에 맞는 지출하기
</span></h2>
<br>  - 일상적 지출도 지출 전 예산을 세워 지출하기
<br>  - 공과금, 신용카드 요금 등을 연체하지 않고 납부하기
<br>  - 수입을 넘어서는 지출이 1년 중 3개월 미만일 것
<p>


                </div>
            </div>
            <div class="col-md-6 responsive-columns">
                <div class="richtext richtext-wysiwyg">
                    <h2><span class="font-subhead-2">Save<p>
저축습관 만들기
</span></h2>
<br> - 비상 시, 현금화 할 수 있는 생활비 가지고 있기
<br> - 단기적 혹은 장기적 저축 보유 하기
</p>  
                </div>
            </div>
            <div class="col-md-6 responsive-columns">
                <div class="richtext richtext-wysiwyg">
                    <h2><span class="font-subhead-2">Borrow<br>위기사항 대비, 부채관리</span></h2>
                    <br> - 감당할 수 있는 수준의 부채만 보유하기
                    <br> - 평상 시에 신용관리 꾸준히 하기
                    </p>  
                </div>
            </div>
            <div class="col-md-6 responsive-columns">
                <div class="richtext richtext-wysiwyg">
                    <h2><span class="font-subhead-2">Plan
노후와 미래를 위한 준비
</span></h2>
<br> - 장기적인 저축, 투자를 통해 노후 및 미래 준비 하기
<br> - 예기치 못한 사고, 질병을 보장해 주는 보험 가지고 있기
<br> - 저축의 50%는 노후를 위한 저축일 것

                </div>
            </div>
        </div>    
    </div>        


    *Source : Center for Financial Services Innovation (CFSI)



<?php
$main_text="Financial Health 프로그램";
$array = array(
    array("","img/blank.png","재무건강 연구 및 캠페인",""),
    array("","img/blank.png","금융교육",""),
    array("","img/blank.png","사회혁신조직 투자육성 Inclusion Plus",""),
    array("","img/blank.png","Financial Health 포럼","")

);
VisualProductCard($main_text,$array);

$main_text = "Financial Health가 해결하고자 하는 사회적 이슈가 더 알고 싶다면";
$link = "https://www.metlifewelfare.org/article/download/read?articlNo=267";
$sub_text = "자세히 알아보기";

JumpLinks($main_text,$link,$sub_text);
    include_once('../../footer.php');
?>
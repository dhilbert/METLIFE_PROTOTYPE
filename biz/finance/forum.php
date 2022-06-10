<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  

 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
if (m_page_view()){}else{
    $array = array("재단 사업 및 활동","재단 사업","Financial Health","Financial Health 포럼");
    hd_bread_crumb($array);
}




$headline   = 'Financial Health 포럼';
$subtext    = '현대사회에서 저소득, 저신용, 금융서비스에 대한 정보 부족 및 어려운 접근성 등의 다양한 원인으로 누구라도 ‘금융소외계층’이 될 수 있습니다.';
GenericHero($headline,$subtext);


$headline = '‘금융소외계층’뿐만 아니라 모두의 건강한 금융생활을 위하여';
$subtext    = '‘금융소외계층’이 제도화된 금융서비스의 접근을 용이 하게 하도록 하는 ‘금융포용’(Financial Inclusion)은 2008년 글로벌 세계 경제위기 이후에 한국을 포함 하여 많은 나라에서 주요경제 의제로 논의 되어 왔습니다. 이제는 ‘금융포용’(Financial Inclusion) 뿐만 아니라 금융소외계층과 모두의 ‘건강한 금융생활’(FinancialHealth)을 지원하는 새로운 패러다임으로 전환이 필요합니다.
<p>
재단은 국내최초 Financial health 포럼을 통해 새로운 개념인 Financial health를 소개(awareness)하고, 뱅크샐러드 및 Duke 대학교 Common Cents Lab등의 혁신 사례와 글로벌 트랜드를 공유하며(knowledge sharing),더 나아가 정부, 학계, 소설벤처, NPO, 기업 그리고 해외기관 등 각 분야의 국내외 전문가들이 한자리에 모여 Financial Health 의 현재와 미래를 살펴 보고, 400여명의 청중들과 함께 소통하는 시간(Collective Impact)을 가졌습니다.
<p>
Financial health 포럼을 시작으로 앞으로도 <span class="rte-smart-highlight">다양한 전문기관들과 협업하여, 국내 financial health의 생태계(eco system)를 함께 만들어 가도록 노력하겠습니다.</span>';
wysisyg($headline,$subtext);

$headline = '금융소외계층부터 모두의 건강한 금융 생활을 위한 새로운 패러다임 "Transition from financial inclusion to Financial Health"';
$subtext    = '각 분야의 전문가들이 말하는 ‘Financial Health’를 이해하는 시간으로 일반인들에게는 아직 생소하게 느껴질 수 있는 개념을 여러 사례들을 통해 알기 쉽게 이해할 수 있는 자리가 마련되었습니다.';
wysisyg($headline,$subtext);

$array = array(
    'https://www.metlifewelfare.org/images/app/region-forum-1.jpg',
    'Financial Health, 우리의 행복한 삶의 열쇠,<br> 건강을 통해 행복이라는 목표를 달성 하듯 Financial Health를 통해 삶의 질을 향상시킬 수 있으니, 재무 건강 증진의 위한 첫 걸음인 재무 건강 진단을 미루지 말고 꼭 점검',
    '최현자 교수',
    '서울대');
QuoteFeatureBreaker($array);
$array = array(
    'https://www.metlifewelfare.org/images/app/region-forum-2.jpg',
    'Financial Health, Global Challenge,<br>재무 안전성을 높이기 위한 솔루션과 Financial Health를 위한 디지털 서비스의 접근성 등 함께 고민해 나아가야 할 부분들을 소개',
    'Evelyn Stark',
    'Assistant Vice President, MetLife Foundation');
QuoteFeatureBreaker($array);

$array = array(
    'https://www.metlifewelfare.org/images/app/region-forum-3.jpg',
    'Financial Health, An International Perspective ,<br>성공의 개념이 과거와 달리 단순히 부의 정도가 아닌 건강이나 돈을 쓰는 방법 등을 포함하여 재무적인 건강을 측정하는 요소들로 꼽히고 있음 Financial Health에 대한 현재의 접근 방향을 제시',
    
    'Brenton Peck',
    'Senior Manager, Financial Health Network');
QuoteFeatureBreaker($array);

$headline=null;
$colsize = 11;
$mdsize = 1;
Divider($headline,$colsize,$mdsize);
$headline = 'Session2: Fin-tech와 Behavior Science를 활용한 Financial Health 혁신 사례와 연구';
$subtext    = '핀테크, 금융소비자를 분석한 행동과학 등 Financial Health의 구체적 사례와 연구 중심의 강연이 진행되었습니다.';
wysisyg($headline,$subtext);


$array = array(
    'https://www.metlifewelfare.org/images/app/region-forum-4.jpg',
    '합리적인 금융 습관, 핀테크가 Financial Health의 문을 열다.<br>
    금융 데이터를 기반으로 한 금융 상품 추천부터 신용 대변인 서비스, 뱅크샐러드 앱을 통한 재무관리 습관 형성까지 디지털화를 통한 일상생활 속 금융 관리 활용 예시 소개 ',
    '김태훈 대표',
    '레이니스트(뱅크샐러드)');
QuoteFeatureBreaker($array);



$array = array(
    'https://www.metlifewelfare.org/images/app/region-forum-5.jpg',
    '대안신용평가, 현재의 기회와 미래가치를 연결하다. <br>
    신용등급의 개념부터 청년의 신용 상황을 되짚고, 대안신용평가를 통해 청년에게도 동등하게 혜택이 돌아갈 수 있도록 해야 한다며 젊은 세대가 공감할 수 있는 메시지 전달   ',
    '김민정 대표',
    '크레파스솔루션');
QuoteFeatureBreaker($array);


$array = array(
    'https://www.metlifewelfare.org/images/app/region-forum-6.jpg',
    'Financial Health 증진, 금융소비자 이해에서 출발하다. <br>
    금융소비자의 행동을 다각도로 살펴볼 수 있는 예시들과 함께 행동재무학적 관점에서 Financial Health의 증진 방안을 제시',
    '주소현 교수',
    '이화여자대학교');
QuoteFeatureBreaker($array);


$headline=null;
$colsize = 11;
$mdsize = 1;
Divider($headline,$colsize,$mdsize);
$headline = 'Session3: ‘Building financial health for all’을 위한 우리의 도전과 지향점';
$subtext    = '사례발표를 통해 한국과 미국의 상황을 비교하며 생각해 볼 수 있는 시간을 가지고, 다양한 섹터에서 한국사회의 Financial Health 현황 및 앞으로의 역할과 과제에 대해 이야기를 나누었습니다.
';
wysisyg($headline,$subtext);




$array = array(
    'https://www.metlifewelfare.org/images/app/region-forum-7.jpg',
    'The role of behavioral sciences in designing financial health solutions<br>행동과학을 접목하여 사람들이 상황별로 보여주는 행동을 통해 합리적인 금융 생활을 할 수 있도록 돕는 사례를 소개
    ',
    'Marialejandra Guzman','Senior Researcher, Duke University Common Cents Lab'
    );
QuoteFeatureBreaker($array);


?>





<div class="container">
    <div class="row offset-md-1 ">
    
        <div class="col-md-6 responsive-columns">
                <div class="richtext richtext-wysiwyg">
                <p><span class="font-header-2">Collective Impact</span></p>
                금융소외계층부터 모두의 건강한 금융생활(financial health)을 만들어 갈 수 있도록 다양한 전문 기관들과의 협업을 통해 국내 Financial health의 생태계를 함께 만들어 가겠습니다.


                </div>
        </div>
        <div class="col-md-6 responsive-columns">
            <div class="richtext richtext-wysiwyg"><div class="image">
                    <img src="https://www.metlifewelfare.org/images/app/info-region-forum-1.png" alt="TCFD Image" aria-hidden="false"/>
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
    include_once('../../footer.php');
?>
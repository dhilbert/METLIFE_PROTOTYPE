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


<ul class="standards new">
							<li class="danger">
								<div class="item-wrap">
									<div>
										<strong>위급가계</strong>
										<span>지속력, 면역력,<br>기초체력 모두 부족</span>
									</div>
								</div>
							</li>
							<li class="weak">
								<div class="item-wrap">
									<div>
										<strong>허약가계</strong>
										<span>기초체력 부족<br>+<br>면역력과 지속력 중 1가지만 충족</span>
									</div>
								</div>
							</li>
							<li class="caution">
								<div class="item-wrap">
									<div>
										<strong>주의가계</strong>
										<span>기초체력만 충족</span>
									</div>
								</div>
							</li>
							<li class="good">
								<div class="item-wrap">
									<div>
										<strong>양호가계</strong>
										<span>기초체력 충족<br>+<br>면역력과 지속력 중 1가지만 충족</span>
									</div>
								</div>
							</li>
							<li class="excellent">
								<div class="item-wrap">
									<div>
										<strong>튼튼가계</strong>
										<span>3가지요소<br>모두 충족</span>
									</div>
								</div>
							</li>
						</ul>

<?php













 
 
 $headline   = '“Building Financial Health for all” 누구나 일반적인 건강관리를 위해 운동을 하고, 건강검진을 받듯이, 건강한 금융생활(Financial Health)에 대한 관리가 필요합니다.';
 Divider($headline,11,1);

 $headline   = '';
 $subtext    = '금융소외계층부터 모두의 건강한 금융생활을 위한 ‘파이낸셜 헬스’(Financial Health)는 예산에 맞는 지출관리(Spend), 저축습관 형성(Save), 부채와 예측 할 수 없는 재무적 위기상황을 대비 하는 것(Borrow)</span>, 그리고, 미래와 노후를 위한 준비(Plan)를 일상적으로 할 수 있도록 관리 하는 것을 의미합니다.';

 
 
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
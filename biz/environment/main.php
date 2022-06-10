<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  

 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
if (m_page_view()){}else{
    $array = array('재단 사업 및 활동','재단 사업','환경','환경 소개');
    hd_bread_crumb($array);
}





$headline   = '환경';
$subtext    = '환경에 대한 인식형성(Awareness)과 참여(Engagement)로 환경을 실천합니다.';
GenericHero($headline,$subtext);


$headline = '';
$subtext    = '글로벌 메트라이프 금융그룹의 ESG 실천전략에 동참하여 <span class="rte-smart-highlight">사회공헌 영역을 환경영역으로 확대</span> 함으로 써, 임직원 FSR 고객 및 일반인이 일상 속에서 환경실천 하고 지속가능한 사회를 함께 만들 수 있는 <span class="rte-smart-highlight">인식형성(Awareness)과 참여(Engagement)</span>로 환경을 실천합니다.';
wysisyg($headline,$subtext);



$array = array(
    '/METLIFE_PROTOTYPE/img/environment-improve.png',
    '환경 사회공헌 프로그램',
    '환경인식개선 캠페인',

    '메트라이프생명 공식 SNS를 통해 환경실천 댓글 남기기 등을 통한 Fundraising을 진행하고 환경전문기관을 통해 환경개선활동에 활용됩니다. 2021년 Fundraising을 통해 모인 기부금은 제주도의 대표적인 환경비영리 기관 \'세이브제주바다\'에 전달되었습니다. 환경을 생각하여 전달식에 활용되는 판넬을 제작하지 않고 합성을 통해 이미지를 삽입하고, 제주도 김녕해수욕장 인근에서 해양정화 자원봉사 활동을 진행하였습니다.',
    '',''
);

ContentPromoBannerRight($array);



$array = array(
    '오늘부터 그린라이프, 메트라이프',
    '환경을 위한 나의 실천을 메트라이프생명 인스타그램에 댓글로 남겨주세요. 댓글을 남길 때마다 제주바다정화활동을 위해 1,000원씩 기부가 됩니다. ',
    'https://www.youtube.com/watch?v=dV_dxFvk_Cg&t=63s',
    '더 알아보기',
    'https://www.youtube.com/embed/dV_dxFvk_Cg'
);



VideoPromo($array);




$array = array(
    'https://www.metlifewelfare.org/images/app/environment-challenge_04.jpg',
    '환경 사회공헌 프로그램', '교실숲 스쿨챌린지',

    '정부 및 환경 전문기관과의 협업을 통해 환경실천활동을 진행하고, 참여가 높은 학교를 선정하여 모든 교실에 공기정화식물과 환경교육을 제공하며, 임직원, FSR 참여의 지역환경 봉사활동을 진행합니다. 모바일 앱을 통해 환경실천 일기쓰기, 분리수거 인증하기 등 생활 속 환경실천캠페인을 진행하고, 우수 참여 학교에 미항공우주국(NASA)에서 선정한 공기정화식물로 교실에 숲을 선물합니다. 선정된 우수 참여 학교의 교실 숲은 임직원, FSR, 고객의 봉사활동을 통해 조성되고, 학생들에게는 식물을 활용한 실습형 환경교육이 제공되고 있습니다.
    ',
    '',''
);

ContentPromoBannerLeft($array);



$headline=null;
$colsize = 11;
$mdsize = 1;
Divider($headline,$colsize,$mdsize);
$headline = '2021 선정학교';
$subtext    = '굴화초등학교(울산), 안계초등학교(창원), 전일중학교(서울), 와룡중학교(대구), 경안여자중학교(안동)';
wysisyg($headline,$subtext);
$headline=null;
$colsize = 11;
$mdsize = 1;
Divider($headline,$colsize,$mdsize);


$array = array(
    'https://www.metlifewelfare.org/images/app/environment-challenge_04.jpg',
    '환경 사회공헌 프로그램',
    '산불피해 및 생태 숲 복원',
    '산불로 인해 파괴된 숲이 복원되는 시간은 100년입니다.<br>
    산불피해지역 등 생태복원이 필요한 지역에 나무를 심어 생태계와 종다양성 보존에 기여합니다.',
    '',''
);

ContentPromoBannerRight($array);



?>
            
                
            
        
    </div>
    
</div>
</div>

</div>



<?php
    include_once('../../footer.php');
?>
<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  

 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
if (m_page_view()){}else{
    $array = array("재단 사업 및 활동","재단 사업","Walk to Help 캠페인");
    hd_bread_crumb($array);
}




$headline   = 'Walk to Help 캠페인';
$subtext    = '작은 실천이 모여 지역사회에 큰 변화를 일으킬 수 있습니다. ';
GenericHero($headline,$subtext);


$headline = '';
$subtext    = '
메트라이프생명 사회공헌재단은 나눔의 의지를 보다 쉽고 재미있게 실천할 수 있도록 Walk to Help 캠페인을 진행하고 있습니다.<br>
건강과 <span class="rte-smart-highlight">디지털 컨셉을 활용하여 모바일 앱을 통한 Fundraising을 진행하고, Fundraising을 통해 모인 기부금을 가지고 
전사 자원봉사활동을 진행</span>하여 지역사회 나눔의 활력을 불어넣고 있습니다.';
wysisyg($headline,$subtext);





$array = array(
    'https://www.metlifewelfare.org/images/app/region-campaign-1.jpg',
    'Walk to Help 캠페인',
    '걷기를 통한 Fundraising',

    '모바일 걷기 기부앱을 활용하여 걷는 만큼 모금을 적립합니다. 메트라이프생명 임직원, 필드 agents 그리고 고객까지 함께 참여할 수 있으며 목표 걸음수를 채우면 일정 금액을 메트라이프생명 사회공헌재단에서 기부하고 있습니다. 매년 1,000여명 이상의 인원이 7천만 걸음 이상을 함께 걸으며 Fundraising을 진행하고 있습니다.
    ',
    '',''
);

ContentPromoBannerRight($array);

$array = array(
    'https://www.metlifewelfare.org/images/app/region-campaign-2.jpg',
    'Walk to Help 캠페인',
    '전사자원봉사활동
    ',

    '모바일 걷기 기부 앱을 통해 쌓은 기부금으로 매년 약 500 ~ 1,000여명의 메트라이프생명 임직원, 필드 agents들이 함께 힘을 모아 저소득층 독거어르신을 위해 물품배달, 겨울철 방한 준비의 자원봉사활동을 진행하고 있으며, 500여명 이상의 저소득층 독거어르신을 지원하여 복지사각지대에 놓인 소외계층의 생활이 나아지도록 실질적으로 지원하고 있습니다.

    ',
    '',''
);

ContentPromoBannerLeft($array);





$title = '활동성과';
$item_array = array(
    array('봉사자','15,329명'),
    array('봉사시간','80,641시간'),
    array('수혜자','3,597명')
);
ValueProp($title,$item_array);






$title = '참여프로그램';
$want_array = array(
    array('https://www.metlifewelfare.org/img/2020/09/09/5f2b0f72-a9c9-41ee-827d-5d00397854d8',
    '',
    '활동완료',
    'Walk to Help 캠페인    ',
    '한걸음마다 기금이 모이는 Walk to Help 캠페인에 참여하세요!
    ',
    '봉사기간: 2018.11.13 ~ 2018.11.13
    ')
    


);

relatedcontentrecirc($title,$want_array);











    include_once('../../footer.php');
?>
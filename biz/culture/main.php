<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  

 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
if (m_page_view()){}else{
    $array = array("재단 사업 및 활동","재단 사업","문화예술","문화예술 소개");
    hd_bread_crumb($array);
}







$headline   = '문화예술';
$subtext    = '문화예술의 확산과 문화예술을 통한 나눔을 추구합니다.';
GenericHero($headline,$subtext);


$headline = '문화예술 사회공헌 “The Gift”';
$subtext    = '역량 있는 문화예술 단체를 발굴하고 지속적으로 성장할 수 있도록 예술 활동 지원과 문화소외계층에게 다양한 문화예술 공연 참여 기회를 제공하는 “티켓나눔”을 통해 바쁜 일상생활을 벗어나 힐링하고 정서적으로 소통하여 <span class="rte-smart-highlight">국내 문화예술 격차를 해소하는데 기여하고자 합니다.</span>
<p>
지방도시로 지원지역을 확대를 통해 2019년 총 7회의 문화예술 사회공헌에 장애인, 다문화가정, 소아암환자 등 3,957명이 함께하였고 2020년과 2021년에는 COVID로 문화예술공연이 어려운 상황에서 온라인공연 ‘메트라이프 Gift콘’을 통해 실시간으로 함께하였습니다.';

wysisyg($headline,$subtext);





$array = array(
    '문화를 나누고 행복을 더하는 The Gift',
    '삶에 지치고, 힘들어 따뜻한 위로가 필요한가요?<br>삶의 쉼표가 되는 선물같은 이야기를 들려드립니다.',
    'https://www.youtube.com/watch?v=8oJXmdf5V3g',
    '더 알아보기',
    'https://www.youtube.com/embed/8oJXmdf5V3g'
);
VideoPromo($array);

$headline = '음악분야를 넘어 문학, 미술까지';
$subtext    = '문학, 미술까지 지원범위를 확대하여 예술인의 창작활동 지원 뿐만 아니라 해 신진 문학 및 미술 작가의 작품을 대중이 만날 수 있도록 출판과 전시회 지원까지 함께 합니다.<p>
<span class="rte-smart-highlight">재단의 문화예술 사회공헌은 기업협력 문화예술공연 및 문화예술분야 단체역량강화 프로그램 운영의 전문성을 보유한 비영리 사단법인 한국메세나협회와 문화예술전문기관 세종문화회관 등과 함께 하고 있습니다.</span>';
wysisyg($headline,$subtext);



$title='문화예술 프로그램';

$array = array(
    array('#','/METLIFE_PROTOTYPE/img/blank.png','문화예술단체 역량강화 지원',''),
    array('#','/METLIFE_PROTOTYPE/img/blank.png','문화예술티켓나눔 & 메트라이프 Gift콘',''),
    array('#','/METLIFE_PROTOTYPE/img/blank.png','문학/미술 작가 창작지원','')
);
VisualProductCard3($title,$array);





    include_once('../../footer.php');
?>
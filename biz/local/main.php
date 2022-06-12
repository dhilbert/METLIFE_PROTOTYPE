<?php 
    
    include_once('../../lib/dbcon.php');
    include_once('../../head.php');
  //  include_once('banner.php');
  

 function m_page_view(){ return preg_match('/phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|android|sony/i', $_SERVER['HTTP_USER_AGENT']); } 
if (m_page_view()){}else{
    $array = array("재단 사업 및 활동","재단 사업","지역사회나눔","지역사회나눔 소개");
    hd_bread_crumb($array);
}




$headline   = '지역사회 나눔 Healthy Community';
$subtext    = '따뜻한 손길이 필요한 지역사회 곳곳에 메트라이프생명 사회공헌재단이 함께합니다.';
GenericHero($headline,$subtext);


$headline = '건강한 지역사회가 모여 행복한 세상을 이룹니다. ';
$subtext    = '
메트라이프생명 사회공헌재단은 도움이 필요한 지역사회 곳곳에 따뜻한 손길을 전하고자 꾸준히 나눔 활동을 실천하고 있습니다. 메트라이프생명 임직원 및 필드 Agents는 장애인, 아동, 독거 어르신 등을 대상으로 자원봉사 및 지원을 하고, 소외계층을 위한 주거지원사업 등 다양한 사회공헌활동을 진행하고 있습니다.
<p>
함께 성장할 때 더 멀리 갈 수 있다는 믿음 아래, <span class="rte-smart-highlight">앞으로도 다양한 형태의 지역사회 나눔 활동을 통해 건강하고 행복한 사회를 만들어 나가겠습니다.</spans>';

wysisyg($headline,$subtext);




$title='지역사회나눔 프로그램';

$array = array(
    array('#','/METLIFE_PROTOTYPE/img/blank.png','Walk to Help 캠페인',''),
    array('#','/METLIFE_PROTOTYPE/img/blank.png','언택트 사회공헌',''),
    array('#','/METLIFE_PROTOTYPE/img/blank.png','MetLife D.I.Y',''),
    array('#','/METLIFE_PROTOTYPE/img/blank.png','암투병소방관 지원 기부캠페인',''),
    
    array('#','/METLIFE_PROTOTYPE/img/blank.png','MetLife Build Home','')
);
VisualProductCard3($title,$array);





    include_once('../../footer.php');
?>
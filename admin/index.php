
<!DOCTYPE html>
<html lang="ko">
<head>
<title>프로그램 관리 - MetLifeFoundation Management</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<link rel="icon" type="image/x-icon" href="/images/comm/favicon.ico" />
<link rel="stylesheet" href="https://metlifewelfare.org/css/lib/bootstrap/bootstrap.css" />
<link rel="stylesheet" href="https://metlifewelfare.org/css/lib/font-awesome/font-awesome.css" />
<link rel="stylesheet" href="https://metlifewelfare.org/css/lib/jquery-ui/jquery-ui.css" />
<link rel="stylesheet" href="https://metlifewelfare.org/css/lib/bootstrap-datepicker/bootstrap-datepicker3.css" />
<link rel="stylesheet" href="https://metlifewelfare.org/css/lib/bootstrap-fileinput/fileinput.css" />
<link rel="stylesheet" href="https://metlifewelfare.org/css/lib/summernote/summernote.css" />
<!--
<link rel="stylesheet" href="//cdn.datatables.net/v/bs4/dt-1.10.18/sl-1.2.6/datatables.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.9/combined/css/gijgo.min.css" />
-->
<link rel="stylesheet" href="https://metlifewelfare.org/css/ntapp/custom.css?20180911_2" />





</head>
<body>
	<div class="wrap-page">
		<header id="header">
	<nav class="navbar">
		<div class="navbar-header">
			<a class="navbar-brand" href="/ntapp"><img src="/images/ntapp/logo.png" alt="MetLife Foundation" /></a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="/ntapp/program/programList">프로그램 관리</a>
				<ul class="navbar-2depth">
					<li class="active"><a href="/ntapp/program/programList">프로그램 관리</a></li>
					<li><a href="/ntapp/program/reviewList">후기 관리</a></li>
					<li><a href="/ntapp/program/vmsList">인증서 신청 관리</a></li>
				</ul>
			</li>
			<li>
				<a href="/ntapp/article/main/visual/list">게시물 관리</a>
				<ul class="navbar-2depth">
					
					<li><a href="/ntapp/article/notice/list">공지사항 관리</a></li>
					<li><a href="/ntapp/article/news/list">뉴스 관리</a></li>
					<li><a href="/ntapp/article/download/list">자료실 관리</a></li>
					
				</ul>
			</li>
		
		</ul>
		<div class="navbar-right" id="username">
			<i class="fa fa-user-circle-o"></i> <strong>관리자</strong><span>님</span> <a href="/ntapp/auth/logout" class=""><i class="fa fa-sign-out"></i> 로그아웃</a>
		</div>
	</nav>
</header>
		
		<div id="container" class="container">
			<div class="wrap-contents">
				<div class="page-control">
					<div class="row">
						<div class="col-xs-6">
							<span class="page-title">프로그램 관리</span>
						</div>
						<div class="col-xs-6 text-right">
							<button type="button" class="btn btn-default mr10"  id="btnExcelDownload"><i class="fa fa-download"></i> 엑셀 다운로드</button>
							<!-- <button type="button" class="btn btn-default">삭제</button> -->
							<button type="button" class="btn btn-primary" onclick="window.location.href='programWrite'">등록</button>
							</div>
					</div>
				</div>
				<div class="contents">
					<div class="card">
						<div class="tools">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-inline">
										<span class="select">
											<select class="form-control" name="cateUpperCode" >
												<option value="">선택</option>
											<option value="4">&#51116;&#47924;&#44148;&#44053; &#50672;&#44396; &#48143; &#52896;&#54168;&#51064;</option><option value="310">MetLife Volunteer Awards</option><option value="5">MetLife &#44552;&#50997;&#44368;&#50977;</option><option value="374">&#54872;&#44221;&#49324;&#54924;&#44277;&#54732;</option><option value="7">Inclusion Plus Solution Lab</option><option value="8">Walk to Help &#52896;&#54168;&#51064; </option><option value="9">MetLife Build Home</option><option value="10">MetLife &#51088;&#50896;&#48393;&#49324;</option><option value="11">MetLife D.I.Y</option><option value="314">&#47928;&#54868;&#50696;&#49696; </option><option value="376">&#47700;&#53944;&#46972;&#51060;&#54532; &#44592;&#48512;&#52896;&#54168;&#51064;</option></select>
										</span>
										<span class="select">
											<input type="hidden" name="tempUpperCodeNo" />
											<select class="form-control" name="searchCate">
												<option value="">선택</option>
											</select>
										</span>
									</div>
								</div>
								<div class="col-xs-6 text-right">
									<div class="form-inline">
										<span class="select">
											<select name="searchDateGb" id="" class="form-control">
												<option value="rcrit">모집기간</option>
												<option value="presnat">발표일</option>
												<option value="srvc">봉사기간</option>
											</select>
										</span>
										<div class="wrap-calendar form-group">
											<div class="input-group input-daterange wrap-calendar form-group">
												<div class="input-icon">
													<i class="fa fa-calendar"></i>
													<input type="text" class="form-control datetimepicker date-from" id="" name="searchDateBegin" value="" placeholder="from" />
													
												</div>
												<span class="input-group-addon">~</span>
												<div class="input-icon">
													<i class="fa fa-calendar"></i>
													<input type="text" class="form-control datetimepicker date-to" id="" name="searchDateEnd" value="" placeholder="to" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<span class="checkbox-inline">
										<label>
											<input type="checkbox" name="searchSttusAllYn" value="Y" > 전체
										</label>
									</span>
									<span class="checkbox-inline" >
										<label>
											<input type="checkbox" name="searchSttus1Yn" value="Y"> 모집중
										</label>
									</span>
									<span class="checkbox-inline" >
										<label>
											<input type="checkbox" name="searchSttus2Yn" value="Y"> 대기자모집
										</label>
									</span>									
									<span class="checkbox-inline">
										<label>
											<input type="checkbox" name="searchSttus3Yn" value="Y"> 활동대기
										</label>
									</span>
									<span class="checkbox-inline">
										<label>
											<input type="checkbox" name="searchSttus4Yn" value="Y"> 활동중
										</label>
									</span>
									<span class="checkbox-inline">
										<label>
											<input type="checkbox" name="searchSttus5Yn" value="Y"> 활동완료
										</label>
									</span>
									<span class="checkbox-inline">
										<label>
											<input type="checkbox" name="searchSttus8Yn" value="Y"> 활동취소
										</label>
									</span>
								</div>
								<div class="col-xs-6 text-right">
									<div class="form-inline">
										<form data-parsley-validate="">
											<input type="hidden" name="diyUpperCateCode" value="11">
											<span class="select">
												<select name="searchField" id="" class="form-control">
													<option value="">전체</option>
													<option value="name">활동명</option>
													<option value="cn">내용</option>
												</select>
											</span>
											<div class="input-group ">
												<input type="text" name="searchKeyword" class="form-control" placeholder="검색어 입력" />
												<span class="input-group-btn">
													<button class="btn btn-default btn-search" type="button" id="btnSubmit"><i class="fa fa-search" aria-hidden="true"></i></button>
												</span>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<table id="dataTable" class="table tablesorter table-hover table-bordered table-vertical">
							<thead>
								<tr>
									<!-- <th><input type="checkbox" id="checkAll" /></th> -->
									<th>번호</th>
									<th>썸네일</th>
									<th>봉사분야</th>
									<th>활동명</th>
									<th>모집기간</th>
									<th>발표일</th>
									<th>봉사기간</th>
									<th>총시간</th>
									<th>모집인원(신청자수)</th>
									<th>진행상태</th>
									<th>사전교육/<br>파트너/가족/티셔츠/<br>메인/프로그램/사용</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	
	</div>
	
<script src="/js/lib/base/base-1.1a.js"></script>
<script src="/js/lib/jquery/jquery.min.js"></script>
<script src="/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="/js/lib/jwt/jwt-decode.min.js"></script>
<script src="/js/lib/parsley/parsley.min.js"></script>
<script src="/js/lib/parsley/i18n/ko.js"></script>
<script src="/js/lib/cleave/cleave.min.js"></script>
<script src="/js/lib/cleave/cleave-phone.kr.js"></script>
<script src="/js/lib/moment/moment-with-locales.min.js"></script>
<script src="/js/lib/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="/js/lib/bootstrap-datepicker/bootstrap-datepicker.ko.min.js"></script>
<script src="/js/lib/summernote/summernote.js?20180910"></script>
<script src="/js/lib/summernote/lang/summernote-ko-KR.js"></script>
<script src="/js/lib/gijgo/gijgo.js?20180907"></script>
<script src="/js/lib/jquery.fileDownload.js"></script>
<script src="/js/lib/table-merger/table-merger.js"></script>
<script src="/js/lib/datatables/datatables.js"></script>
<script src="/js/lib/jquery/plugins/jquery.form.min.js"></script>
 
<script src="/js/ntapp/common.js?20190514"></script>

	
<script type="text/javascript">
/*<![CDATA[*/
$(function(){
	var checkArr = [];		
	
	
	var renderCheck = function(data, type, row, meta) {
		$html = $('<input />').attr('type', 'checkbox').attr('name', 'mberId').val(data);
		return $html.prop('outerHTML');
	};
	
	var renderThumb = function(data, type, row, meta) {
		var img = ""
		if(row.pcImgFileFullPath!="" && row.pcImgFileFullPath!=null){
			img = '<span class="thumbnail"><img src="/img' + row.pcImgFileFullPath + '" /></span>';
		}
		$html = $('<a href="programRead?programNo='+ row.programNo +'" class="link">'+ img +'</a>');
		return $html.prop('outerHTML');
	};
	
	var renderLink = function(data, type, row, meta) {
		$html = $('<a href="programRead?programNo='+ row.programNo +'" class="link">'+ data +'</a>');
		return $html.prop('outerHTML');
	};	

	var renderRcrit = function(data, type, row, meta) {
		$html = $('<span>'+ commonGetDateFmt(row.rcritBeginDe,".") +' ~ '+ commonGetDateFmt(row.rcritEndDe,".") +'</span>');
		return $html.prop('outerHTML');
	};
	
	var renderPresnatn = function(data, type, row, meta) {
		$html = $('<span>'+ commonGetDateFmt(data,".") +'</span>');
		return $html.prop('outerHTML');
	};	
	
	var renderSrvc = function(data, type, row, meta) {
		$html = $('<span>'+ commonGetDateFmt(row.srvcBeginDe,".") +' ~ '+ commonGetDateFmt(row.srvcEndDe,".") +'</span>');
		return $html.prop('outerHTML');
	};
	
	var renderRecritNmprCo = function(data, type, row, meta) {
		$html = $('<span>'+ commonComma(row.rcritNmprCo) +'('+ commonComma(row.volunteerCount) + ")" +'</span>');
		return $html.prop('outerHTML');
	};			
	
	
	
	var baseColumns = [
		//{data: 'programNo', width: '3%', render: renderCheck, orderable: false},		
		{data: 'programNo', width: '8%'},
		{data: 'programNm', width: '5%', render: renderThumb, orderable: false},
		{data: 'cateNm'},
		{data: 'programNm', render: renderLink},
		{data: 'programNo', width: '8%' , render: renderRcrit},
		{data: 'presnatnDe', width: '5%', render: renderPresnatn},		
		{data: 'programNo', width: '8%', render: renderSrvc},
		{data: 'srvcHoursTot', width: '8%'},
		{data: 'rcritNmprCo', width: '8%', render: renderRecritNmprCo},
		{data: 'sttusNm', width: '8%'},
		{data: 'useYn', width: '10%'
			, render: function(data, type, row, meta) {
				return "<span title='사전교육'>"+row.priorEduYn+"</span>/"+"<br><span title='파트너'>"+row.partnerYn +"</span>/<span title='가족'>"+ row.familyYn +"</span>/<span title='티셔츠'>"+ row.tshirtYn+"</span>/"+"<br><span title='메인'>"+ row.mainExpYn +"</span>/<span title='프로그램'>"+ row.programExpYn +"</span>/<span title='사용'>"+ row.useYn + "</span>";	
			}
			, orderable: false
		}
	];
	
	
	var columnDefs = [
		{orderable: false, targets: [0]}
	];	

	
	var ajax = {
		contentType: 'application/json',
       	url: '/ntapp/program/programList',
       	type: 'post',
		data: function(d) {
			d.searchField = $('[name=searchField]').val();
			d.searchKeyword = $('[name=searchKeyword]').val();
			d.gbSearch= 'adminList';
			d.cateUpperCode = $('[name=cateUpperCode]').val();
			d.searchCate = $('[name=searchCate]').val();
			d.searchDateGb = $('[name=searchDateGb]').val();
			d.searchDateBegin = $('[name=searchDateBegin]').val();
			d.searchDateEnd = $('[name=searchDateEnd]').val();
			d.searchSttusAllYn = $('[name=searchSttusAllYn]').is(':checked')?"Y":"";
			d.searchSttus1Yn = $('[name=searchSttus1Yn]').is(':checked')?"Y":"";
			d.searchSttus2Yn = $('[name=searchSttus2Yn]').is(':checked')?"Y":"";
			d.searchSttus3Yn = $('[name=searchSttus3Yn]').is(':checked')?"Y":"";
			d.searchSttus4Yn = $('[name=searchSttus4Yn]').is(':checked')?"Y":"";
			d.searchSttus5Yn = $('[name=searchSttus5Yn]').is(':checked')?"Y":"";
			d.searchSttus8Yn = $('[name=searchSttus8Yn]').is(':checked')?"Y":"";
			
			return JSON.stringify(d);
		}
	};

	
	var order = [];
	order.push([0, 'desc']);	
	var table = $('#dataTable').DataTable({
		bDestroy: true,
		columns: baseColumns,
		//columnDefs: columnDefs,
        ajax: ajax,
		order: order,
		stateSaveParams: function (settings, data) {
			data.searchField = $('[name=searchField]').val();
			data.searchKeyword = $('[name=searchKeyword]').val();			
			data.gbSearch= 'adminList';			
			data.cateUpperCode = $('[name=cateUpperCode]').val();
			data.searchCate = $('[name=searchCate]').val();
			data.searchDateGb = $('[name=searchDateGb]').val();
			data.searchDateBegin = $('[name=searchDateBegin]').val();
			data.searchDateEnd = $('[name=searchDateEnd]').val();
			data.searchSttusAllYn = $('[name=searchSttusAllYn]').is(':checked')?"1":"";
			data.searchSttus1Yn = $('[name=searchSttus1Yn]').is(':checked')?"1":"";
			data.searchSttus2Yn = $('[name=searchSttus2Yn]').is(':checked')?"1":"";
			data.searchSttus3Yn = $('[name=searchSttus3Yn]').is(':checked')?"1":"";
			data.searchSttus4Yn = $('[name=searchSttus4Yn]').is(':checked')?"1":"";
			data.searchSttus5Yn = $('[name=searchSttus5Yn]').is(':checked')?"1":"";
			data.searchSttus8Yn = $('[name=searchSttus8Yn]').is(':checked')?"1":"";
		},
 		stateLoaded: function (settings, data) {
			commonSelectCode('searchCate',data.cateUpperCode, data.searchCate); //
 			$('[name=searchField]').val(data.searchField);
 			$('[name=searchKeyword]').val(data.searchKeyword);
			$('[name=cateUpperCode]').val(data.cateUpperCode);
			$('[name=searchDateGb]').val(data.searchDateGb);
			$('[name=searchDateBegin]').val(data.searchDateBegin);
			$('[name=searchDateEnd]').val(data.searchDateEnd);
			$('[name=searchSttusAllYn]').prop('checked', data.searchSttusAllYn);
			$('[name=searchSttus1Yn]').prop('checked', data.searchSttus1Yn);
			$('[name=searchSttus2Yn]').prop('checked', data.searchSttus2Yn);
			$('[name=searchSttus3Yn]').prop('checked', data.searchSttus3Yn);
			$('[name=searchSttus4Yn]').prop('checked', data.searchSttus4Yn);
			$('[name=searchSttus5Yn]').prop('checked', data.searchSttus5Yn);
			$('[name=searchSttus8Yn]').prop('checked', data.searchSttus8Yn);			
			
 		},
        fnStateLoadParams: function (oSettings, oData) {
        	/*
        	console.log(oSettings);
        	console.log('----------------------');
        	console.log(oData);
        	*/
         	if (document.referrer.indexOf('/ntapp/program/program') < 0
         			&& document.referrer.indexOf('/ntapp/program/volunteer') < 0
         			) {
        		return false;
        	}
        }
	});
	
	
		
   	$('form').parsley().on('form:submit', function(form) {
   		gridSubmit();
		return false;
   	});

   	var gridSubmit = function() {
   		table.page('first').draw('page');
   	}
   	
	$('select[name=cateUpperCode]').change(function(){
		var diyUpperCateCode = $('[name=diyUpperCateCode]').val();	// DIY 상위 카테고리
		if(this.value==diyUpperCateCode){
			alert("DIY카테고리는 DIY메뉴관리에서 검색이 가능합니다.");
			this.selectedIndex=0;
		}else{
			commonSelectCode('searchCate',this.value);	
		}		
	});   	
	
	$("#btnExcelDownload").on('click', function() {		
		var dataObj = new Object();
		var param = $('form').serialize()+"&"+ $.param(dataObj)
		//console.log(param);
   		var url = '/ntapp/program/programExcel?' + param;	   		
   		fnExcelDownload(url);
   	});	
});
/*]]>*/
</script>

</body>
</html>
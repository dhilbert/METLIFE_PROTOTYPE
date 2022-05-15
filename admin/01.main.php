<?php
error_reporting (E_ALL);
ini_set ("display_errors", 1);



include_once('../lib/dbcon.php');
include_once('head.php');

 
?>

		
<div id="container" class="container">
			<div class="wrap-contents">
				<div class="page-control">
					<div class="row">
						<div class="col-xs-6">
							<span class="page-title">메인 관리</span>
						</div>
					</div>
				</div>
				<div class="contents">
					<ul class="nav nav-tabs mt10" role="tablist">
						<li role="presentation" ><a href="main.php" aria-controls="home" role="tab" data-toggle="tab">메인 비주얼 관리</a></li>
						<li role="presentation" class="active"><a href="01.main.php" aria-controls="messages">메인 게시물 관리</a></li>
					</ul>
					<div class="card">
						<div class="row mt5">
							<div class="col-xs-12 text-right">
								<A HREF='01.main_reg.php'><button type="button" class="btn btn-primary" id="btnWrite">등록</button></A>
							</div>
						</div>
						<table id="dataTable" class="table tablesorter table-hover table-bordered table-vertical">
							<colgroup>
								<col style="width: 5%">
								<col style="width: 7%">
								<col style="width: 7%">
								<col style="width: 7%">
								<col style="width: 7%">
								<col style="width: 20%">
								<col style="width: 20%">
								<col style="width: 20%">
								<col style="width: 7%">
								<col style="width: 20%">
								
								
							</colgroup>
							<thead>
								<tr>
									<th>#</th>
									<th>전시순서</th>
									<th>전시상태</th>
									<th>콘텐츠타입</th>
									<th>썸네일(PC)</th>
									
									<th>제목</th>
									<th>전시텍스트</th>
									<th>연결URL</th>
									<th>관리자</th>
									<th>등록일자</th>
									<th>업데이트 일자</th>
								</tr>
							</thead>
							<?php



								$num = 0;
								$check_num = 0;

								$sql = "select  * from main_contents order by mb_update DESC ";
								$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
								while($info	 = mysqli_fetch_array($res)){
									$num += 1;
									echo "
										<tr>
											<td>".$num."</td>
											<td>".$info['mb_order']."</td>";
											
											$mb_show = array("비전시","전시")[$info['mb_show']];
											$check_num +=$info['mb_show'];

											echo "<td><a href='01.main_reg_proc1.php?mb_show=".$info['mb_show']."&mb_inx=".$info['mb_inx']."'>".$mb_show."</td>
											<td>콘텐츠 타입 ".$info['mb_contentskind']." </td>
											<td><img src='img/".$info['mb_pc_file']."' height='50'></td>											
											<td><a href='01.main_reg.php?mb_inx=".$info['mb_inx']."'>".$info['mb_text']."</a></td>



											<td>".$info['mb_showtext']."</td>
											<td>".$info['mb_link']."</td>
											
											<td>".$info['mb_adminname']."</td>
											<td>".$info['mb_regtime']."</td>
											<td>".$info['mb_update']."</td>
											


										
										</tr>
									";

								}
							
							?>	
						</table>
※ 프로토 타입
<br> 중요 기능 1. 전시 순서에 따라 노출 콘텐츠 조정
<br> 중요 기능 2. 선택한 콘텐츠 타입별 다른 component 노출 

<br> 기능 추가. 리스트 화면에서 전시 상태 변경 가능 
<br> 정렬 기준
<br> 1. 리스트 및 배너 불러올때는 최신 업데이트 순으로 
<br> 2. 콘텐츠 노출 기준은 전시 상태 > 전시 순서 > 업에이트 순으로. 즉 전시 순서가 같은 경우 마지막 업데이트 한 일자 기준으로 노출
<p>
<br> 고객사 요청 사항
<br> 1.콘텐츠 갯수 많이 넣은 경우 



<br>






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
$(function() {
		
	
	var renderDate = function(data) {
		return moment(data).format("YYYY-MM-DD HH:mm");
	};

	
	var renderLink = function(data, type, row, meta) {
		$html = $('<a href="write?bannerNo='+ row.bannerNo +'" class="link">'+ data +'</a>');
		return $html.prop('outerHTML');
	};

	
	var renderImage = function(data) {
		if (!data) return '-';
		/* $file = $('<img />').attr('src', data.imgFullPath);
		return $file.prop('outerHTML'); */
		$file = '<span class="thumbnail"><img src="'+ data.imgFullPath +'"></span>';
		return $file;
	};

	
	var baseColumns = [
		{data: 'sn'			},
		{data: 'imageFileBucket', render: renderImage	, orderable: false},
		{data: 'bannerSj'		, render: renderLink	},
		{
			data: 'imageFileBucket',
			render: function(data, type, row, meta) {
				if (row.videoFileBucket) {
					return row.videoFileBucket.originFileNm;
				} else {
					return data.originFileNm;
				}
			},
			orderable: false
		},
		{
			data: 'videoFileBucket',
			render: function(data) {
				if (data) {
					return '영상';
				} else {
					return '이미지';
				}
			}
		},
		{data: 'updtDt'			, render: renderDate	},
		{
			data: 'sttusNo',
			render: function(data) {
				return data == '1'? 'Y' : 'N';
			}
		}
	];

	
	var ajax = {
        dom: '<f<t><ilp>>',
		contentType: 'application/json',
       	url: 'list',
       	type: 'post',
		data: function(d) {
			d.searchField = $('[name=searchField]').val();
			d.searchKeyword = $('[name=searchKeyword]').val();
			return JSON.stringify(d);
		}
	};

	
	var order = [];
	order.push([6, 'desc']);
	order.push([0, 'asc']);
	var table = $('#dataTable').DataTable({
		columns: baseColumns,
        ajax: ajax,
        order: order,
		stateSaveParams: function (settings, data) {
			data.searchField = $('[name=searchField]').val();
			data.searchKeyword = $('[name=searchKeyword]').val();
		},
		stateLoaded: function (settings, data) {
 			$('[name=searchField]').val(data.searchField);
 			$('[name=searchKeyword]').val(data.searchKeyword);
 		},
        fnStateLoadParams: function (oSettings, oData) {
        	if (document.referrer.indexOf('/article/main/visual/') < 0) {
        		return false;
        	}
        }
	});
});
/*]]>*/
</script>

</body>
</html>
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
						<div class="col-xs-6 text-right">
							
							<A HREF='xlsx/main_visual_20220524.xlsx'><button type="button" class="btn btn-default mr10"  id="btnExcelDownload"> 엑셀 다운로드</button></A>
							

							<!-- <button type="button" class="btn btn-default">삭제</button> -->
							<A HREF='main_reg.php'><button type="button" class="btn btn-primary" id="btnWrite">등록</button></A>
						</div>
					</div>
				</div>
				<div class="contents">







				
					<ul class="nav nav-tabs mt10" role="tablist">
						<li role="presentation" class="active"><a href="#" aria-controls="home" role="tab" data-toggle="tab">메인 비주얼 관리</a></li>
						<li role="presentation"><a href="01.main.php" aria-controls="messages">메인 게시물 관리</a></li>
					</ul>
					
					
					
					<div class="card">
						<div class="tools">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-inline">
									<span class="select">
											<select name="searchDateGb" id="" class="form-control">
												<option value="rcrit">등록일자</option>
												<option value="presnat">업데이트 일자</option>
												
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
								<div class="col-xs-6 text-right">
									<div class="form-inline">
										
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
								
									<span class="checkbox-inline">
										<label>
											<input type="checkbox" name="searchSttusAllYn" value="Y" > 전시
										</label>
									</span>
									<span class="checkbox-inline">
										<label>
											<input type="checkbox" name="searchSttusAllYn" value="Y" > 비전시
										</label>
									</span>
								</div>
								<div class="col-xs-6 text-right">
									<div class="form-inline">
										<span class="select">
												<select name="searchField" id="" class="form-control">
												<option value="">제목</option>
													<option value="name">전시텍스트</option>
													<option value="cn">관리자</option>
													<option value="cn">연결URL</option>

												</select>
											</span>
											<div class="input-group ">
												<input type="text" name="searchKeyword" class="form-control" placeholder="검색어 입력" />
												<span class="input-group-btn">
													<input  type='submit' class="btn btn-success login-btn" type="submit" value="검색">
												</span>
											</div>
											</div>
										</form>
									</div>
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
									<th>썸네일(PC)</th>
									<th>썸네일(MO)</th>
									<th>제목</th>
									<th>전시텍스트</th>
									<th>연결URL</th>
									<th>관리자</th>
									<th>등록일자</th>
									<th>업데이트 일자</th>
									<th>클릭수</th>
								</tr>
							</thead>
							<?php



								$num = 0;
								$check_num = 0;

								$sql = "select  * from main_banner order by mb_update DESC ";
								$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
								while($info	 = mysqli_fetch_array($res)){
									$num += 1;
									echo "
										<tr>
											<td>".$num."</td>
											<td>".$info['mb_order']."</td>";
											
											$mb_show = array("비전시","전시")[$info['mb_show']];
											$check_num +=$info['mb_show'];

											echo "<td><a href='main_reg_proc1.php?mb_show=".$info['mb_show']."&mb_inx=".$info['mb_inx']."'>".$mb_show."</td>
											<td><img src='img/".$info['mb_pc_file']."' height='50'></td>
											<td><img src='img/".$info['mb_mo_file']."' height='50'></td>											
											<td><a href='main_reg.php?mb_inx=".$info['mb_inx']."'>".$info['mb_text']."</a></td>



											<td>".$info['mb_showtext']."</td>
											<td>".$info['mb_link']."</td>
											
											<td>".$info['mb_adminname']."</td>
											<td>".$info['mb_regtime']."</td>
											<td>".$info['mb_update']."</td>

											<td>".rand(500,6000)."</td>
											


										
										</tr>
									";

								}
							
							?>	
						</table>
※ 프로토 타입
<br> 중요 기능 1. 전시 갯수에 따라 메인 배너의 노출 형태 변경
<br> 중요 기능 2. 관리자가 입력한 배너 갯수가 많아도, 시스템이 최대 5개 까지만 노출
<br> 중요 기능 3. 배너 미리보기 요약 (하단 참고 )
<br> <?php 

if($check_num<3){
	$want_text = 'Immersive Brand Navigation - Single Hero';
	$check_num = 1;
}
elseif($check_num<6){
	$want_text = 'Immersive Brand Navigation - 4 Tabs';
}else{
	$want_text = 'Immersive Brand Navigation - 4 Tabs';
	$check_num = "5(최대 노출 배너갯수는 5개입니다.)";
}
echo "<font color = 'red'>배너 타입 : ".$want_text;
echo "<br>배너 갯수 : ".$check_num."</font>";
?>
<br> 기능 추가. 리스트 화면에서 전시 상태 변경 가능 
<br> 정렬 기준
<br> 1. 리스트 및 배너 불러올때는 최신 업데이트 순으로 
<br> 2. 메인 배너 노출 기준은 전시 상태 > 전시 순서 > 업에이트 순으로. 즉 전시 순서가 같은 경우 마지막 업데이트 한 일자 기준으로 노출
<p>
<br> 고객사 요청 사항
<br> 1. 메인 배너 리스트에서 보고 싶은 데이터 위주로 확인 부탁 드립니다. 
<br> 2. 메인 배너 리스트에서 하고 싶은 업무 정리 부탁 드립니다. 
<br> ex) 전시 상태 변셩 / 전시 순서 변경 등등
<br> 테스트를 위한 초기화 버튼 : <A HREF='main_reg_origin.php'><button type="button" class="btn btn-primary" id="btnWrite">초기화</button></A> (클릭시 초기 데이터로 돌림)



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
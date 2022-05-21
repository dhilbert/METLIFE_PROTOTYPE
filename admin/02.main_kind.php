<?php
error_reporting (E_ALL);
ini_set ("display_errors", 1);



include_once('../lib/dbcon.php');
include_once('head.php');

 
?>

		
<div id="container" class="container">
			<div class="wrap-contents">
				<div class="page-control">
					
				</div>
				<div class="contents">

				<div class="page-control">
					<div class="row">
						<div class="col-xs-6">
							<span class="page-title">후기 관리</span>
						</div>
						<div class="col-xs-6 text-right">
						
							<A HREF='02.main_reg_kind.php'><button type="button" class="btn btn-primary" id="btnWrite">등록</button></A>
						</div>
					</div>
				</div>








					<div class="card">
					<ul class="nav nav-tabs mt10" role="tablist">
						<li role="presentation" ><a href="/METLIFE_PROTOTYPE/admin/02.main.php" aria-controls="home" role="tab" data-toggle="tab">후기관리</a></li>
						<li role="presentation" class="active"><a href="/METLIFE_PROTOTYPE/admin/02.main_kind.php" aria-controls="messages">후기목록관리</a></li>
					</ul>




					<div class="tools">
							
					


















						
						<table id="dataTable" class="table tablesorter table-hover table-bordered table-vertical">
						
							<thead>
								<tr>
									<th>#</th>
									
									<th>전시상태</th>
									<th>전시순서</th>
									<th>종류</th>
									<th>삭제</th>
								
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
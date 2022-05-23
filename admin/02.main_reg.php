<?php
	
	include_once('../lib/dbcon.php');

	include_once('head.php');
	include_once('function.php');


	$mb_inx = isset($_GET['mb_inx']) ? $_GET['mb_inx'] : '0';
	$check = isset($_GET['mb_inx']) ? $_GET['mb_inx'] : '0';

	$sql = "select  * from main_contents where mb_inx = ".$mb_inx.";";
	$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
	$info	 = mysqli_fetch_array($res);

	if(!$info){$mb_text='';}else{$mb_text=$info['mb_text'];}
	if(!$info){$mb_contentskind='';}else{$mb_contentskind=$info['mb_contentskind'];}
	if(!$info){$mb_order='';}else{$mb_order=$info['mb_order'];}
	if(!$info){$mb_showtext='';}else{$mb_showtext=$info['mb_showtext'];}
	if(!$info){$mb_showtext_sub='';}else{$mb_showtext_sub=$info['mb_showtext_sub'];}
	if(!$info){$mb_link='';}else{$mb_link=$info['mb_link'];}
	if(!$info){$mb_ctaname='';}else{$mb_ctaname=$info['mb_ctaname'];}
	if(!$info){$mb_pc_file='';}else{$mb_pc_file=$info['mb_pc_file'];}
	if(!$info){$mb_mo_file='';}else{$mb_mo_file=$info['mb_mo_file'];}
	if(!$info){$mb_show='';}else{$mb_show=$info['mb_show'];}
	if(!$info){$mb_u='';}else{$mb_u=$info['mb_u'];}
	if(!$info){$mb_adminname='';}else{$mb_adminname=$info['mb_adminname'];}
	if(!$info){$mb_regtime='';}else{$mb_regtime=$info['mb_regtime'];}



?>

		
<link rel="stylesheet" href="https://metlifewelfare.org/css/lib/bootstrap/bootstrap.css" />
<link rel="stylesheet" href="https://metlifewelfare.org/css/lib/font-awesome/font-awesome.css" />
<link rel="stylesheet" href="https://metlifewelfare.org/css/lib/jquery-ui/jquery-ui.css" />
<link rel="stylesheet" href="https://metlifewelfare.org/css/lib/bootstrap-datepicker/bootstrap-datepicker3.css" />
<link rel="stylesheet" href="https://metlifewelfare.org/css/lib/bootstrap-fileinput/fileinput.css" />
<link rel="stylesheet" href="../../css/summernote.css" />
<link rel="stylesheet" href="https://metlifewelfare.org//cdn.datatables.net/v/bs4/dt-1.10.18/sl-1.2.6/datatables.min.css" />
<link rel="stylesheet" href="https://metlifewelfare.org//cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.9/combined/css/gijgo.min.css" />

<link rel="stylesheet" href="https://metlifewelfare.org/css/ntapp/custom.css?20180911_2" />

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<div id="container" class="container">
			<div class="wrap-contents">
				<div class="page-control">
					<div class="row">
						<div class="col-xs-6">
							<span class="page-title">후기 등록</span>
						</div>
						<div class="col-xs-6 text-right">
								
								<?php
								
									if(	$check ==0){
								?>
									<form  method="GET" action="02.proc.php" enctype="multipart/form-data" onsubmit="return formSubmit(this);">
									<input type="hidden" class="form-control" id="bannerSj" name="mb_inx" value="11" />
									<input   class="btn btn-default" type="submit" value="저장">
								<?php
									}else{
								?>
									<form  method="GET" action="02.proc.php" enctype="multipart/form-data" onsubmit="return formSubmit(this);">
									<input   class="btn btn-default" type="submit" value="수정">
									<input type="hidden" class="form-control" id="bannerSj" name="mb_inx" value="12" />
									
								<?php


									}	



								?>


								
								
							   
								

									<a href='/METLIFE_PROTOTYPE/admin/02.main.php' class="btn btn-primary">목록</a>
								</div>
							</div>
				<div class="contents">
					<div class="card">
						<form data-parsley-validate="" data-parsley-excluded="input[type=hidden], [disabled]">
						<input type="hidden" id="keyField" name="rvwNo" value="94" />
						<table class="table table-bordered table-horizontal">
							<colgroup>
								<col style="width: 15%;">
								<col />
							</colgroup>
							<tbody>

																							
								<tr>
									<th>제목</th>
									<td colspan="3">
									<input type="text" class="form-control" required="required" id="rvwSj" name="rvwSj" value="2021년 암투병 소방관분들의 치료비를 지원한 기부캠페인 이야기" />
									</td>
								</tr>
								<tr>
									<th>전시 텍스트</th>
									<td colspan="3">
									<input type="text" class="form-control" required="required" id="rvwSj" name="rvwSj" value="2021년 암투병 소방관분들의 치료비를 지원한 기부캠페인 이야기" />
									</td>
								</tr>

								<tr>
									<th>분류</th>
									<td colspan="3">
									<span class="select">
											<select class="form-control" name="cateUpperCode" >

												
												<?php 
													$sql = "select  * from kind_list_0;";
													$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
													while($info	 = mysqli_fetch_array($res)){

														echo "<option value=''>".$info['kl_name']."</option>";


													};
												
												
												
												?>
											
											</select>
										</span>
										
									</td>
								</tr>

								<tr height="300" table-layout='fixed'>
									<th  >내용</th>
									<td colspan="3" >
										
									<div id="summernote" style=" height: 250px; table-layout:fixed;"  ><p><img src="https://metlifewelfare.org/img/2022/04/07/2a25dd6a-3183-4275-b6e4-d447793e0ae1" style="width: 750px; "></p></div>

									</td>
								</tr>
						
								<tr>
									<th>사용 여부</th>
									<td colspan="3">
										<div class="onoffswitch">
											<input type="checkbox" class="onoffswitch-checkbox" data-id="" name="useYn" id="use-check" value="Y" checked="checked"  />
											<label class="onoffswitch-label" for="use-check">
												<i class="inner"></i><i class="switch"></i>
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<th>썸네일 (PC)</th>
									<td>
										<div class="thumbnail">
											<img src="https://metlifewelfare.org/img/2022/04/07/e1cefaf2-5ad2-4e22-9e0b-287bda091bb2" style="max-width:100px;" />
										</div>
										<div class="mt10 mb5">
											<a href="#" class="download" data-url="2473/2706/암투병소방관치료_추가배너250x300.jpg">
												<i class="fa fa-file"></i>
												암투병소방관치료_추가배너250x300.jpg
												<input type="hidden" name="pcImgFileGroupNo" value="2473" />
											</a>
										</div>
										<div class="form-group no-required-file mt10">
											<label><input type="file" id="pcImgFile" name="pcImgFile" accept="image/*" /></label>
											<button type="button" class="btn btn-xs btn-link btn-remove"><i class="fa fa-times-circle"></i></button>
										</div>
										<p class="help-block">이미지 사이즈: 250*300</p>
									</td>
									<th>썸네일 (Mobile)</th>
									<td>
										<div class="thumbnail">
											<img src="https://metlifewelfare.org/img/2022/04/07/d11076bd-a6f5-46ea-914c-fca654d680aa" style="max-width:100px;" />
										</div>
										<div class="mt10 mb5">
											<a href="#" class="download" data-url="2474/2707/암투병소방관치료_추가배너880x440.jpg">
												<i class="fa fa-file"></i>
												암투병소방관치료_추가배너880x440.jpg
												<input type="hidden" name="moImgFileGroupNo" value="2474" />
											</a>
										</div>
										<div class="form-group no-required-file mt10">
											<label><input type="file" id="moImgFile" name="moImgFile" accept="image/*" /></label>
											<button type="button" class="btn btn-xs btn-link btn-remove"><i class="fa fa-times-circle"></i></button>
										</div>
										<p class="help-block">이미지 사이즈: 880*440</p>
									</td>
								</tr>								
							</tbody>
						</table>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	
	</div>
	
<script src="https://metlifewelfare.org/js/lib/base/base-1.1a.js"></script>
<script src="https://metlifewelfare.org/js/lib/jquery/jquery.min.js"></script>
<script src="https://metlifewelfare.org/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="https://metlifewelfare.org/js/lib/jwt/jwt-decode.min.js"></script>
<script src="https://metlifewelfare.org/js/lib/parsley/parsley.min.js"></script>
<script src="https://metlifewelfare.org/js/lib/parsley/i18n/ko.js"></script>
<script src="https://metlifewelfare.org/js/lib/cleave/cleave.min.js"></script>
<script src="https://metlifewelfare.org/js/lib/cleave/cleave-phone.kr.js"></script>
<script src="https://metlifewelfare.org/js/lib/moment/moment-with-locales.min.js"></script>
<script src="https://metlifewelfare.org/js/lib/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="https://metlifewelfare.org/js/lib/bootstrap-datepicker/bootstrap-datepicker.ko.min.js"></script>
<script src="https://metlifewelfare.org/js/lib/summernote/summernote.js?20180910"></script>
<script src="https://metlifewelfare.org/js/lib/summernote/lang/summernote-ko-KR.js"></script>
<script src="https://metlifewelfare.org/js/lib/gijgo/gijgo.js?20180907"></script>
<script src="https://metlifewelfare.org/js/lib/jquery.fileDownload.js"></script>
<script src="https://metlifewelfare.org/js/lib/table-merger/table-merger.js"></script>
<script src="https://metlifewelfare.org/js/lib/datatables/datatables.js"></script>
<script src="https://metlifewelfare.org/js/lib/jquery/plugins/jquery.form.min.js"></script>
 
<script src="https://metlifewelfare.org/js/ntapp/common.js?20190514"></script>

	

  
  <script>
    $(document).ready(function() {
		
        $('#summernote').summernote({
			height: 300, 
			minHeight: null, 
			maxHeight: null, 
			lang : 'ko-KR', 
			onImageUpload: function(files, editor, welEditable) { sendFile(files[0], editor, welEditable); 
			
			
			}


		}


		);
    });
  </script>

</html>
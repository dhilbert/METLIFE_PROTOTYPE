<?php
	
	include_once('../lib/dbcon.php');

	include_once('head.php');
	include_once('function.php');


	$mb_inx = isset($_GET['mb_inx']) ? $_GET['mb_inx'] : '0';
	$check = isset($_GET['mb_inx']) ? $_GET['mb_inx'] : '0';
	$sql = "select  * from main_banner where mb_inx = ".$mb_inx.";";
	$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
	$info	 = mysqli_fetch_array($res);

	if(!$info){$mb_text='';}else{$mb_text=$info['mb_text'];}
	if(!$info){$mb_kind='';}else{$mb_kind=$info['mb_kind'];}
	if(!$info){$mb_order='';}else{$mb_order=$info['mb_order'];}
	if(!$info){$mb_showtext='';}else{$mb_showtext=$info['mb_showtext'];}
	if(!$info){$mb_link='';}else{$mb_link=$info['mb_link'];}
	if(!$info){$mb_ctaname='';}else{$mb_ctaname=$info['mb_ctaname'];}
	if(!$info){$mb_pc_file='';}else{$mb_pc_file=$info['mb_pc_file'];}
	if(!$info){$mb_mo_file='';}else{$mb_mo_file=$info['mb_mo_file'];}
	if(!$info){$mb_show='';}else{$mb_show=$info['mb_show'];}
	if(!$info){$mb_adminname='';}else{$mb_adminname=$info['mb_adminname'];}
	if(!$info){$mb_regtime='';}else{$mb_regtime=$info['mb_regtime'];}
		


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
						<li role="presentation" class="active"><a href="#" aria-controls="home" role="tab" data-toggle="tab">메인 비주얼 관리</a></li>
						<li role="presentation"><a href="01.main.php" aria-controls="messages">메인 게시물 관리</a></li>
					</ul>
					<div class="card">
						
							
							<div class="row">
								<div class="col-xs-12 text-right">
								
								<?php
								
									if(	$check ==0){
								?>
									<form  name="uploadForm" id="uploadForm" method="POST" action="main_reg_proc.php" enctype="multipart/form-data" onsubmit="return formSubmit(this);">
									<input   class="btn btn-default" type="submit" value="저장">
								<?php
									}else{
								?>
									<form  name="uploadForm" id="uploadForm" method="POST" action="main_reg_update_proc.php" enctype="multipart/form-data" onsubmit="return formSubmit(this);">
									<input   class="btn btn-default" type="submit" value="수정">
									<input type="hidden" class="form-control" id="bannerSj" name="mb_inx" value="<?php echo $mb_inx;?>" />
								<?php


									}	



								?>


								
								
							   
								

									<a href='/METLIFE_PROTOTYPE/admin/main.php' class="btn btn-primary">목록</a>
								</div>
							</div>
							<table class="table table-bordered table-horizontal">
								<colgroup>
									<col style="width: 10%;" />
									<col />
								</colgroup>
								<tbody>
									<?php
									
										$text = '제목';
										$names = 'mb_text';
										$value = $mb_text;
										cute_jy_text($text,$names,$value);
										
										
										$text = '분류';
										$names = 'mb_kind';
										$value = $mb_kind;
										cute_jy_text($text,$names,$value);
										
									
									?>
									<tr>
										<th>순서</th>
										<td colspan="3">
											<div class="row col-xs-3">
												<input type="text" class="form-control" data-input-noCommaNumeral="" data-parsley-trigger="change" data-parsley-minlength="1" maxlength="5"   name="mb_order" value="<?php echo $mb_order;?>" />
											</div>
										</td>
									</tr>

									<?php
										$text = '전시 텍스트';
										$names = 'mb_showtext';
										$value = $mb_showtext;
										cute_jy_text($text,$names,$value);
									
										$text = '이동 링크';
										$names = 'mb_link';
										$value = $mb_link;
										cute_jy_text($text,$names,$value);
									
										$text = '버튼명';
										$names = 'mb_ctaname';
										$value = $mb_ctaname;
										cute_jy_text($text,$names,$value);
									
									
									
									
									?>
									<tr>
										<th>이미지 파일<br>(PC)</th>
										<td>
											
											
			



    <div>


			

		
        <input type="file" name="upfile1" id="upfile" value="img/<?php echo $mb_pc_file;?>"  />



						</div>
											
										</td>
										<th>이미지 파일<br>(MO)</th>
										<td>
											
										
    <div>


			


		


					<input type="file" name="upfile2" id="upfile" value="img/<?php echo $mb_mo_file;?>" />



				</div>
										</td>
									</tr>
									<tr>
										<th>사용유무</th>
										<td colspan="3">
											<div class="onoffswitch">
												<input type="checkbox" value="1" class="onoffswitch-checkbox" id="auth-01" name="mb_show"  /><input type="hidden" name="_sttusNo" value="on"/>
												<label class="onoffswitch-label" for="auth-01">
													<i class="inner"></i><i class="switch"></i>
												</label>
											</div>
										</td>
									</tr>
								</TBODY>
							</table>									


</form>

※ 프로토타입 유의사항
<br>1. 파일 업로드 안됨
<br>2. 로그인세션 안붙임. 현단비과장님과 김주연대리님중 한명이 관리자로 등록됨. 
<br>3. 이미지는 기존 이미지 random으로 배치됨. 
<br>4. 모바일 사이즈와 pc 사이즈는 완성본에 적용됨.




					</div>

				</div>
			</div>
		</div>
	
	</div>
	
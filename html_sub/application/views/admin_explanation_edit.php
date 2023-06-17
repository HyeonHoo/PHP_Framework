<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">표현기법</div>

			&nbsp;&nbsp;&nbsp;

			<script>
	$(function() {
			 $("#writeday") .datetimepicker({
				  locale: "ko",
				  format: "YYYY-MM-DD",
				  defaultDate: moment()
			 });
		});

		</script>
	<form name="form1" method="post" action="" enctype="multipart/form-data">
	
	
		<div class="table-responsive text-nowrap">
        <!--Table-->
        <table class="table table-striped">
		  <thead>
			<tr>
			  <th scope="col">번호</th>
			  <th scope="col">1</th>
			</tr>
		  </thead>
		  <tbody>
		 <tr>
			  <th scope="row"><font color="red">*</font>표현기법</th>	
			<td>
					<div class="form-inline">
					<input  type="text" name="name"  class="form-control form-control-sm" size="20" maxlength="20" 
					value="<?=$row->name53; ?>"  >
					<? If (form_error("name")==true) echo form_error("name"); ?>
				</div>
				</td>
		</tr>
		  <tr>
			  <th scope="row"><font color="red">*</font>본문</th>
			  <td>
					<div class="form-inline">
					<input  type="text" name="comment"  class="form-control form-control-sm" size="100" maxlength="200" value="<?=$row->comment53; ?>"  >
					<? If (form_error("comment")==true) echo form_error("comment"); ?>
				</div>
				</td>
			</tr>
			<tr>
			  <th scope="row"></font>작품 사진</th>
			  <td>
					<div class="form-inline">
					<b>파일이름</b> : <?=$row->pic53; ?> &nbsp;&nbsp;
					<input  type="file" name="pic" value="" size="20" class="form-control form-control-sm"> <br>
					<?
					if ($row->pic53)     // 이미지가 있는 경우
						echo("<img src='/~sale53/product_img/$row->pic53' width='200' class='img-fluid img-thumbnail'>");
					else                   // 이미지가 없는 경우
						echo("<img src='' width='200' class='img-fluid img-thumbnail'>");
				?>
				</div>
				</td>
			</tr>
		  </tbody>

		</table>
</div>
		<div align="center">
		<input type="submit" value="저장" class="btn btn-sm btn-dark">&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm btn-dark" onclick="history.back();">		&nbsp;&nbsp;
		</div>
		&nbsp;&nbsp;
		</form>

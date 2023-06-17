<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">작가 등록</div>

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
			  <th scope="row"><font color="red">*</font>메인 제목</th>
			  <td>
					<div class="form-inline">
					<input  type="text" name="intro"  class="form-control form-control-sm" size="20" maxlength="20" value="<?=set_value("intro"); ?>"  >
					<? If (form_error("intro")==true) echo form_error("intro"); ?>
				</div>
				</td>
			</tr>
			<tr>
			  <th scope="row"><font color="red">*</font>본문</th>
			  <td>
					<div class="form-inline">
					<input  type="text" name="sub_intro"  class="form-control form-control-sm" size="100" maxlength="200" value="<?=set_value("sub_intro"); ?>"  >
					<? If (form_error("sub_intro")==true) echo form_error("sub_intro"); ?>
				</div>
				</td>
			</tr>
			<tr>
			  <th scope="row"></font>작품 사진</th>
			  <td>
					<div class="form-inline">
					<input  type="file" name="pic" value=""  class="form-control form-control-sm">
				</div>
				</td>
			</tr>

		  </tbody>
		</table>

		<div align="center">
		<input type="submit" value="저장" class="btn btn-sm btn-dark">&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm btn-dark" onclick="history.back();">		
		</div>
		</form>


		
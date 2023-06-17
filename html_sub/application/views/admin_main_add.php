<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">작품 등록</div>

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
			  <th scope="row"><font color="red">*</font>작품 날짜</th>	
			<td>
					<div class="form-inline">
					<input  type="text" name="writeday"  class="form-control form-control-sm" size="20" maxlength="5" value="<?=set_value("writeday"); ?>"  >
					<? If (form_error("writeday")==true) echo form_error("writeday"); ?> &nbsp;&nbsp;&nbsp;YYYY형식으로 입력하세요.
				</div>
				</td>
		</tr>
		  <tr>
			  <th scope="row"><font color="red">*</font>작품 제목</th>
			  <td>
					<div class="form-inline">
					<input  type="text" name="title"  class="form-control form-control-sm" size="20" maxlength="20" value="<?=set_value("title"); ?>"  >
					<? If (form_error("title")==true) echo form_error("title"); ?>
				</div>
				</td>
			</tr>
			<tr>
			  <th scope="row"><font color="red">*</font>표현 기법</th>
			  <td>
				<div class="form-inline">
					<select name="ex_no" class="form-control-control-sm">
						<option value="">선택하세요.</option>
				<?
					$ex_no=set_value("ex_no");
					foreach ($list as $row)
					{
						if ($row->no53==$ex_no)
							echo("<option value='$row->no53' selected>$row->name53 </option>");
						else
							echo("<option value='$row->no53'>$row->name53 </option>");
					}
				?>
				</select>
				</div>
				<? if(form_error("ex_no")==TRUE) echo form_error("ex_no"); ?>

				</div>
			  </td>
			</tr>
			<tr>
			  <th scope="row"><font color="red">*</font>작품 소개</th>
			  <td>
					<div class="form-inline">
					<input  type="text" name="sub_title"  class="form-control form-control-sm" size="100" maxlength="100" value="<?=set_value("sub_title"); ?>"  >
					<? If (form_error("sub_title")==true) echo form_error("sub_title"); ?>
				</div>
				</td>
			</tr>
			<tr>
			  <th scope="row"><font color="red">*</font>전시장</th>
			  <td>
					<div class="form-inline">
					<input  type="text" name="showroom"  class="form-control form-control-sm" size="100" maxlength="100" value="<?=set_value("showroom"); ?>"  >
					<? If (form_error("showroom")==true) echo form_error("showroom"); ?>
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
		</div>

		<div align="center">
		<input type="submit" value="저장" class="btn btn-sm btn-dark">&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm btn-dark" onclick="history.back();">		
		</div>
		</form>

			
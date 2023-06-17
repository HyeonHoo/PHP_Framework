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

		<div style="width:900px; height:200px; float:left;">
				<table class="table table-hover">
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
					<? If (form_error("writeday")==true) echo form_error("writeday"); ?>
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

		<div align="center">
		<input type="submit" value="저장" class="btn btn-sm btn-dark">&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm btn-dark" onclick="history.back();">		
		</div>
		</form>

			<!----------------
		<form name="form1" method="post" action="" enctype="multipart/form-data">

		<table class="table table-bordered table-sm mymargin5">
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle"> 번호</td>
			<td width="80%" align="left">1</td>
		</tr>
		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red">*</font> 이름
			</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="name"  class="form-control form-control-sm" size="20" maxlength="20" value="<?=set_value("name"); ?>"  class="form-control form-control-sm">
					<? If (form_error("name")==true) echo form_error("name"); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red">*</font> 아이디
			</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="uid"  class="form-control form-control-sm" size="20" maxlength="20" value="<?=set_value("uid"); ?>" class="form-control form-control-sm">
					<? If (form_error("uid")==true) echo form_error("uid"); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red">*</font> 암호
			</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="pwd"  class="form-control form-control-sm" size="20" maxlength="20" value="<?=set_value("pwd"); ?>" class="form-control form-control-sm">
					<? If (form_error("pwd")==true) echo form_error("pwd"); ?>
				</div>
			</td>
		</tr>
		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red"></font> 닉네임
			</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="nickname"  class="form-control form-control-sm" size="20" maxlength="20" value="<?=set_value("nickname"); ?>"  class="form-control form-control-sm">
					<? If (form_error("nickname")==true) echo form_error("nickname"); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red"></font> 전화
			</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="tel1" size="3" maxlength="3" value="" class="form-control form-control-sm">-
					<input  type="text" name="tel2" size="4" maxlength="4" value="" class="form-control form-control-sm">-
					<input  type="text" name="tel3" size="4" maxlength="4" value="" class="form-control form-control-sm">
				</div>
			</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red"></font> 등급
			</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="radio" name="rank"  value="0" >직원&nbsp;&nbsp;
					<input  type="radio" name="rank"  value="1" checked >관리자
				</div>
			</td>
		</tr>
		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red"></font> 사진</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="file" name="bgpic" value=""  class="form-control form-control-sm">
				</div>
			</td>
		</tr>
		</table>
				---------------->
		
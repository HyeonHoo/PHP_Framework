
			<br>
			<div class="alert mycolor1" role="alert">사용자</div>

		<form name="form1" method="post" action="">

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
		</table>

		<div align="center">
		<input type="submit" value="저장" class="btn btn-sm mycolor1">&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm mycolor1" onclick="history.back();">		
		</div>
		</form>

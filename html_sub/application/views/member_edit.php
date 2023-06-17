
			<br>
			<div class="alert mycolor1" role="alert">사용자</div>

		<form name="form1" method="post" action="">

		<table class="table table-bordered table-sm mymargin5">
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle"> 번호</td>
			<td width="80%" align="left">
			<?=$row->no53; ?>
			</td>
		</tr>
		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red">*</font> 이름
			</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="name"  class="form-control form-control-sm" size="20" maxlength="20" value="<?=$row->name53; ?>"  class="form-control form-control-sm">
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
					<input  type="text" name="uid"  class="form-control form-control-sm" size="20" maxlength="20" value="<?=$row->uid53; ?>" class="form-control form-control-sm">
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
					<input  type="text" name="pwd"  class="form-control form-control-sm" size="20" maxlength="20" value="<?=$row->pwd53; ?>" class="form-control form-control-sm">
					<? If (form_error("pwd")==true) echo form_error("pwd"); ?>
				</div>
			</td>
		</tr>
		<?
		  $tel1 = trim(substr($row->tel53,0,3));
		  $tel2 = trim(substr($row->tel53,3,4));
		  $tel3 = trim(substr($row->tel53,7,4));
		?>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red"></font> 전화
			</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="tel1" size="3" maxlength="3" value="<?=$tel1; ?>" class="form-control form-control-sm">-
					<input  type="text" name="tel2" size="4" maxlength="4" value="<?=$tel2; ?>" class="form-control form-control-sm">-
					<input  type="text" name="tel3" size="4" maxlength="4" value="<?=$tel3; ?>" class="form-control form-control-sm">
				</div>
			</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red"></font> 등급
			</td>
			<td width="80%" align="left">
				<div class="form-inline">

		<?if ($row->rank53==0) {?>

		<input type="radio" name="rank" value="0" checked>직원&nbsp;&nbsp;
		<input type="radio" name="rank" value="1">관리자
		
		<?} else {?>

		<input type="radio" name="rank" value="0" >직원&nbsp;&nbsp;
		<input type="radio" name="rank" value="1"checked>관리자
		<? } ?>			

				</div>
			</td>
		</tr>
		</table>

		<div align="center">
		<input type="submit" value="저장" class="btn btn-sm mycolor1">&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm mycolor1" onclick="history.back();">		
		</div>
		</form>

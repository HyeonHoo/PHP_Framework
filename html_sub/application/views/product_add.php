
			<br>
			<div class="alert mycolor1" role="alert">제품</div>

		<form name="form1" method="post" action="" enctype="multipart/form-data">

		<table class="table table-bordered table-sm mymargin5">
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red">*</font> 구분명</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<select name="gubun_no" class="form-control-control-sm">
						<option value="">선택하세요.</option>
				<?
					$gubun_no=set_value("gubun_no");
					foreach ($list as $row)
					{
						if ($row->no53==$gubun_no)
							echo("<option value='$row->no53' selected>$row->name53 </option>");
						else
							echo("<option value='$row->no53'>$row->name53 </option>");
					}
				?>
				</select>
				</div>
				<? if(form_error("gubun_no")==TRUE) echo form_error("gubun_no"); ?>
			</td>
		</tr>

		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red">*</font> 제품명</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="name" value="<?=set_value("name"); ?>"  
					class="form-control form-control-sm">
				</div>
					<? If (form_error("name")==true) echo form_error("name"); ?>
			</td>
		</tr>

		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red">*</font> 단가</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="price" value="<?=set_value("price"); ?>"  
					class="form-control form-control-sm">
				</div>
					<? If (form_error("price")==true) echo form_error("price"); ?>
			</td>
		</tr>

		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red"></font> 재고</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="jaego" value="" class="form-control form-control-sm">
				</div>
			</td>
		</tr>

		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red"></font> 사진</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="file" name="pic" value=""  class="form-control form-control-sm">
				</div>
			</td>
		</tr>


		</table>

		<div align="center">
		<input type="submit" value="저장" class="btn btn-sm mycolor1">&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm mycolor1" onclick="history.back();">		
		</div>
		</form>

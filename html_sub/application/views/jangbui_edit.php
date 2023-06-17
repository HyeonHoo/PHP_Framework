
			<br>
			<div class="alert mycolor1" role="alert">매입장</div>
<script>
		$(function() {
			 $("#writeday") .datetimepicker({
				  locale: "ko",
				  format: "YYYY-MM-DD",
				  defaultDate: moment()
			 });
		});

		function select_product()
		{
			var str;
			str = form1.sel_product_no.value;
			if (str=="")
			{
				form1.product_no.value = "" ;
				form1.price.value = "" ;
				form1.prices.value = "" ;
			}
			else
			{
				str = str.split("^^");
				form1.product_no.value=str[0];
				form1.price.value = str[1];
				form1.prices.value=Number(form1.price.value) * Number(form1.numi.value);
			}
		}
		function cal_prices()
		{
			form1.prices.value=Number(form1.price.value) * Number(form1.numi.value);
			form1.bigo.focus();
		}
		</script>

		<form name="form1" method="post" action="" >

		<table class="table table-bordered table-sm mymargin5">
		<tr>
		<td width="20%" class="mycolor2" style="vertical-align:middle">번호</td>
		<td width="80%" align="left"><div class="form-inline"><?=$row->no53; ?></div></td>
		</tr>
		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red">*</font> 날짜</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<div class="input-group  input-group-sm table-sm date" id="writeday">
					<input  type="text" name="writeday" value="<?=$row->writeday53; ?>"  
					class="form-control form-control-sm">
					<div class="input-group-append">
						    <div class="input-group-text">
								<div class="input-group-addon"><i class="far fa-calendar-alt fa-lg"></i></div>
								</div>
							</div>
						</div>
				</div>
					<? If (form_error("writeday")==true) echo form_error("writeday"); ?>
			</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red">*</font>제품명</td>
			<td width="80%" align="left">
				<div class="form-inline">
				<input type='hidden' name='product_no' value="<?=$row->product_no53; ?>">
					<select name="sel_product_no" class="form-control-control-sm"
						onChange="select_product();">
						<option value="">선택하세요.</option>
				<?
					foreach ($list as $row1)
					{
						if ($row->product_no53==$row1->no53)
							echo("<option value='$row1->no53^^$row1->price53' selected>$row1->name53($row1->price53) </option>");
						else
							echo("<option value='$row1->no53^^$row1->price53'>$row1->name53($row1->price53) </option>");
					}
				?>
				</select>
				</div>
				<? if(form_error("product_no")==TRUE) echo form_error("product_no"); ?>
			</td>
		</tr>
		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red">*</font> 단가</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="price" value="<?=$row->price53; ?>" class="form-control form-control-sm"
						onChange='cal_prices();'>
				</div>
					<? If (form_error("price")==true) echo form_error("price"); ?>
			</td>
		</tr>
		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red"></font> 수량</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="numi" value="<?=$row->numi53; ?>" class="form-control form-control-sm"
					onChange='cal_prices();'>
				</div>
			</td>
		</tr>
		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red"></font> 금액</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="prices" value="<?=$row->prices53; ?>" class="form-control form-control-sm" 
					readonly style="border:0">
				</div>
			</td>
		</tr>
		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red"></font> 비고</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="bigo" value="<?=$row->bigo53; ?>" class="form-control form-control-sm">
				</div>
			</td>
		</tr>

		</table>

		<div align="center">
		<input type="submit" value="저장" class="btn btn-sm mycolor1">&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm mycolor1" onclick="history.back();">		
		</div>
		</form>

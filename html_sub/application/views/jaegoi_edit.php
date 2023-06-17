		<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">음반수입</div>
					<script>
		$(function() {
			 $("#writeday") .datetimepicker({
				  locale: "ko",
				  format: "YYYY-MM-DD",
				  defaultDate: moment()
			 });
		});

		function select_music()
		{
			var str;
			str = form1.sel_music_no.value;
			if (str=="")
			{
				form1.music_no.value = "" ;
				form1.jaego.value = "" ;
				form1.jaegos.value = "" ;
			}
			else
			{
				str = str.split("^^");
				form1.music_no.value=str[0];
				form1.jaego.value = str[0];			
				form1.jaegos.value=Number(form1.jaego.value) * Number(form1.mui.value);
			}
		}
		function cal_prices()
		{
			form1.jaegos.value=Number(form1.jaego.value) * Number(form1.mui.value);
			form1.comment.focus();
		}
		</script>

		<form name="form1" method="post" action="">
		<table class="table table-hover">
		 <tbody>
			 <tr>
			<th scope="row"> 번호</td>
			<td>
			<div class="form-inline"><?=$row->no53; ?></div></td>

			</tr>
			<tr>
			  <th scope="row"><font color="red">*</font> 날짜</th>	
			<td>
				<div class="form-inline">
					<div class="input-group input-group-sm date" id="writeday">
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
			  <th scope="row">음반명</th>
			  <td>
			  <div class="form-inline">
					<input type='hidden' name='music_no' value="<?=$row->music_no53; ?>">
					<select name="sel_music_no" class="form-control-control-sm"
						onchange="select_music();">
						<option value="">선택하세요.</option>
				<?
					
					foreach ($list as $row1)
					{
						if ($row->music_no53==$row1->no53)
							echo("<option value='$row1->no53^^$row1->name53' selected>$row1->title53($row1->name53) </option>");
						else
							echo("<option value='$row1->no53^^$row1->name53'>$row1->title53($row1->name53) </option>");
					}
				?>
				</select>
				</div>
				</td>
			</tr>
			<?
				$mui=$row->mui53;
			?>
			<tr>
			  <th scope="row"><font color="red">*</font>음반재고</th>
			  <td>
					<div class="form-inline">
					<input  type="text" name="mui"  class="form-control form-control-sm" size="20" maxlength="20" 
					value="<?=$mui ; ?>"  class="form-control form-control-sm">
				</div>
				</td>
			</tr>
			<tr>
			  <th scope="row"></font>비고</th>
			  <td>
					<div class="form-inline">
					<input  type="text" name="comment"  class="form-control form-control-sm" size="20" maxlength="20" value="<?=$row->comment53; ?>"  class="form-control form-control-sm">
				</div>
				</td>
			</tr>


			<!--------------------
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
		</table>
		-------------------->

		</div>
		  </tbody>
		</table>

		<div align="center">
		<input type="submit" value="저장" class="btn btn-sm btn-dark">&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm btn-dark" onclick="history.back();">		
		</div>
		</form>
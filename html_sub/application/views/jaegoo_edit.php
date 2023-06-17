		<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">음반수출</div>
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
		function find_music()
		{
			window.open("/~sale53/findmusic","","resizable=yes,scrollbars=yes,width=700,height=600");
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
					<input type="text" name="music_title" value="<?=$row->music_title53; ?>" 
					class="form-control form-control-sm" disabled>
					<input type="button" value="제품찾기" onClick="find_music();"
					class="form-control btn btn-sm btn-dark">
				</div>
				</td>
			</tr>

			<tr>
			  <th scope="row"><font color="red">*</font>음반수출</th>
			  <td>
					<div class="form-inline">
					<input  type="text" name="muo"  class="form-control form-control-sm" size="20" maxlength="20" 
					value="<?=$row->muo53; ?>"  class="form-control form-control-sm">
				</div>
				</td>
			</tr>
			<tr>
			  <th scope="row"></font>음반설명</th>
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
				<div class="form-inline
				">
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
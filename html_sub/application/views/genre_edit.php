
		<div class="container">
		
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">장르</div>
			&nbsp;&nbsp;&nbsp;

		<form name="form1" method="post" action="">



		<form name="form1" method="post" action="">

			<table class="table table-hover">
			  <thead>
				<tr>
				  <th scope="col">번호</th>
				  <th scope="col"><?=$row->no53 ?></th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <th scope="row"><font color="red">*</font> 이름</th>
				  <td>
					<div class="form-inline">
					<input  type="text" name="name"  class="form-control form-control-sm" size="20" maxlength="20" 
					value="<?=$row->name53; ?>"  class="form-control form-control-sm">
					<? If (form_error("name")==true) echo form_error("name"); ?>
				</div>
				  </td>
				</tr>
		  </tbody>
		</table>
<!---------------------------
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
		</table>
		----------------------->

		<div align="center">
		<input type="submit" value="저장" class="btn btn-sm btn-dark">&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm btn-dark" onclick="history.back();">		
		</div>
		</form>

<?
    $no=$row->no53;

	$tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";
	
?>

			<br>
			<div class="alert mycolor1" role="alert">매입장</div>

		<form name="form1" method="post" action="">
		<table class="table table-bordered table-sm mymargin5">
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle"> 번호</td>
			<td width="80%" align="left"><div class="form-inline"> <?=$row->no53 ?> </div></td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red">*</font> 날짜</td>
			<td width="80%" align="left">
				<div class="form-inline"><?=$row->writeday53; ?></div>
			</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red">*</font> 제품명</td>
			<td width="80%" align="left">
				<div class="form-inline"><?=$row->product_name53; ?></div>
			</td>
		</tr>
	<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red"></font> 단가</td>
			<td width="80%" align="left">
				<div class="form-inline"><?=$row->price53 ?></div>
			</td>
		</tr>
	<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red"></font> 수량</td>
			<td width="80%" align="left">
				<div class="form-inline"><?=$row->numi53 ?></div>
			</td>
		</tr>
			<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red"></font> 금액</td>
			<td width="80%" align="left">
				<div class="form-inline"><?=$row->prices53 ?></div>
			</td>
		</tr>
			<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red"></font> 비고</td>
			<td width="80%" align="left">
				<div class="form-inline"><?=$row->bigo53 ?></div>
			</td>
		</tr>
		</table>

		<div align="center">
		<a href="/~sale53/jangbui/edit<?=$tmp ?>" class="btn btn-sm mycolor1">수정</a>
		<a href="/~sale53/jangbui/del<?=$tmp ?>" class="btn btn-sm mycolor1" onClick="return confirm('삭제할까요 ?');">삭제</a>&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm mycolor1" onclick="history.back();">		
		</div>
		</form>


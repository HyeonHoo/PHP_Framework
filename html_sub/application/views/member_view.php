<?
    $no=$row->no53;
    $tel1 = trim(substr($row->tel53,0,3));
    $tel2 = trim(substr($row->tel53,3,4));
    $tel3 = trim(substr($row->tel53,7,4));
    $tel = $tel1 . "-" . $tel2 . "-" . $tel3;
    $rank = $row->rank53==0 ? '직원' : '관리자';
?>

			<br>
			<div class="alert mycolor1" role="alert">사용자</div>

		<form name="form1" method="post" action="">
		<table class="table table-bordered table-sm mymargin5">
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle"> 번호</td>
			<td width="80%" align="left"><?=$row->no53 ?></td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red">*</font> 이름
			</td>
			<td width="80%" align="left">
				<?=$row->name53 ?>
			</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red">*</font> 아이디
			</td>
			<td width="80%" align="left">
				<?=$row->uid53 ?>
			</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red">*</font> 암호
			</td>
			<td width="80%" align="left">
				<?=$row-> pwd53 ?>
			</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red"></font> 전화
			</td>
			<td width="80%" align="left">
				<?=$tel ?>
			</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red"></font> 등급
			</td>
			<td width="80%" align="left">
				<?=$rank ?>
			</td>
		</tr>
		</table>

<?    $tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";  ?>


		<div align="center">
		<a href="/~sale53/member/edit<?=$tmp ?>" class="btn btn-sm mycolor1">수정</a>
		<a href="/~sale53/member/del<?=$tmp ?>" class="btn btn-sm mycolor1" onClick="return confirm('삭제할까요 ?');">삭제</a>&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm mycolor1" onclick="history.back();">		
		</div>
		</form>


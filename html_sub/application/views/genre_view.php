<?
    $no=$row->no53;
?>
		<div class="container">
		
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">장르</div>
			&nbsp;&nbsp;&nbsp;

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
				  <td><?=$row->name53 ?></td>
				</tr>
		  </tbody>
		</table>

<!--------------

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
		</table>

		------------------->

<?    $tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";  ?>


		<div align="center">
		<a href="/~sale53/genre/edit<?=$tmp ?>" class="btn btn-sm btn-dark">수정</a>
		<a href="/~sale53/genre/del<?=$tmp ?>" class="btn btn-sm btn-dark" onClick="return confirm('삭제할까요 ?');">삭제</a>&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm btn-dark" onclick="history.back();">		
		</div>
		</form>


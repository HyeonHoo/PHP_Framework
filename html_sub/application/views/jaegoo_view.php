<?
    $no=$row->no53;

	$tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";
	
?>
		<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">음반수출</div>
					
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
			  <th scope="row"><font color="red">*</font> 날짜</th>	
			<td><?=$row->writeday53; ?></td>
		</tr>
			<tr>
			  <th scope="row">음반명</th>
			  <td><?=$row->music_title53; ?></td>
			</tr>
			<tr>
			  <th scope="row"><font color="red">*</font>음반수출</th>
			  <td><?=$row->muo53; ?></td>
			</tr>
			<tr>
			  <th scope="row"></font>음반설명</th>
			  <td><?=$row->comment53; ?></td>
			</tr>
		  </tbody>
		</table>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div align="center">
		<a href="/~sale53/jaegoo/edit<?=$tmp ?>" class="btn btn-sm btn-dark">수정</a>
		<a href="/~sale53/jaegoo/del<?=$tmp ?>" class="btn btn-sm btn-dark" onClick="return confirm('삭제할까요 ?');">삭제</a>&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm btn-dark" onclick="history.back();">		
		</div>
		&nbsp;&nbsp;&nbsp;
		</form>

<?
    $no=$row->no53;
	$tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";
?>

 
<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">작품</div>

	<form name="form1" method="post" action="" enctype="multipart/form-data">

		
		
		<div class="table-responsive text-nowrap">
        <!--Table-->
        <table class="table table-striped">
		  <thead>
			<tr>
			  <th scope="col">번호</th>
			  <th scope="col"><?=$row->no53 ?></th>
			</tr>
		  </thead>
		  <tbody>
		  <tr>
			  <th scope="row"><font color="red">*</font>작품 날짜</th>	
			<td><?=$row->writeday53 ?></td>
		</tr>
		  <tr>
			  <th scope="row"><font color="red">*</font>작품 제목</th>
			  <td><?=$row->title53 ?></td>
			</tr>
			<tr>
			  <th scope="row"><font color="red">*</font>표현 기법</th>
			  <td><?=$row->explanation_name?></td>
			</tr>
			<tr>
			  <th scope="row"><font color="red">*</font>작품 소개</th>
			  <td><?=$row->sub_title53?></td>
			</tr>
			<tr>
			  <th scope="row"><font color="red">*</font>전시장</th>
			  <td><?=$row->showroom53?></td>
			</tr>
			<tr>
			  <th scope="row"></font>작품 사진</th>
			  <td><?=$row->pic53?></td>
			</tr>

		  </tbody>
		</table>
		</div>

	

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div align="center">
		<a href="/~sale53/admin_main/edit<?=$tmp ?>" class="btn btn-sm btn-dark">수정</a>
		<a href="/~sale53/admin_main/del<?=$tmp ?>" class="btn btn-sm btn-dark" onClick="return confirm('삭제할까요 ?');">삭제</a>&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm btn-dark" onclick="history.back();">		
		</div>
		&nbsp;&nbsp;&nbsp;
		</form>

			
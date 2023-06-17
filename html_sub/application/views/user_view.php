<?
    $no=$row->no53;
    $tel1 = trim(substr($row->tel53,0,3));
    $tel2 = trim(substr($row->tel53,3,4));
    $tel3 = trim(substr($row->tel53,7,4));
    $tel = $tel1 . "-" . $tel2 . "-" . $tel3;
    $rank = $row->rank53==0 ? '직원' : '관리자';
?>
		<div class="container">
		
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">뮤지션</div>
			&nbsp;&nbsp;&nbsp;

	<form name="form1" method="post" action="">

		<div style="width:200px; height:200px;  float:left; margin-right:10px;">
		<figure class="figure" align="left">
		 <?
					if ($row->bgpic53)     // 이미지가 있는 경우
						echo("<img src='/~sale53/product_img/$row->bgpic53' width='200'class='figure-img img-fluid rounded'>");
					else                   // 이미지가 없는 경우
						echo("<img src='' width='200' class='figure-img img-fluid rounded'>");
      ?>
		  <figcaption class="figure-caption"><b>파일이름</b> : <?=$row->bgpic53 ?></figcaption>
		</figure>
		</div>
		
		<div style="width:900px; height:200px; float:left;">
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
	 <tr>
      <th scope="row"><font color="red">*</font> 아이디</th>
      <td><?=$row->uid53 ?></td>
    </tr>
	 <tr>
      <th scope="row"><font color="red">*</font> 암호</th>
      <td><?=$row->pwd53 ?></td>
    </tr>
    <tr>
      <th scope="row"></font> 닉네임</th>
      <td><?=$row->nickname53 ?></td>
    </tr>
	<tr>
      <th scope="row"></font> 전화 번호</th>
      <td><?=$tel ?></td>
    </tr>
	 <tr>
      <th scope="row"></font> 등급</th>
      <td><?=$row->rank53 ?></td>
    </tr>
</div>
  </tbody>
</table>


<!-----------
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
				<font color="red">*</font> 닉네임
			</td>
			<td width="80%" align="left">
				<?=$row->nickname53 ?>
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
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red"></font> 배경사진
			</td>
			<td width="80%" align="left">
				<?=$row->bgpic53 ?>
			</td>
		</tr>
		</table>


------------------->


<?    $tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";  ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div align="center">
		<a href="/~sale53/user/edit<?=$tmp ?>" class="btn btn-sm btn-dark">수정</a>
		<a href="/~sale53/user/del<?=$tmp ?>" class="btn btn-sm btn-dark" onClick="return confirm('삭제할까요 ?');">삭제</a>&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm btn-dark" onclick="history.back();">		
		</div>
		&nbsp;&nbsp;&nbsp;
		</form>


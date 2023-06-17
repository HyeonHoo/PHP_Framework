<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">뮤지션</div>

		<form name="form1" method="post" action="" enctype="multipart/form-data" >

	<div style="width:200px; height:200px;  float:left; margin-right:10px;">
			
		<figure class="figure" align="left">
		 <?
					if ($row->bgpic53)     // 이미지가 있는 경우
						echo("<img src='/~sale53/product_img/$row->bgpic53' width='200'class='figure-img img-fluid rounded'>");
					else                   // 이미지가 없는 경우
						echo("<img src='' width='200' class='figure-img img-fluid rounded'>");
      ?>
		  <div class="form-inline">
					<b>파일이름</b> : <?=$row->bgpic53; ?> &nbsp;&nbsp;
			<input  type="file" name="bgpic" value="" size="20" class="form-control form-control-sm"> <br>
				</div>
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
			  <td>
			  		<div class="form-inline">
					<input  type="text" name="name"  class="form-control form-control-sm" size="20" maxlength="20" 
					value="<?=$row->name53; ?>"  class="form-control form-control-sm">
					<? If (form_error("name")==true) echo form_error("name"); ?>
					</div>
				</td>
			</tr>
			<tr>
			  <th scope="row"><font color="red">*</font> 아이디</th>
			  <td>
			  		<div class="form-inline">
					<input  type="text" name="uid"  class="form-control form-control-sm" size="20" maxlength="20" 
					value="<?=$row->uid53; ?>"  class="form-control form-control-sm">
					<? If (form_error("uid")==true) echo form_error("uid"); ?>
					</div>
				</td>
			</tr>
		<tr>
			  <th scope="row"><font color="red">*</font> 암호</th>
			  <td>
			  		<div class="form-inline">
					<input  type="text" name="pwd"  class="form-control form-control-sm" size="20" maxlength="20" 
					value="<?=$row->pwd53; ?>"  class="form-control form-control-sm">
					<? If (form_error("pwd")==true) echo form_error("pwd"); ?>
					</div>
				</td>
			</tr>
			<tr>
			  <th scope="row"></font> 닉네임</th>
			  <td>
			  		<div class="form-inline">
					<input  type="text" name="nickname"  class="form-control form-control-sm" size="20" maxlength="20" 
					value="<?=$row->nickname53; ?>"  class="form-control form-control-sm">
					<? If (form_error("nickname")==true) echo form_error("nickname"); ?>
					</div>
				</td>
			</tr>
		<?
		  $tel1 = trim(substr($row->tel53,0,3));
		  $tel2 = trim(substr($row->tel53,3,4));
		  $tel3 = trim(substr($row->tel53,7,4));
		?>
		<tr>
			  <th scope="row"></font> 전화</th>
			  <td>
					<div class="form-inline">
					<input  type="text" name="tel1" size="3" maxlength="3" value="<?=$tel1; ?>" class="form-control form-control-sm">-
					<input  type="text" name="tel2" size="4" maxlength="4" value="<?=$tel2; ?>" class="form-control form-control-sm">-
					<input  type="text" name="tel3" size="4" maxlength="4" value="<?=$tel3; ?>" class="form-control form-control-sm">
					</div>
				</td>
			</tr>
			<tr>
			  <th scope="row"></font> 등급</th>
			  <td>
					<div class="form-inline">

					<?if ($row->rank53==0) {?>

					<input type="radio" name="rank" value="0" checked>직원&nbsp;&nbsp;
					<input type="radio" name="rank" value="1">관리자
					
					<?} else {?>

					<input type="radio" name="rank" value="0" >직원&nbsp;&nbsp;
					<input type="radio" name="rank" value="1"checked>관리자
					<? } ?>			

				</div>
				</td>
			</tr>
			</div>
  </tbody>
</table>

<!-----------------------
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
					<input  type="text" name="name"  class="form-control form-control-sm" size="20" maxlength="20" 
					value="<?=$row->name53; ?>"  class="form-control form-control-sm">
					<? If (form_error("name")==true) echo form_error("name"); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red">*</font> 아이디
			</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="uid"  class="form-control form-control-sm" size="20" maxlength="20" value="<?=$row->uid53; ?>" class="form-control form-control-sm">
					<? If (form_error("uid")==true) echo form_error("uid"); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red">*</font> 암호
			</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="pwd"  class="form-control form-control-sm" size="20" maxlength="20" value="<?=$row->pwd53; ?>" class="form-control form-control-sm">
					<? If (form_error("pwd")==true) echo form_error("pwd"); ?>
				</div>
			</td>
		</tr>
		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red"></font> 닉네임
			</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="nickname"  class="form-control form-control-sm" size="20" maxlength="20" value="<?=$row->nickname53; ?>"  class="form-control form-control-sm">
					<? If (form_error("nickname")==true) echo form_error("nickname"); ?>
				</div>
			</td>
		</tr>
		<?
		  $tel1 = trim(substr($row->tel53,0,3));
		  $tel2 = trim(substr($row->tel53,3,4));
		  $tel3 = trim(substr($row->tel53,7,4));
		?>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red"></font> 전화
			</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<input  type="text" name="tel1" size="3" maxlength="3" value="<?=$tel1; ?>" class="form-control form-control-sm">-
					<input  type="text" name="tel2" size="4" maxlength="4" value="<?=$tel2; ?>" class="form-control form-control-sm">-
					<input  type="text" name="tel3" size="4" maxlength="4" value="<?=$tel3; ?>" class="form-control form-control-sm">
				</div>
			</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red"></font> 등급
			</td>
			<td width="80%" align="left">
				<div class="form-inline">

		<?if ($row->rank53==0) {?>

		<input type="radio" name="rank" value="0" checked>직원&nbsp;&nbsp;
		<input type="radio" name="rank" value="1">관리자
		
		<?} else {?>

		<input type="radio" name="rank" value="0" >직원&nbsp;&nbsp;
		<input type="radio" name="rank" value="1"checked>관리자
		<? } ?>			

				</div>
			</td>
		</tr>
		<tr> 
			<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red"></font> 사진</td>
			<td width="80%" align="left">
				<div class="form-inline">
					<b>파일이름</b> : <?=$row->bgpic53; ?> &nbsp;&nbsp;
					<input  type="file" name="bgpic" value="" size="20" class="form-control form-control-sm"> <br>
				</div>
				<?
					if ($row->bgpic53)     // 이미지가 있는 경우
						echo("<img src='/~sale53/product_img/$row->bgpic53' width='200' class='img-fluid img-thumbnail'>");
					else                   // 이미지가 없는 경우
						echo("<img src='' width='200' class='img-fluid img-thumbnail'>");
				?>
			</td>
		</tr>
		</table>


		---------------------------->

		<div align="center">
		<input type="submit" value="저장"  class="btn btn-sm btn-dark">&nbsp;
		<input type="button" value="이전화면"  class="btn btn-sm btn-dark" onclick="history.back();">		
		</div>
		</form>

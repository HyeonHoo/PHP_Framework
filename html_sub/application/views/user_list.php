<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">뮤지션</div>
<script>
       function find_text()
		{
			if (!form1.text1.value)      
				form1.action="/~sale53/user/lists";
			else                                   
				form1.action="/~sale53/user/lists/text1/" + form1.text1.value;
			form1.submit();
		}
</script>

<?     $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";  ?>



		<form name="form1" action="" method="post">
			<div class="row">
				<div class="col-3" align="left">            

					<div class="input-group  input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">이름</span>
						</div>
						<input type="text" name="text1" value="<?=$text1; ?>" class="form-control"  
						onKeydown="if (event.keyCode == 13) { find_text(); }" >

						<div class="input-group-append">
							<button class="btn  btn-dark " type="button" onClick="find_text();">검색</button>
						</div>
					</div>

				</div>
				<div class="col-9" align="right">           
					   <a href="/~sale53/user/add<?=$tmp; ?>" class="btn btn-sm btn-dark">추가</a>
				</div>
			</div>
		</form>

		&nbsp;&nbsp;
		<div class="row">
<?
		 foreach ($list as $row)
		 {
			 $iname=$row->bgpic53 ? $row->bgpic53 : "";
			 $pname=$row->name53;
		?>

		<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
				$tel1 = trim(substr($row->tel53,0,3));      // 전화 : 지역번호 추출
				$tel2 = trim(substr($row->tel53,3,4));      // 전화 : 국번호 추출
				$tel3 = trim(substr($row->tel53,7,4));      // 전화 : 번호 추출
				$tel = $tel1 . "-" . $tel2 . "-" . $tel3;       // 합치기
				$rank = $row->rank53==0 ? "직원" : "관리자" ;      // 0->직원, 1->관리자 
		?>
	<div class="col-3">
	<div class="card" style="width: 16rem;">
	
	  <?
					if ($row->bgpic53)     // 이미지가 있는 경우
						echo("<img src='/~sale53/product_img/$row->bgpic53' width='200'  class='mythumb_image4'>");
					else                   // 이미지가 없는 경우
						echo("<img src='' width='200' class='card-img-top'>");
      ?>
					
	  <div class="card-body">
		<h5 class="card-title"><?=$row->name53; ?></h5>
		<p class="card-text"><?=$row->nickname53; ?></p>
	  </div>
	  <ul class="list-group list-group-flush">
		<li class="list-group-item">ID = <?=$row->uid53; ?></li>
		<li class="list-group-item">Pwd =<?=$row->pwd53; ?> </li>
		<li class="list-group-item">Phone = <?=$tel; ?></li>
	  </ul>
	  <div class="card-body">
		<a href="/~sale53/user/view/no/<?=$no;?> <?=$tmp; ?>" class="card-link">Info</a>
	  </div>
	</div>
	</div>
	
	<?
			}
	?>
		</div>

<!---------------
<div class="row">
		
				<div class="col-3">
					<div class="mythumb_box">
					<a href="javascript:zoomimage('<?=$iname ?>','<?=$pname?>');">
						<img src="/~sale53/product_img/thumb/<?=$iname ?>" class="mythumb_image">
					</a>
						<div class="mythumb_text"><?=$pname ?></div>
					</div>
				</div>
		<?
				}
		?>
		</div>

	<table class="table  table-bordered  table-sm  mymargin5">
		<tr class="mycolor2">
			<td width="10%">번호</td>
			<td width="10%">이름</td>
			<td width="10%">닉네임</td>
			<td width="20%">전화</td>
			<td width="20%">아이디</td>
			<td width="10%">암호</td>
			<td width="10%">등급</td>
			<td width="10%">배경사진</td>
		</tr>

		<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
				$tel1 = trim(substr($row->tel53,0,3));      // 전화 : 지역번호 추출
				$tel2 = trim(substr($row->tel53,3,4));      // 전화 : 국번호 추출
				$tel3 = trim(substr($row->tel53,7,4));      // 전화 : 번호 추출
				$tel = $tel1 . "-" . $tel2 . "-" . $tel3;       // 합치기
				$rank = $row->rank53==0 ? "직원" : "관리자" ;      // 0->직원, 1->관리자 
		?>
		<tr>
			<td><?=$no; ?></td>
			<td><a href="/~sale53/user/view/no/<?=$no;?> <?=$tmp; ?>"><?=$row->name53; ?></a></td>
			<td><?=$row->nickname53; ?></td>
			<td><?=$tel; ?></td>
			<td><?=$row->uid53; ?></td>
			<td><?=$row->pwd53; ?></td>
			<td><?=$rank; ?></td>
			<td><?=$row->bgpic53; ?></td>
		</tr>
		<?
			}
		?>

		----------------->
		</table>

			<?=$pagination; ?>

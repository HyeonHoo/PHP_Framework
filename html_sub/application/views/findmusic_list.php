
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">음반선택</div>
<script>
       function find_text()
		{
			if (!form1.text1.value)      
				form1.action="/~sale53/findmusic/lists";
			else                                   
				form1.action="/~sale53/findmusic/lists/text1/" + form1.text1.value;
			form1.submit();
		}
		function SendMusic(no, title, comment)
		{
			opener.form1.music_no.value = no;                // ①
			opener.form1.music_title.value = title;       // ②
			opener.form1.comment.value = comment;                       // ③
			self.close();
		}
</script>


		<form name="form1" action="" method="post">
			<div class="row">
				<div class="col-6" align="left">            

					<div class="input-group  input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">이름</span>
						</div>
						<input type="text" name="text1" value="<?=$text1; ?>" class="form-control"  onKeydown="if (event.keyCode == 13) { find_text(); }" >

						<div class="input-group-append">
							<button class="btn  btn-sm btn-dark " type="button" onClick="find_text();">검색</button>
						</div>
					</div>

				</div>
				<div class="col-6" align="right">           
					   
				</div>
			</div>
		</form>

		<table class="table table-hover">
				<thead>
			<tr>
			  <th scope="col">번호</th>
			  <th scope="col">장르</td>
			  <th scope="col">음반명</td>
			  <th scope="col">음반재고</td>
			  <th scope="col">비고</td>
			</tr>
		  </thead>

		<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
		?>
			
		  <tbody>
			<tr>
			 <td> <?=$row->no53 ?></td>
			 <td><?=$row->genre_name53 ?></a></td>
			 <td><a href="javascript:SendMusic(<?=$row->no53?>, '<?=$row->title53?>','<?=$row->comment53?>');">
				<?=$row->title53?></a></td>
			<td align="rigth"><?=number_format($row->jaego53) ?></a></td>
			<td><?=$row->comment53?></td>
		</tr>	
	   </tbody>
		<?
			}
		?>
		</table>
		<?=$pagination; ?>


<!-----------
	<table class="table  table-bordered  table-sm  mymargin5">
		<tr class="mycolor2">
			<td width="10%">번호</td>
			<td width="20%">장르</td>
			<td width="30%">음원명</td>
			<td width="20%">재고</td>
			<td width="20%">비고</td>
		</tr>

		<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
		?>
		<tr>
			<td><?=$no; ?></td>
			<td><?=$row->genre_name53 ?></a></td>
			<td align="lefft">
			<a href="javascript:SendMusic(<?=$row->no53?>, '<?=$row->title53?>',<?=$row->comment53?>);">
			<?=$row->title53?>
			</a></td>
			<td align="rigth"><?=number_format($row->jaego53) ?></a></td>
			<td><?=$row->comment53?></td>
		</tr>
		<?
			}
		?>
		</table>

			<?=$pagination; ?>
------------------>
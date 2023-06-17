
			<br>
			<div class="alert mycolor1" role="alert">구분</div>
<script>
       function find_text()
		{
			if (!form1.text1.value)      
				form1.action="/~sale53/gubun/lists";
			else                                   
				form1.action="/~sale53/gubun/lists/text1/" + form1.text1.value;
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
						<input type="text" name="text1" value="<?=$text1; ?>" class="form-control"  onKeydown="if (event.keyCode == 13) { find_text(); }" >

						<div class="input-group-append">
							<button class="btn  btn-sm mycolor1 " type="button" onClick="find_text();">검색</button>
						</div>
					</div>

				</div>
				<div class="col-9" align="right">           
					   <a href="/~sale53/gubun/add<?=$tmp; ?>" class="btn btn-sm mycolor1">추가</a>
				</div>
			</div>
		</form>

	<table class="table  table-bordered  table-sm  mymargin5">
		<tr class="mycolor2">
			<td width="10%">번호</td>
			<td width="90%">이름</td>
		</tr>

		<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
		?>
		<tr>
			<td><?=$no; ?></td>
			<td><a href="/~sale53/gubun/view/no/<?=$no;?> <?=$tmp; ?>"><?=$row->name53; ?></a></td>
		</tr>
		<?
			}
		?>
		</table>

			<?=$pagination; ?>

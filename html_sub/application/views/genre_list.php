<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">장르</div>
<script>
       function find_text()
		{
			if (!form1.text1.value)      
				form1.action="/~sale53/genre/lists";
			else                                   
				form1.action="/~sale53/genre/lists/text1/" + form1.text1.value;
			form1.submit();
		}
</script>

<?     $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";  ?>



		<form name="form1" action="" method="post">
			<div class="row">
				<div class="col-3" align="left">            

					<div class="input-group  input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">장르</span>
						</div>
						<input type="text" name="text1" value="<?=$text1; ?>" class="form-control"  onKeydown="if (event.keyCode == 13) { find_text(); }" >

						<div class="input-group-append">
							<button class="btn  btn-sm btn-dark " type="button" onClick="find_text();">검색</button>
						</div>
					</div>

				</div>
				<div class="col-9" align="right">           
					   <a href="/~sale53/genre/add<?=$tmp; ?>" class="btn btn-sm btn-dark">추가</a>
				</div>
			</div>
		</form>
&nbsp;&nbsp;

		<table class="table table-hover">
				<thead>
			<tr>
			  <th scope="col">번호</th>
			  <th scope="col">장르</th>
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
			  <td><a href="/~sale53/genre/view/no/<?=$no;?> <?=$tmp; ?>"><?=$row->name53 ?></td>
			</tr>		
	   </tbody>
		<?
			}
		?>
		</table>

			<?=$pagination; ?>

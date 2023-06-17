<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">음반수출</div>
<script>
       function find_text()
		{                              
			form1.action="/~sale53/jaegoo/lists/text1/" + form1.text1.value+"/page";
			form1.submit();
		}

		$(function() {
			 $('#text1') .datetimepicker({
				  locale: 'ko',
				  format: 'YYYY-MM-DD',
				  defaultDate: moment()
			 });
			 $('#text2') .datetimepicker({
					  locale: 'ko',
					  format: 'YYYY-MM-DD',
					  defaultDate: moment()
				 });

			$("#text1") .on("dp.change", function (e) {
				find_text();
			});
			$("#text2") .on("dp.change", function (e) {
				find_text();
			});
		});
</script>

<?     $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";  ?>



		<form name="form1" action="" method="post">
			<div class="row">
				<div class="col-12"  align="left"> 
					<div class="form-inline" >

					<div class="input-group  input-group-sm table-sm date" id="text1">
						<div class="input-group-prepend">
							<span class="input-group-text">날짜</span>
						</div>
						<input type="text" name="text1" value="<?=$text1; ?>" class="form-control"    size="9"
						onKeydown="if (event.keyCode == 13) { find_text(); }" >
						<div class="input-group-append">
						    <div class="input-group-text">
								<div class="input-group-addon"><i class="far fa-calendar-alt fa-lg"></i></div>
								</div>
							</div>
						</div>
							&nbsp;-&nbsp;
							<div class="input-group  input-group-sm table-sm date" id="text2">
						<div class="input-group-prepend">
							<span class="input-group-text">날짜</span>
						</div>
						<input type="text" name="text2" value="<?=$text2; ?>" class="form-control"    size="9"
						onKeydown="if (event.keyCode == 13) { find_text(); }" >
						<div class="input-group-append">
						    <div class="input-group-text">
								<div class="input-group-addon"><i class="far fa-calendar-alt fa-lg"></i></div>
								</div>
							</div>
						</div>
					</div>

		
				</div>

				<div class="col-12" align="right">           
					   <a href="/~sale53/jaegoo/add<?=$tmp; ?>" class="btn btn-sm btn-dark">추가</a>
					   
				</div>
			</div>
			 &nbsp;&nbsp;
		</form>

		<table class="table table-hover">
				<thead>
			<tr>
			  <th scope="col">번호</th>
			  <th scope="col">날짜</td>
			  <th scope="col">음반명</td>
			  <th scope="col">음반수출</td>
			  <th scope="col">음반설명</td>
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
			 <td><?=$row->writeday53 ?></a></td>
			  <td><a href="/~sale53/jaegoo/view/no/<?=$no;?> <?=$tmp; ?>"><?=$row->music_title53 ?></a></td>
			  <td align="rigth"><?=number_format($row->muo53) ?></a></td>
			<td align="rigth"><?=$row->comment53 ?></a></td>
			</tr>		
	   </tbody>
		<?
			}
		?>
		</table>
		<?=$pagination; ?>
<!---------------------
	<table class="table  table-bordered  table-sm  mymargin5">
		<tr class="mycolor2">
			<th scope="col">번호</td>
			<th scope="col">="15%">날짜</td>
			<th scope="col">="30%">제품명</td>
			<th scope="col">="15%">단가</td>
			<th scope="col">="10%">수량</td>
			<th scope="col">="15%">금액</td>
			<th scope="col">="10%">비고</td>
		</tr>

		<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
		?>
		<tr>
			<td><?=$row->no53 ?></td>
			<td><?=$row->writeday53 ?></a></td>
			<td align="lefft"><a href="/~sale53/jaegoo/view/no/<?=$no;?> <?=$tmp; ?>"><?=$row->music_name53 ?></a></td>
			<td align="rigth"><?=number_format($row->jaego53) ?></a></td>
			<td align="rigth"><?=number_format($row->mui53) ?></a></td>
			<td align="rigth"><?=number_format($row->jaegos53) ?></a></td>
			<td align="rigth"><?=$row->comment53 ?></a></td>
		</tr>
		<?
			}
		?>
		</table>
-------------------->

			

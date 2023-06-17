
<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">인기 음반</div>
<script>
		function find_text()
		{
			form1.action="/~sale53/chartlist/lists/text1/" + form1.text1.value + "/text2/" + form1.text2.value + "/page";
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

<?     $tmp = $text1 ? "/text1/$text1/text2/$text2/page/$page" : "/page/$page";  ?>

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

		</form>
&nbsp;&nbsp;
	<table class="table table-hover">
				<thead>
			<tr>
			 <th scope="col">음반 사진</td>
			  <th scope="col">음반명</td>
			  <th scope="col">누적 음반판매 수량</td>
			</tr>
		  </thead>

		<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
		?>
			
		  <tbody>
			<tr>
				<td> 
			  <?
			if ($row->pic53)     // 이미지가 있는 경우
				echo("<img src='/~sale53/product_img/$row->pic53' width='300'  class='mythumb_image5'
				>");
			else                   // 이미지가 없는 경우
					echo("<img src='' width='200' class='card-img-top'>");
			?>
			</a></td>
			  <td><?=$row->music_title53 ?></a></td>
			  <td align="rigth"><?=number_format($row->cmuo) ?></a></td>
			</tr>		
	   </tbody>
		<?
			}
		?>
		</table>
		<div class="col-12"  align="center"> 
		<?=$pagination; ?>
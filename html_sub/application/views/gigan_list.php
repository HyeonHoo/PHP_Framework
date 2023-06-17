
			<br>
			<div class="alert mycolor1" role="alert">기간별 매출입현황</div>
<script>
	
		function find_text()
		{
			form1.action="/~sale53/gigan/lists/text1/" + form1.text1.value+"/text2/" + form1.text2.value+"/text3/"
						+ form1.text3.value+"/page";
			form1.submit();
		}
		 function make_excel()
         {
            form1.action="/~sale53/gigan/excel/text1/" + form1.text1.value+"/text2/" + form1.text2.value +
                             "/text3/" + form1.text3.value;
            form1.submit();
         }        

		$(function() {
			$('#text1') . datetimepicker({
			locale : 'ko',
			format : 'YYYY-MM-DD',
			defaultDate : moment()
		});
		$('#text2') . datetimepicker({
			locale : 'ko',
			format : 'YYYY-MM-DD',
			defaultDate : moment()
		});
			$('#text1') .on("dp.change", function (e) {find_text();} );
			$('#text2') .on("dp.change", function (e) {find_text();} );
		});
</script>

		<form name="form1" action="" method="post">
			<div class="row">
				<div class="col-12" align="left"> 
					<div class="form-inline" >

					<div class="input-group  input-group-sm table-sm date" id="text1">
						<div class="input-group-prepend">
							<span class="input-group-text">날짜</span>
						</div>
						<input type="text" name="text1" value="<?=$text1; ?>" class="form-control"   size="9"
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
						<input type="text" name="text2" value="<?=$text2; ?>" class="form-control"   size="9"
						onKeydown="if (event.keyCode == 13) { find_text(); }" >
						<div class="input-group-append">
						    <div class="input-group-text">
								<div class="input-group-addon"><i class="far fa-calendar-alt fa-lg"></i></div>
								</div>
							</div>
						</div>
						&nbsp;-&nbsp;
						<div class="input-group  input-group-sm">
							<div class="input-group-prepend">
								<span class="input-group-text">제품명</span>
							</div>
							<div class="input-group-prepend">
								<select name="text3" class="form-control form-control-sm"
									onchange="javascript:find_text();">
									<option value="0">전체</option>
								<?
									foreach ($list_product as $row)
									{
											if ($row->no53==$text3)
												echo("<option value='$row->no53' selected>$row->name53</option>");
											else
												echo("<option value='$row->no53' >$row->name53</option>");
									}
								?>
								</select>
								</div>
								&nbsp&nbsp<input type="button" value="EXCEL" class="form-control btn btn-sm mycolor1"
								onClick="if (confirm('엑셀파일로 저장할까요?')) make_excel();">

								</div>
					</div>
				</div>
			</div>

		</form>

	<table class="table  table-bordered  table-sm  mymargin5">
		<tr class="mycolor2">
			<td width="15%">날짜</td>
			<td width="25%">제품명</td>
			<td width="10%">단가</td>
			<td width="10%">매입수량</td>
			<td width="10%">매출수량</td>
			<td width="15%">금액</td>
			<td width="15%">비고</td>
		</tr>

		<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
				$numi=$row->numi53 ? number_format($row->numi53) : "";
				$numo=$row->numo53 ? number_format($row->numo53) : "";
		?>
		<tr>
			<td><?=$row->writeday53 ?></a></td>
			<td align="lefft"><?=$row->product_name53 ?></a></td>
			<td align="rigth"><?=number_format($row->price53) ?></a></td>
			<td align="rigth" bgcolor="lightyellow"><?=$numi ?></a></td>
			<td align="rigth" bgcolor="lightyellow"><?=$numo ?></a></td>
			<td align="rigth"><?=number_format($row->prices53) ?></a></td>
			<td align="rigth"><?=$row->bigo53 ?></a></td>
		</tr>
		<?
			}
		?>
		</table>

			<?=$pagination; ?>

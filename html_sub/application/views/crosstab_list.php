
			<br>
			<div class="alert mycolor1" role="alert">월별 제품별 매출현황</div>
<script>
		function find_text()
		{
			form1.action="/~sale53/crosstab/lists/text1/" + form1.text1.value + "/page";
			form1.submit();
		}

		$(function() {
			 $('#text1') .datetimepicker({
				  locale: 'ko',
				  format: 'YYYY',
				  
				  defaultDate: moment()
			 });
			$("#text1") .on("dp.change", function (e) {
				find_text();
			});
		});
</script>

		<form name="form1" action="" method="post">
			<div class="row">
				<div class="col-12" align="left"> 
					<div class="form-inline" >

					<div class="input-group  input-group-sm table-sm date" id="text1">
						<div class="input-group-prepend">
							<span class="input-group-text">년도</span>
						</div>
						<input type="text" name="text1" value="<?=$text1; ?>" class="form-control"   size="9"
						onKeydown="if (event.keyCode == 13) { find_text(); }" >
						<div class="input-group-append">
						    <div class="input-group-text">
								<div class="input-group-addon"><i class="far fa-calendar-alt fa-lg"></i></div>
								</div>
							</div>
						</div>
						

					</div>
				</div>
			</div>

		</form>

	<table class="table  table-bordered  table-sm  mymargin5">
		<tr class="mycolor2">
			<td width="40%">제품명</td>
			<td width="5%">1월</td>
			<td width="5%">2월</td>
			<td width="5%">3월</td>
			<td width="5%">4월</td>
			<td width="5%">5월</td>
			<td width="5%">6월</td>
			<td width="5%">7월</td>
			<td width="5%">8월</td>
			<td width="5%">9월</td>
			<td width="5%">10월</td>
			<td width="5%">11월</td>
			<td width="5%">12월</td>
		</tr>

		<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
		?>
		<tr>
			<td align="lefft" bgcolor="lightyellow"><?=$row->product_name53 ?></a></td>
			<td align="rigth"><?=$row->s1==0 ? "" : number_format($row->s1); ?></a></td>
			<td align="rigth"><?=$row->s2==0 ? "" : number_format($row->s2); ?></a></td>
			<td align="rigth"><?=$row->s3==0 ? "" : number_format($row->s3); ?></a></td>
			<td align="rigth"><?=$row->s4==0 ? "" : number_format($row->s4); ?></a></td>
			<td align="rigth"><?=$row->s5==0 ? "" : number_format($row->s5); ?></a></td>
			<td align="rigth"><?=$row->s6==0 ? "" : number_format($row->s6); ?></a></td>
			<td align="rigth"><?=$row->s7==0 ? "" : number_format($row->s7); ?></a></td>
			<td align="rigth"><?=$row->s8==0 ? "" : number_format($row->s8); ?></a></td>
			<td align="rigth"><?=$row->s9==0 ? "" : number_format($row->s9); ?></a></td>
			<td align="rigth"><?=$row->s10==0 ? "" : number_format($row->s10); ?></a></td>
			<td align="rigth"><?=$row->s11==0 ? "" : number_format($row->s11); ?></a></td>
			<td align="rigth"><?=$row->s12==0 ? "" : number_format($row->s12); ?></a></td>
		</tr>
		<?
			}
		?>
		</table>

			<?=$pagination; ?>
